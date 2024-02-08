<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {

        $table->decimal('init_price')->change();
        $table->decimal('discount_rate')->change();
        $table->decimal('price')->change();
          });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
