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
        Schema::table('places',function(Blueprint $table){
            $table->dropColumn('local');

            $table->float('latitude');
            $table->float('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            // Reverse the changes in the down method if necessary
            $table->string('local');
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
};
