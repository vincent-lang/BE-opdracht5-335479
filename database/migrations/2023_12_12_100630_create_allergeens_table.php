<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('allergeens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('omschrijving');
            $table->timestamps();
        });

        DB::table('allergeens')->insert([
            'naam' => 'Gluten',
            'Omschrijving' => 'Dit product bevat gluten',
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Gelatine',
            'Omschrijving' => 'Dit product bevat gelatine',
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'AZO-Kleurstof',
            'Omschrijving' => 'Dit product bevat AZO-kleurstoffen',
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Lactose',
            'Omschrijving' => 'Dit product bevat lactose',
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Soja',
            'Omschrijving' => 'Dit product bevat soja',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergeens');
    }
};
