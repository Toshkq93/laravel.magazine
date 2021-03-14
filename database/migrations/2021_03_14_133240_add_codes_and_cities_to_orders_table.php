<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodesAndCitiesToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('city_id');
            $table->string('coupon_code')->nullable();
            $table->string('gift_voucher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('country_id');
            $table->dropColumn('region_id');
            $table->dropColumn('city_id');
            $table->dropColumn('coupon_code');
            $table->dropColumn('gift_voucher');
        });
    }
}
