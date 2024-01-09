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
            $table->increments('id');
            $table->integer('product_id')->constrained()->references('id')->on('products');
            $table->integer('allergeen_id')->constrained()->references('id')->on('allergeens');
            $table->timestamps();
        });

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 1,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 3,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 3,
            'allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 6,
            'allergeen_id' => 5,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 5,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 10,
            'allergeen_id' => 2,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 12,
            'allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 1,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 4,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 5,
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
