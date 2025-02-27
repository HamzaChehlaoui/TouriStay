<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User ID
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Property ID
            $table->timestamps();
            $table->unique(['user_id', 'property_id']); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
