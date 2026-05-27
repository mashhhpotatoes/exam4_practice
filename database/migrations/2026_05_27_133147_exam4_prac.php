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
    {
          Schema::create('exam4_prac', function (Blueprint $table) {
            $table->id();
            $table->string('fname',255);
            $table->string('lname',255);
            $table->string('midname',255);
            $table->string('add',255);
            $table->date('dob');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
