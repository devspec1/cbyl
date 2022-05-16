<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->boolean('none_payment_of_rent')->nullable();
            $table->boolean('noice')->nullable();
            $table->boolean('damage_to_property')->nullable();
            $table->boolean('terms_of_lease_broken')->nullable();
            $table->boolean('anti_social_behaviour')->nullable();
            $table->boolean('no_boiler_for_a_period_of_time')->nullable();
            $table->boolean('damp')->nullable();
            $table->boolean('bathroom_of_plumbing_issues')->nullable();
            $table->boolean('kitchin_issues')->nullable();
            $table->boolean('behavior_recorded_as_good')->nullable();
            
            $table->foreignId('added_by_user_id');
            $table->foreignId('tenant_id');

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
};
