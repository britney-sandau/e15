<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Adds a created_at and updated_at entry in the database. Marking this so I remember.
            $table->string('slug');
            $table->string('username');
            $table->enum('category', ['furniture', 'toys', 'clothing', 'exercise equipment', 'miscellaneous']);
            $table->text('description');
            $table->string('city');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
