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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('Barcode');
            $table->timestamps();
        });

        DB::table('products')->insert([
            'Naam' => 'Mintnopjes',
            'Barcode' => '8719587231278',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Schoolkrijt',
            'Barcode' => '8719587326713',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Honingdrop',
            'Barcode' => '8719587327836',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Zure Beren',
            'Barcode' => '8719587321441',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Cola Flesjes',
            'Barcode' => '8719587321237',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Turtles',
            'Barcode' => '8719587322245',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Witte Muizen',
            'Barcode' => '8719587328256',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Reuzen Slangen',
            'Barcode' => '8719587325641',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Zoute Rijen',
            'Barcode' => '8719587322739',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Winegums',
            'Barcode' => '8719587327527',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Drop Munten',
            'Barcode' => '8719587322345',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Kruis Drop',
            'Barcode' => '8719587322265',
        ]);

        DB::table('products')->insert([
            'Naam' => 'Zoute Ruitjes',
            'Barcode' => '8719587323256',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
