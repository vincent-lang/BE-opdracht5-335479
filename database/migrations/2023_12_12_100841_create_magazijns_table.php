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
        Schema::create('magazijns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Product_id')->constrained();
            $table->string('VerpakkingsEenheid');
            $table->string('AantalAanwezig')->nullable();
            $table->timestamps();
        });

        DB::table('magazijns')->insert([
            'Product_id' => 1,
            'VerpakkingsEenheid' => '5',
            'AantalAanwezig' => '453',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 2,
            'VerpakkingsEenheid' => '2,5',
            'AantalAanwezig' => '400',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 3,
            'VerpakkingsEenheid' => '5',
            'AantalAanwezig' => '1',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 4,
            'VerpakkingsEenheid' => '1',
            'AantalAanwezig' => '800',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 5,
            'VerpakkingsEenheid' => '3',
            'AantalAanwezig' => '234',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 6,
            'VerpakkingsEenheid' => '2',
            'AantalAanwezig' => '345',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 7,
            'VerpakkingsEenheid' => '1',
            'AantalAanwezig' => '795',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 8,
            'VerpakkingsEenheid' => '10',
            'AantalAanwezig' => '233',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 9,
            'VerpakkingsEenheid' => '2,5',
            'AantalAanwezig' => '123',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 10,
            'VerpakkingsEenheid' => '3',
            'AantalAanwezig' => '',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 11,
            'VerpakkingsEenheid' => '2',
            'AantalAanwezig' => '367',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 12,
            'VerpakkingsEenheid' => '1',
            'AantalAanwezig' => '467',
        ]);

        DB::table('magazijns')->insert([
            'Product_id' => 13,
            'VerpakkingsEenheid' => '5',
            'AantalAanwezig' => '20',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magazijns');
    }
};
