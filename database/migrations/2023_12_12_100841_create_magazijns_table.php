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
            $table->increments('id');
            $table->integer('product_id')->references('id')->on('products');
            $table->string('verpakkingsEenheid');
            $table->string('aantalAanwezig')->nullable();
            $table->timestamps();
        });

        DB::table('magazijns')->insert([
            'product_id' => 1,
            'verpakkingsEenheid' => '5',
            'aantalAanwezig' => '453',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 2,
            'verpakkingsEenheid' => '2,5',
            'aantalAanwezig' => '400',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 3,
            'verpakkingsEenheid' => '5',
            'aantalAanwezig' => '1',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 4,
            'verpakkingsEenheid' => '1',
            'aantalAanwezig' => '800',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 5,
            'verpakkingsEenheid' => '3',
            'aantalAanwezig' => '234',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 6,
            'verpakkingsEenheid' => '2',
            'aantalAanwezig' => '345',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 7,
            'verpakkingsEenheid' => '1',
            'aantalAanwezig' => '795',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 8,
            'verpakkingsEenheid' => '10',
            'aantalAanwezig' => '233',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 9,
            'verpakkingsEenheid' => '2,5',
            'aantalAanwezig' => '123',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 10,
            'verpakkingsEenheid' => '3',
            'aantalAanwezig' => '',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 11,
            'verpakkingsEenheid' => '2',
            'aantalAanwezig' => '367',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 12,
            'verpakkingsEenheid' => '1',
            'aantalAanwezig' => '467',
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 13,
            'verpakkingsEenheid' => '5',
            'aantalAanwezig' => '20',
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
