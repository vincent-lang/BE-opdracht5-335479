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
            $table->id();
            $table->string('Naam');
            $table->string('Omschrijving');
            $table->timestamps();
        });

        DB::table('allergeens')->insert([
            'Naam' => 'Gluten',
            'Omschrijving' => 'Dit product bevat gluten',
        ]);

        DB::table('allergeens')->insert([
            'Naam' => 'Gelatine',
            'Omschrijving' => 'Dit product bevat gelatine',
        ]);

        DB::table('allergeens')->insert([
            'Naam' => 'AZO-Kleurstof',
            'Omschrijving' => 'Dit product bevat AZO-kleurstoffen',
        ]);

        DB::table('allergeens')->insert([
            'Naam' => 'Lactose',
            'Omschrijving' => 'Dit product bevat lactose',
        ]);

        DB::table('allergeens')->insert([
            'Naam' => 'Soja',
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
