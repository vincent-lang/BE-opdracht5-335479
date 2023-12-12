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
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('ContactPersoon');
            $table->string('LeverancierNummer');
            $table->string('Mobiel');
            $table->timestamps();
        });

        DB::table('leveranciers')->insert([
            'Naam' => 'Venco',
            'ContactPersoon' => 'Bert van Linge',
            'LeverancierNummer' => 'L1029384719',
            'Mobiel' => '06-28493827',
        ]);

        DB::table('leveranciers')->insert([
            'Naam' => 'Astra Sweets',
            'ContactPersoon' => 'Jasper Del Monte',
            'LeverancierNummer' => 'L1029284315',
            'Mobiel' => '06-39398734',
        ]);

        DB::table('leveranciers')->insert([
            'Naam' => 'Haribo',
            'ContactPersoon' => 'Sven Stalman',
            'LeverancierNummer' => 'L1029324748',
            'Mobiel' => '06-24383291',
        ]);

        DB::table('leveranciers')->insert([
            'Naam' => 'Basset',
            'ContactPersoon' => 'Joyce Stelterberg',
            'LeverancierNummer' => 'L1023845773',
            'Mobiel' => '06-48293823',
        ]);

        DB::table('leveranciers')->insert([
            'Naam' => 'De Bron',
            'ContactPersoon' => 'Remco Veenstra',
            'LeverancierNummer' => 'L1023857736',
            'Mobiel' => '06-34291234',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leveranciers');
    }
};
