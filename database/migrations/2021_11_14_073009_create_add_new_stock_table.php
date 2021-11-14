<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddNewStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_new_stock', function (Blueprint $table) {
            $table->id();
            $table->integer('stock_id');
            $table->text('blood_group');
            $table->date('collection_date');
            $table->date('expire_date');
            $table->text('availability');
            $table->integer('in_stock');
            $table->text('donor_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_new_stock');
    }
}
