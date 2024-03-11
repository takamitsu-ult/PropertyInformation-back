<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('ad_address', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('ken_id')->nullable();
                $table->integer('city_id')->nullable();
                $table->integer('town_id')->nullable();
                $table->string('zip', 8)->nullable();
                $table->tinyInteger('office_flg')->nullable();
                $table->tinyInteger('delete_flg')->nullable();
                $table->string('ken_name', 8)->nullable();
                $table->string('ken_furi', 8)->nullable();
                $table->string('city_name', 24)->nullable();
                $table->string('city_furi', 24)->nullable();
                $table->string('town_name', 32)->nullable();
                $table->string('town_furi', 32)->nullable();
                $table->string('town_memo', 16)->nullable();
                $table->string('kyoto_street', 32)->nullable();
                $table->string('block_name', 64)->nullable();
                $table->string('block_furi', 64)->nullable();
                $table->string('memo', 255)->nullable();
                $table->string('office_name', 255)->nullable();
                $table->string('office_furi', 255)->nullable();
                $table->string('office_address', 255)->nullable();
                $table->integer('new_id')->nullable();
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
        Schema::dropIfExists('ad_address');
    }
};
