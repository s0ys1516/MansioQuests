<?php namespace Pandaprofit\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePandaprofitProjectsList extends Migration
{
    public function up()
    {
        Schema::create('pandaprofit_projects_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('type');
            $table->integer('square');
            $table->integer('floors');
            $table->integer('material');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('closet');
            $table->integer('balconies');
            $table->string('pdf_href');
            $table->text('description');
            $table->string('image');
            $table->integer('price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pandaprofit_projects_list');
    }
}
