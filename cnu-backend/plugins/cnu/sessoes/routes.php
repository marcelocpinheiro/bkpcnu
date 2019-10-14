<?php

use cnu\Sessoes\Models\Section;

Route::get('sections/{slug}', function($slug) {
    $sections = Section::with(['columns' => function($query){
        $query->where('active', true)->with('component');
    }])->get();
    return $sections;
});