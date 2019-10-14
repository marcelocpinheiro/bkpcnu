<?php namespace cnu\MainSlider\Models;

use Model;

/**
 * Model
 */
class SliderContent extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $attachOne = [
        "slide_image" => "System\Models\File"
    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cnu_mainslider_content';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
