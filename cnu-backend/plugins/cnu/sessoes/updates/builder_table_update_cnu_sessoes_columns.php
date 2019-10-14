<?php namespace cnu\Sessoes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuSessoesColumns extends Migration
{
    public function up()
    {
        Schema::table('cnu_sessoes_columns', function($table)
        {
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('cnu_sessoes_columns', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
