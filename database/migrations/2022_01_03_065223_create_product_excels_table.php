<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductExcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_excels', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->string('invoice');
            $table->string('order_status');
            $table->string('order_date');
            $table->string('customer_note')->nullable();
            $table->string('first_name_billing');
            $table->string('last_name_billing');
            $table->string('company_billing');
            $table->string('address_1_2_billing');
            $table->string('city_billing');
            $table->string('state_code_billing');
            $table->string('postcode_billing');
            $table->string('country_code_billing');
            $table->string('email_billing');
            $table->string('phone_billing');
            $table->string('first_name_shipping');
            $table->string('last_name_shipping');
            $table->string('address_1_2_shipping');
            $table->string('city_shipping');
            $table->string('state_code_shipping');
            $table->string('postcode_shipping');
            $table->string('country_code_shipping');
            $table->string('payment_method_title');
            $table->string('cart_discount_amount');
            $table->string('order_subtotal_amount');
            $table->string('shipping_method_title');
            $table->string('order_shipping_amount');
            $table->string('order_refund_amount');
            $table->string('order_total_amount');
            $table->string('order_total_tax_amount');
            $table->string('sku');
            $table->string('item');
            $table->string('item_name');
            $table->string('quantity');
            $table->string('item_cost');
            $table->string('coupon_code')->nullable();
            $table->string('discount_amount');
            $table->string('discount_amount_tax');
            $table->string('hsn')->nullable();
            $table->string('gst')->nullable();
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
        Schema::dropIfExists('product_excels');
    }
}
