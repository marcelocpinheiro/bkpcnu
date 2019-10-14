<?php namespace cnu\Componentes\Models;

use Model;

/**
 * Model
 */
class Content extends Model
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
    public $table = 'cnu_componentes_content';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
