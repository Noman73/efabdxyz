<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneAndMethodColumnToWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->tinyInteger('method')->after('ammount');
            $table->string('phone')->after('method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->dropColumn('method');
            $table->dropColumn('phone');
        });
    }
}
