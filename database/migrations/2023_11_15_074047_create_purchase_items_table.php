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
        Schema::create('purchase_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreignId('purchase_id')->references('id')->on('purchases')->onDelete('cascade');
            $table->unsignedInteger('item_id');
            $table->text('details')->nullable();
            $table->unsignedBigInteger('item_variation_id')->nullable();
            $table->integer('main_unit_qty')->nullable();
            $table->integer('sub_unit_qty')->nullable();
            $table->integer('qty');
<<<<<<< HEAD
=======
            $table->integer('due_main_unit_qty')->nullable();
            $table->integer('due_sub_unit_qty')->nullable();
            $table->integer('delivery_qty')->default(0);
            $table->integer('due_qty')->nullable();
>>>>>>> 9066209 (Hello)
            $table->decimal('rate',10,2);
            $table->decimal('sub_total',12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};
