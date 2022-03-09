<?php namespace Pandaprofit\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePandaprofitProjectsList2 extends Migration
{
    public function up()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->string('type', 255)->change();
            $table->decimal('square', 10, 0)->nullable()->unsigned(false)->default(null)->change();
            $table->string('pdf_href', 255)->change();
            $table->string('image', 255)->change();
            $table->string('slug', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->string('type', 191)->change();
            $table->integer('square')->nullable()->unsigned(false)->default(null)->change();
            $table->string('pdf_href', 191)->change();
            $table->string('image', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
