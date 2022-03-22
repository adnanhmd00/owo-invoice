<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_bills', function (Blueprint $table) {
            $table->id();
            $table->string('added_by');
            $table->string('updated_by')->nullable();
            $table->string('email_id')->nullable();
            $table->string('month');
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
            // $table->string('size');
            $table->string('attribute');
            $table->string('price');
            $table->string('item_cost');
            // $table->string('pack_of');
            // $table->string('pack_name');
            $table->string('quantity');
            $table->string('hsn')->nullable();
            $table->string('gst')->nullable();
            $table->string('gst_value')->nullable();
            $table->string('taxable_amount')->nullable();
            $table->string('admin_fssai');
            $table->string('admin_gst');
            $table->string('admin_address');
            $table->string('admin_city');
            $table->string('admin_state_code');
            $table->string('admin_state');
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
        Schema::dropIfExists('sale_bills');
    }
}
