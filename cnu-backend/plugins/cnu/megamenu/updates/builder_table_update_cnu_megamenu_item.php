<?php namespace cnu\MegaMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMegamenuItem extends Migration
{
    public function up()
    {
        Schema::table('cnu_megamenu_item', function($table)
        {
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('cnu_megamenu_item', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
