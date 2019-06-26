<?php namespace View9\Citiesnepal\Models;

use Model;

/**
 * Model
 */
class Province extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'view9_citiesnepal_provinces';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required'
    ];
}
