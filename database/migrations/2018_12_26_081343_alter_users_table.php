<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('address')->after('last_name')->nullable();
            $table->string('city')->after('email_verified_at')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->string('pincode')->after('state')->nullable();
            $table->boolean('status')->after('pincode')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name','last_name','address','pincode','state_id','status']);
        });
    }
}
