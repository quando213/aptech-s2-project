<?php

use App\Enums\IngredientUnit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->text('thumbnail');
            $table->integer('category_id');
            $table->integer('status');
            $table->integer('sort_number');
            $table->string('description');
            $table->integer('unit')->default(IngredientUnit::UP_COMING);
            $table->string('quantity');
            $table->string('origin');
            $table->string('trademark');
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
        Schema::dropIfExists('ingredients');
    }
}
