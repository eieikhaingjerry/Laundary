<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("Cascade");

            $table->unsignedInteger('normal_id')->nullable();
            $table->foreign("normal_id")->references("id")->on("items")->onDelete("Cascade");

            $table->unsignedInteger('large_id')->nullable();
            $table->foreign("large_id")->references("id")->on("items")->onDelete("Cascade");

            $table->unsignedInteger('extra_id')->nullable();
            $table->foreign("extra_id")->references("id")->on("items")->onDelete("Cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
