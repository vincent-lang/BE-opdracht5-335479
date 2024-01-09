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
            $table->increments('id');
            $table->string('naam');
            $table->string('contactPersoon');
            $table->string('leverancierNummer');
            $table->string('mobiel');
            $table->timestamps();
        });

        DB::table('leveranciers')->insert([
            'naam' => 'Venco',
            'contactPersoon' => 'Bert van Linge',
            'leverancierNummer' => 'L1029384719',
            'mobiel' => '06-28493827',
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Astra Sweets',
            'contactPersoon' => 'Jasper Del Monte',
            'leverancierNummer' => 'L1029284315',
            'mobiel' => '06-39398734',
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Haribo',
            'contactPersoon' => 'Sven Stalman',
            'leverancierNummer' => 'L1029324748',
            'mobiel' => '06-24383291',
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Basset',
            'contactPersoon' => 'Joyce Stelterberg',
            'leverancierNummer' => 'L1023845773',
            'mobiel' => '06-48293823',
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'De Bron',
            'contactPersoon' => 'Remco Veenstra',
            'leverancierNummer' => 'L1023857736',
            'mobiel' => '06-34291234',
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
