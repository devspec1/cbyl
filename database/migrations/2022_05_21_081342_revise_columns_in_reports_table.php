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
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('age');
            $table->dropColumn('dependants');
            $table->dropColumn('maretal_status');
            $table->dropColumn('areas_of_property');
            $table->dropColumn('other1');
            $table->dropColumn('other2');
            $table->boolean('terms_of_lease_broken')->after('damage_to_property');
            $table->boolean('anti_social_behaviour')->after('terms_of_lease_broken');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('terms_of_lease_broken');
            $table->dropColumn('anti_social_behaviour');
            $table->text('description')->nullable();
            $table->integer('age')->nullable();
            $table->integer('dependants')->nullable();
            $table->integer('maretal_status')->nullable();
            $table->string('areas_of_property')->nullable();
            $table->text('other1')->nullable();
            $table->text('other2')->nullable();
        });
    }
};
