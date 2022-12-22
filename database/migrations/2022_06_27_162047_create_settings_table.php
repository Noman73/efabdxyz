<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->decimal('matching_comm',20,2)->default('0');
            $table->decimal('direct_comm',20,2)->default('0');
            $table->decimal('sales_amb_comm',20,2)->default('0');
            $table->decimal('marketing_dir_comm',20,2)->default('0');
            $table->decimal('diamond_mmb_comm',20,2)->default('0');
            $table->decimal('crown_mmb_comm',20,2)->default('0');
            $table->decimal('share_holder_comm',20,2)->default('0');
            $table->unsignedBigInteger('author_id');
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
