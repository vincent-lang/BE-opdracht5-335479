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
            $table->increments('id');
            $table->string('naam');
            $table->string('barcode');
            $table->timestamps();
        });

        DB::table('products')->insert([
            'naam' => 'Mintnopjes',
            'barcode' => '8719587231278',
        ]);

        DB::table('products')->insert([
            'naam' => 'Schoolkrijt',
            'barcode' => '8719587326713',
        ]);

        DB::table('products')->insert([
            'naam' => 'Honingdrop',
            'barcode' => '8719587327836',
        ]);

        DB::table('products')->insert([
            'naam' => 'Zure Beren',
            'barcode' => '8719587321441',
        ]);

        DB::table('products')->insert([
            'naam' => 'Cola Flesjes',
            'barcode' => '8719587321237',
        ]);

        DB::table('products')->insert([
            'naam' => 'Turtles',
            'barcode' => '8719587322245',
        ]);

        DB::table('products')->insert([
            'naam' => 'Witte Muizen',
            'barcode' => '8719587328256',
        ]);

        DB::table('products')->insert([
            'naam' => 'Reuzen Slangen',
            'barcode' => '8719587325641',
        ]);

        DB::table('products')->insert([
            'naam' => 'Zoute Rijen',
            'barcode' => '8719587322739',
        ]);

        DB::table('products')->insert([
            'naam' => 'Winegums',
            'barcode' => '8719587327527',
        ]);

        DB::table('products')->insert([
            'naam' => 'Drop Munten',
            'barcode' => '8719587322345',
        ]);

        DB::table('products')->insert([
            'naam' => 'Kruis Drop',
            'barcode' => '8719587322265',
        ]);

        DB::table('products')->insert([
            'naam' => 'Zoute Ruitjes',
            'barcode' => '8719587323256',
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
