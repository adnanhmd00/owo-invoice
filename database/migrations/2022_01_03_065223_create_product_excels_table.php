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
            $table->string('date');
            $table->string('invoice')->nullable();
            $table->string('customer_name_billing');
            $table->string('gst_no')->nullable();
            $table->string('customer_address_billing');
            // $table->string('city_billing');
            $table->string('state_billing');
            $table->string('state_code_billing');
            $table->string('customer_name_shipping');
            $table->string('customer_address_shipping');
            // $table->string('city_shipping');
            $table->string('state_shipping');
            $table->string('state_code_shipping');
            $table->string('mobile_no');
            $table->string('product_name');
            $table->string('size');
            $table->string('attribute');
            $table->string('price');
            $table->string('item_cost');
            $table->string('pack_of');
            $table->string('pack_name');
            $table->string('quantity');
            $table->string('hsn')->nullable();
            $table->string('gst')->nullable();

            // $table->string('invoice')->nullable();
            // $table->string('order_status')->nullable();
            // $table->string('order_date');
            // $table->string('customer_note')->nullable();
            // $table->string('first_name_billing');
            // $table->string('last_name_billing')->nullable();
            // $table->string('company_billing')->nullable();
            // $table->string('address_1_2_billing')->nullable();
            // $table->string('city_billing')->nullable();
            // $table->string('state_code_billing')->nullable();
            // $table->string('postcode_billing')->nullable();
            // $table->string('country_code_billing')->nullable();
            // $table->string('email_billing')->nullable();
            // $table->string('phone_billing')->nullable();
            // $table->string('first_name_shipping')->nullable();
            // $table->string('last_name_shipping')->nullable();
            // $table->string('address_1_2_shipping')->nullable();
            // $table->string('city_shipping')->nullable();
            // $table->string('state_code_shipping')->nullable();
            // $table->string('postcode_shipping')->nullable();
            // $table->string('country_code_shipping')->nullable();
            // $table->string('payment_method_title')->nullable();
            // $table->string('cart_discount_amount')->nullable();
            // $table->string('order_subtotal_amount');
            // $table->string('shipping_method_title')->nullable();
            // $table->string('order_shipping_amount')->nullable();
            // $table->string('order_refund_amount')->nullable();
            // $table->string('order_total_amount');
            // $table->string('order_total_tax_amount')->nullable();
            // $table->string('sku')->nullable();
            // $table->string('item')->nullable();
            // $table->string('item_name')->nullable();
            // $table->string('quantity')->nullable();
            // $table->string('item_cost')->nullable();
            // $table->string('coupon_code')->nullable();
            // $table->string('discount_amount')->nullable();
            // $table->string('discount_amount_tax')->nullable();
            // $table->string('hsn')->nullable();
            // $table->string('gst')->nullable();
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
