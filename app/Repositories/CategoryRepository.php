<?php

namespace App\Repositories;

use App\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version February 27, 2021, 7:39 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_name'
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
        return Category::class;
    }
}
