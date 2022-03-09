<?php namespace Pandaprofit\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePandaprofitProjectsList extends Migration
{
    public function up()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->string('slug')->nullable();
            $table->integer('square')->nullable()->change();
            $table->integer('floors')->nullable()->change();
            $table->integer('material')->nullable()->change();
            $table->integer('bedrooms')->nullable()->change();
            $table->integer('bathrooms')->nullable()->change();
            $table->integer('closet')->nullable()->change();
            $table->integer('balconies')->nullable()->change();
            $table->string('pdf_href', 191)->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('image', 191)->nullable()->change();
            $table->integer('price')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pandaprofit_projects_list', function($table)
        {
            $table->dropColumn('slug');
            $table->integer('square')->nullable(false)->change();
            $table->integer('floors')->nullable(false)->change();
            $table->integer('material')->nullable(false)->change();
            $table->integer('bedrooms')->nullable(false)->change();
            $table->integer('bathrooms')->nullable(false)->change();
            $table->integer('closet')->nullable(false)->change();
            $table->integer('balconies')->nullable(false)->change();
            $table->string('pdf_href', 191)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('image', 191)->nullable(false)->change();
            $table->integer('price')->nullable(false)->change();
        });
    }
}
