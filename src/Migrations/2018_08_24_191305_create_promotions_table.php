<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (in_array('promotions', config('cms.active-core-modules'))) {
            Schema::create('promotions', function (Blueprint $table) {
                $table->increments('id');
                $table->dateTime('published_at')->nullable();
                $table->dateTime('finished_at')->nullable();
                $table->string('slug');
                $table->text('details')->nullable();
                $table->nullableTimestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (in_array('promotions', config('cms.active-core-modules'))) {
            Schema::dropIfExists('promotions');
        }
    }
}
