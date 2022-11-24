<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Product;
use App\Models\Business;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        //se sube la imagen
        $input['image'] =  $this->uploadImage($request);
        $product = $this->productRepository->create($input);

        Flash::success('Producto guardado correctamente');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Producto actualizado con éxito');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Producto eliminado correctamente');

        return redirect(route('products.index'));
    }

    public function productByBusiness($business){
        $business = Business::where('name', "=", $business)->first();
        $product = Product::where('business_id', "=", $business->id)->get();
        //dd($product);
        return view('products', compact('product'));
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
