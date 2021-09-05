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
            $table->longText('summary');
            $table->string('status_of_business');
            $table->string('show_as_confidential_sale');
            $table->string('relocatable');
            $table->string('dont_list_location');
            $table->string('region_id')->nullable();
            $table->string('city_id');
            $table->longText('location_details');
            $table->string('asking_price');
            $table->string('asking_price_as');
            $table->string('property_status');
            $table->string('turn_over');
            $table->string('turn_over_term');
            $table->string('net_profit');
            $table->string('net_profit_term');
            $table->longText('website_address')->nullable();
            $table->longText('support_and_training')->nullable();
            $table->string('accomodation_included');
            $table->string('home_based');
            $table->string('administrative');
            $table->longText('trading_hours')->nullable();
            $table->longText('number_of_employees')->nullable();
            $table->longText('embeded_video')->nullable();
            $table->string('status')->default('pending');
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
