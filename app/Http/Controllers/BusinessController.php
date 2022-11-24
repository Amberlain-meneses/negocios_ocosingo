<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Repositories\BusinessRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Models\Business;
use Flash;
use Response;

class BusinessController extends AppBaseController
{
    /** @var  BusinessRepository */
    private $businessRepository;

    public function __construct(BusinessRepository $businessRepo)
    {
        $this->businessRepository = $businessRepo;
    }

    /**
     * Display a listing of the Business.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $businesses = $this->businessRepository->all();

        //$businesses = Business::all();
        return view('businesses.index')
            ->with('businesses', $businesses);
    }

    /**
     * Show the form for creating a new Business.
     *
     * @return Response
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created Business in storage.
     *
     * @param CreateBusinessRequest $request
     *
     * @return Response
     */
    public function store(CreateBusinessRequest $request)
    {
        $input = $request->all();
        //se sube la imagen
        $input['image'] =  $this->uploadImage($request);
        $input['is_verified'] = $this->isVerified();

        $business = $this->businessRepository->create($input);

        Flash::success('Negocio agregado correctamente');
        
        return redirect(Auth::user()->default_url);
    }   

    /**
     * Display the specified Business.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $business = $this->businessRepository->find($id);

        if (empty($business)) {
            Flash::error('Negocio no encontrado');

            return redirect(route('businesses.index'));
        }

        return view('businesses.show')->with('business', $business);
    }

    /**
     * Show the form for editing the specified Business.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $business = $this->businessRepository->find($id);

        if (empty($business)) {
            Flash::error('Negocio no encontrado');

            return redirect(route('businesses.index'));
        }

        return view('businesses.edit')->with('business', $business);
    }

    /**
     * Update the specified Business in storage.
     *
     * @param int $id
     * @param UpdateBusinessRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusinessRequest $request)
    {
        $business = $this->businessRepository->find($id);

        if (empty($business)) {
            Flash::error('Negocio no encontrado');

            return redirect(route('businesses.index'));
        }

        $business = $this->businessRepository->update($request->all(), $id);

        Flash::success('Negocio actualizado correctamente');

        return redirect(route('businesses.index'));
    }

    /**
     * Remove the specified Business from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $business = $this->businessRepository->find($id);

        if (empty($business)) {
            Flash::error('Negocio no encontrado');

            return redirect(route('businesses.index'));
        }

        $this->businessRepository->delete($id);

        Flash::success('Negocio eliminado correctamente');

        return redirect(route('businesses.index'));
    }

    /**
     * Get business by category
     * @param $category
     */
    public function bussinesByCategory($category){
        //dd($category);
        $categories = Category::where('category_name', "=", $category)->first();
        $bussiness = Business::where('category_id', "=", $categories->id)->get();
        return view('tienda', compact('bussiness'));
        //dd($categories);
        //dd($bussiness);
    }

    /**
     * Search business by name and category
     * @param Request $request
     */
    public function searchBusiness(Request $request){

        if($request){
            $querySearch = trim($request->get('search'));

            $bussiness = Business::where('name', 'LIKE','%'.$querySearch.'%')
                ->orWhereHas('category', function($q) use ($querySearch){
                    $q->where('category_name', 'LIKE', '%'.$querySearch.'%');
                })
                ->orderBy('id', 'asc')
                ->get();
            return view('tienda', ['bussiness' => $bussiness, 'search'=> $querySearch]);    
        }
    }
  

    /**
     * Se encargan de subir la imagen principal
     * y retorna el nombre de ese archivo
     * @param  Request  $request
     * @return $image
     */

    public function uploadImage($request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image  = $file->getClientOriginalName();
            $file->move(public_path("images/"), $image);
            return $image;
        }
    }


    public function isVerified(){
        Auth::user()->hasRole('superAdmin') ? $is_verified = 1 : $is_verified = 0;
        return $is_verified;
     }

}
