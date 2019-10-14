<?php namespace cnu\Conteudo\Models;

use Model;

/**
 * Model
 */
class Pagina extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cnu_conteudo_pagina';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
