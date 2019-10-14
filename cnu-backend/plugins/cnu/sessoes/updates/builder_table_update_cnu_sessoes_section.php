<?php namespace cnu\Sessoes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuSessoesSection extends Migration
{
    public function up()
    {
        Schema::table('cnu_sessoes_section', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('cnu_sessoes_section', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
