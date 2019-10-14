<?php

use cnu\AtalhosDaHome\Models\ShortcutType;
use cnu\AtalhosDaHome\Models\Shortcut;
use cnu\AtalhosDaHome\Controllers\ShortcutController;

Route::get('shortcut-types', function() {
    $shortcutTypes = ShortcutType::all();
    return $shortcutTypes;
});

Route::get('shortcuts/{shortcutTypeId?}', function($shortcutTypeId = 0) {
    if($shortcutTypeId == 0){
        $shortcuts = Shortcut::all();
    }else{
        $shortcuts = Shortcut::where('type_id', $shortcutTypeId)->limit(4)->get();
    }
    
    return $shortcuts;
});

/*
Route::prefix('backend')->group(function () {
    $shortcutController = 'cnu\AtalhosDaHome\Controllers\ShortcutController@';
    Route::get('/cnu/atalhosdahome/testedeRota', $shortcutController.'teste');
});*/