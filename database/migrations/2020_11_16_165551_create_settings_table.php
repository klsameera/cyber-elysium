<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     * gradeA 1 -> 4.3
     * gradeA 2 -> 4.0
     *
     *status 0 -> setting not set
     *status 1 -> setting set
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->nullable()->constrained('accounts')->onDelete('cascade');
            $table->integer('gradeA')->nullable();
            $table->integer('status')->default(0);
            $table->boolean('is_1_year')->default(0);
            $table->boolean('is_2_year')->default(0);
            $table->boolean('is_3_year')->default(0);
            $table->boolean('is_4_year')->default(0);
            $table->integer('year_1')->default(0);
            $table->integer('year_2')->default(0);
            $table->integer('year_3')->default(0);
            $table->integer('year_4')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
