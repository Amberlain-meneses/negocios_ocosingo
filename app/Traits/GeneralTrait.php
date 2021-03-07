<?php

namespace App\Traits;


trait GeneralTrait
{

    /**
     * Si no se reciben datos se asume que es un admin
     * caso contrario se ejecuta la paginación bajo las condiciones
     * @return $data
     */
    public static function pagination($column, $operator, $value)
    {
        if ($column || $operator || $value ) {
            return self::paginate(5);
        } else {
            return self::where($column,$operator,$value)->paginate(5);
        }
    }
}
