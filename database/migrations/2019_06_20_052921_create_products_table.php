<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('varian')->nullable();
            $table->integer('price')->nullable()->default(0);
            $table->integer('stock')->nullable()->default(0);
            $table->bigInteger("categorie_id")->unsigned();
            $table->foreign("categorie_id")->references('id')->on('categories')->onDelete('cascade');
            $table->enum('level',['parent','child'])->default('parent');
            $table->integer("parent_id")->nullable()->default(0);
            $table->text("description")->nullable();
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
        Schema::dropIfExists('products');
    }
}
