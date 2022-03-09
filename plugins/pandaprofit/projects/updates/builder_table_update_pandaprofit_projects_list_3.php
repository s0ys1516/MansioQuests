<?php namespace Pandaprofit\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePandaprofitProjectsList3 extends Migration
{
    public function up()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->string('material')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->integer('material')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
