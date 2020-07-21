<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAddressCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_customer', function (Blueprint $table) {
            // Create table address_customer
            $table->integer('id_customer')->unsigned()->index();
            $table->integer('id_address')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_customer', 'id_address']);

            // Set FK address_customer --- Customers
            $table->foreign('id_customer')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Set FK address_customer --- Address
            $table->foreign('id_address')
                ->references('id')
                ->on('address_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_customer');
    }
}
