<?php namespace cnu\MegaMenu\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $belongsTo = [
        'category' => 'cnu\MegaMenu\Models\Category'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cnu_megamenu_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
