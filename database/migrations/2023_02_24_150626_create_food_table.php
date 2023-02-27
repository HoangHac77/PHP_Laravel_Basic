<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //one category has many foods
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); //category's id
            $table->string('name'); // category's_name
            $table->longText('descriptions');
            $table->timestamps();
        });

        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('descriptions');
            $table->timestamps();
            //foreign keys
            $table->unsignedInteger('category_id'); // so nguyen duong
            $table->foreign('category_id')
                ->references('id')
                ->on('categories') // on() - point table name
                ->onDelete('cascade'); // khi xoa thuc the con -> cac id (khoa ngoai) se xoa theo
            // ->onDelete('set null'); // khi xoa -> cac tham chieu sang se khong bi xoa
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
