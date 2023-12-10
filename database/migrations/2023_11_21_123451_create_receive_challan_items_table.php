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
        Schema::create('receive_challan_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreignId('receive_challan_id')->references('id')->on('receive_challans')->onDelete('cascade');
<<<<<<< HEAD
=======
            $table->foreignId('purchase_item_id')->references('id')->on('purchase_items')->onDelete('cascade');
>>>>>>> 9066209 (Hello)
            $table->unsignedInteger('item_id');
            $table->text('details')->nullable();
            $table->integer('main_unit_qty')->nullable();
            $table->integer('sub_unit_qty')->nullable();
            $table->integer('qty');
            $table->unsignedBigInteger('item_variation_id')->nullable();
            $table->integer('total_packages')->nullable();
            $table->text('packaging_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receive_challan_items');
    }
};
