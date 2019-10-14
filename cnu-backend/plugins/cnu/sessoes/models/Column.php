<?php namespace cnu\Sessoes\Models;

use Model;

/**
 * Model
 */
class Column extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $belongsTo = [
        'section' => 'cnu\Sessoes\Models\Section',
        'component' => 'cnu\Componentes\Models\Content'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cnu_sessoes_columns';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
