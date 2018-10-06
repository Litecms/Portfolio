<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfoliosTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: portfolios
         */
        Schema::create(config('litecms.portfolio.portfolio.model.table'), function ($table) {
            $table->increments('id');
            $table->string('title', 50)->nullable();
            $table->string('details', 2555)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('image')->nullable();
            $table->text('images')->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('subtitle', 50)->nullable();
            $table->text('url')->nullable();
            $table->enum('published', ['Yes','No'])->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 100)->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
        
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.portfolio.portfolio.model.table'));
    }
}
