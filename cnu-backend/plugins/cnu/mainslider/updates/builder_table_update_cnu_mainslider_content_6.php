<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMainsliderContent6 extends Migration
{
    public function up()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->string('button_background_color', 191)->default('#00995D')->change();
            $table->string('button_content_color', 191)->default('#FFF')->change();
        });
    }
    
    public function down()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->string('button_background_color', 191)->default('#FFF')->change();
            $table->string('button_content_color', 191)->default('#00995D')->change();
        });
    }
}
