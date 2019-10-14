<?php namespace cnu\AtalhosDaHome\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuAtalhosdahomeShortcut2 extends Migration
{
    public function up()
    {
        Schema::table('cnu_atalhosdahome_shortcut', function($table)
        {
            $table->integer('type_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('cnu_atalhosdahome_shortcut', function($table)
        {
            $table->dropColumn('type_id');
        });
    }
}
