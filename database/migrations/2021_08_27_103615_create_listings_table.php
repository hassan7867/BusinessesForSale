<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('heading');
            $table->string('summary');
            $table->string('status_of_business');
            $table->string('region_id');
            $table->string('city_id');
            $table->string('property_status');
            $table->string('asking_price');
            $table->string('quick_sale');
            $table->string('sales_revenue');
            $table->string('sales_revenue_term');
            $table->string('cash_flow');
            $table->string('status')->default('pending');
            $table->string('website_address')->nullable();
            $table->string('embeded_video')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
