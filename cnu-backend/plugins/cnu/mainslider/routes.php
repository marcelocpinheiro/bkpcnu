<?php

use cnu\MainSlider\Models\SliderContent;

Route::get('sliders', function() {
    $sliders = SliderContent::with(['slide_image'])->where('active', true)->get();
    return $sliders;
});