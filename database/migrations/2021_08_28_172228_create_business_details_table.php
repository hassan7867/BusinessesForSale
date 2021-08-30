<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->id();
            $table->string('listing_id');
            $table->string('user_id');
            $table->string('location_details')->nullable();
            $table->string('premises')->nullable();
            $table->string('competition')->nullable();
            $table->string('expansion')->nullable();
            $table->string('living_accomodation')->nullable();
            $table->string('living_accomodation_description')->nullable();
            $table->string('size_in_square_feet')->nullable();
            $table->string('planning_consent')->nullable();
            $table->string('years_established')->nullable();
            $table->string('employees')->nullable();
            $table->string('tradding_hours')->nullable();
            $table->string('support_and_training')->nullable();
            $table->string('visa_ready')->nullable();
            $table->string('relocatable')->nullable();
            $table->string('home_based')->nullable();
            $table->string('franchise')->nullable();
            $table->string('franchise_terms')->nullable();
            $table->string('business_closed')->nullable();
            $table->string('distressed')->nullable();
            $table->string('owner_financing')->nullable();
            $table->string('financing_available')->nullable();
            $table->string('reason_for_selling')->nullable();
            $table->string('furniture_fixture')->nullable();
            $table->string('value_of_furniture_fixtures')->nullable();
            $table->string('inventory_stock')->nullable();
            $table->string('value_of_inventory_stock')->nullable();
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
        Schema::dropIfExists('business_details');
    }
}
