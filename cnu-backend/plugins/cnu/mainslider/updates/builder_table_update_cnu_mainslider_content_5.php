<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMainsliderContent5 extends Migration
{
    public function up()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->string('button_background_color')->default('#FFF');
            $table->string('button_content_color')->default('#00995D');
        });
    }
    
    public function down()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->dropColumn('button_background_color');
            $table->dropColumn('button_content_color');
        });
    }
}
