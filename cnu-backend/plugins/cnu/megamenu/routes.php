<?php

use cnu\MegaMenu\Models\Menu;

Route::get('menu-list', function() {
    $menus = Menu::with(['categories' => function($query){
        $query->with('items');
    }])->get();
    return $menus;
});