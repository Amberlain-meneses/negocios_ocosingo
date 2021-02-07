<?php

namespace App\Repositories;

use App\Models\Business;
use App\Repositories\BaseRepository;

/**
 * Class BusinessRepository
 * @package App\Repositories
 * @version February 7, 2021, 6:32 pm UTC
*/

class BusinessRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'adress',
        'location',
        'schedule',
        'phone',
        'service_id',
        'category_id',
        'references',
        'owner'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Business::class;
    }
}
