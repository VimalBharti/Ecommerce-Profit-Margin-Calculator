<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('sellingprice')->default(0);
            $table->integer('productcost')->default(0);
            $table->integer('orders')->default(0);
            $table->integer('roas')->default(0);
            $table->integer('delivery')->default(0);
            $table->integer('salevalue')->default(0);
            $table->integer('cpp')->default(0);
            $table->integer('delivered')->default(0);
            $table->integer('profitperdelivered')->default(0);
            $table->integer('totalprofit')->default(0);
            $table->integer('remittance')->default(0);
            $table->integer('adcost')->default(0);
            $table->integer('product')->default(0);
            $table->integer('gst')->default(0);
            $table->integer('packaging')->default(0);
            $table->integer('shipping')->default(0);
            $table->integer('totalexpense')->default(0);
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
        Schema::dropIfExists('reports');
    }
}
