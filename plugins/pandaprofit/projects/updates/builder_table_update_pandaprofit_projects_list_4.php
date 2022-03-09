<?php namespace Pandaprofit\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePandaprofitProjectsList4 extends Migration
{
    public function up() {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->string('price', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->integer('price')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
