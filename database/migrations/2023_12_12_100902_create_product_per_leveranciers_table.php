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
        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Leverancier_id')->constrained();
            $table->foreignId('Product_id')->constrained();
            $table->string('DatumLevering');
            $table->integer('Aantal');
            $table->string('DatumEerstVolgendeLevering')->nullable();
            $table->timestamps();
        });

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 1,
            'Product_id' => 1,
            'DatumLevering' => '2023-04-09',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-16',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 1,
            'Product_id' => 1,
            'DatumLevering' => '2023-04-18',
            'Aantal' => 21,
            'DatumEerstVolgendeLevering' => '2023-04-25',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 1,
            'Product_id' => 2,
            'DatumLevering' => '2023-04-09',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-16',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 1,
            'Product_id' => 3,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 11,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 2,
            'Product_id' => 4,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 16,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 2,
            'Product_id' => 4,
            'DatumLevering' => '2023-04-21',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-28',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 2,
            'Product_id' => 5,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 2,
            'Product_id' => 6,
            'DatumLevering' => '2023-04-14',
            'Aantal' => 30,
            'DatumEerstVolgendeLevering' => '2023-04-21',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 3,
            'Product_id' => 7,
            'DatumLevering' => '2023-04-12',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-19',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 3,
            'Product_id' => 7,
            'DatumLevering' => '2023-04-19',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2023-04-26',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 3,
            'Product_id' => 8,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 3,
            'Product_id' => 9,
            'DatumLevering' => '2023-04-11',
            'Aantal' => 1,
            'DatumEerstVolgendeLevering' => '2023-04-18',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 4,
            'Product_id' => 10,
            'DatumLevering' => '2023-04-16',
            'Aantal' => 24,
            'DatumEerstVolgendeLevering' => '2023-04-30',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 5,
            'Product_id' => 11,
            'DatumLevering' => '2023-04-10',
            'Aantal' => 47,
            'DatumEerstVolgendeLevering' => '2023-04-17',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 5,
            'Product_id' => 11,
            'DatumLevering' => '2023-04-19',
            'Aantal' => 60,
            'DatumEerstVolgendeLevering' => '2023-04-26',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 5,
            'Product_id' => 12,
            'DatumLevering' => '2023-04-11',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => '',
        ]);

        DB::table('product_per_leveranciers')->insert([
            'Leverancier_id' => 5,
            'Product_id' => 13,
            'DatumLevering' => '2023-04-12',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_leveranciers');
    }
};
