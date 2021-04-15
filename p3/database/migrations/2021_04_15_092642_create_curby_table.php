<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curby', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username', 30);
            $table->enum('category', ['furniture', 'toys', 'clothing', 'exercise equipment', 'miscellaneous']);
            $table->text('description');
            $table->binary('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curby');
    }
}
