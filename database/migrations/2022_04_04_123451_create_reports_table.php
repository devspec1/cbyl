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
            $table->text('description')->nullable();
            $table->integer('age')->nullable();
            $table->integer('dependants')->nullable();
            $table->integer('maretal_status')->nullable();
            $table->string('areas_of_property')->nullable();
            $table->boolean('none_payment_of_rent')->nullable();
            $table->boolean('noice')->nullable();
            $table->boolean('drugs')->nullable();
            $table->boolean('damage_to_property')->nullable();
            $table->text('other1')->nullable();
            $table->boolean('no_boiler_for_a_period_of_time')->nullable();
            $table->boolean('damp')->nullable();
            $table->boolean('behavior_recorded_as_good')->nullable();
            $table->boolean('bathroom_of_plumbing_issues')->nullable();
            $table->boolean('kitchin_issues')->nullable();
            $table->text('other2')->nullable();
            
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
