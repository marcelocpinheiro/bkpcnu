<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMainsliderContent3 extends Migration
{
    public function up()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->string('background_color');
        });
    }
    
    public function down()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->dropColumn('background_color');
        });
    }
}
