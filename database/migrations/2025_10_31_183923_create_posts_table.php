<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    /**
     * 1-create the tables 
     * 2- run the table -> php artisan migrate
     */
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->char('titles', length: 255); //varchar col
            $table->longText('description'); //long text col for description of the post
            $table->char('created_by', 100);
            $table->timestamps();
            //to add a new col after migration u need to php artisan make:migrate add_category_to_posts_table -> will create a migratino file and add the col in the db
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
