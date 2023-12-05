<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTxTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tx_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('insurance_price');
            $table->integer('freight_amount');
            $table->integer('grand_total');
            $table->string('transactions_status');
            $table->string('cn_no');
            $table->softDeletes();
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
        Schema::dropIfExists('tx_transactions');
    }
}
