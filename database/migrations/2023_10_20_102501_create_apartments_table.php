<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();

            $table->string('name', 40)->nullable(false);
            $table->tinyInteger('rooms')->unsigned()->nullable(false);
            $table->tinyInteger('beds')->unsigned()->nullable(false);
            $table->tinyInteger('bathrooms')->unsigned()->nullable(false);
            $table->smallInteger('mq')->unsigned()->nullable(false);
            $table->string('address', 100)->nullable(false);
            $table->decimal('lat', 11, 8);
            $table->decimal('lon', 11, 8);
            $table->string('photo', 255)->nullable(false);
            $table->tinyInteger('visible')->unsigned()->default(1);

            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table-> foreign("user_id")-> references ("id")-> on("users")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
};
