<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMainsliderContent7 extends Migration
{
    public function up()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->string('title_color')->default('#282828');
            $table->string('subtitle_color')->default('#282828');
        });
    }
    
    public function down()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->dropColumn('title_color');
            $table->dropColumn('subtitle_color');
        });
    }
}
