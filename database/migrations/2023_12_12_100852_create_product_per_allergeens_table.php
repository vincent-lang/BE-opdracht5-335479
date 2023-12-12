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
        Schema::create('product_per_allergeens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Product_id')->constrained();
            $table->foreignId('Allergeen_id')->constrained();
            $table->timestamps();
        });

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 1,
            'Allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 1,
            'Allergeen_id' => 1,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 1,
            'Allergeen_id' => 3,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 3,
            'Allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 6,
            'Allergeen_id' => 5,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 9,
            'Allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 9,
            'Allergeen_id' => 5,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 10,
            'Allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 12,
            'Allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 13,
            'Allergeen_id' => 1,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 13,
            'Allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'Product_id' => 13,
            'Allergeen_id' => 5,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_allergeens');
    }
};
