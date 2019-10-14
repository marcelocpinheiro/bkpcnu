<?php namespace cnu\AtalhosDaHome\Models;

use Model;

/**
 * Model
 */
class Shortcut extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /* Relations */

    public $belongsTo = [
        'type' => 'cnu\AtalhosDaHome\Models\ShortcutType'
    ];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cnu_atalhosdahome_shortcut';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
