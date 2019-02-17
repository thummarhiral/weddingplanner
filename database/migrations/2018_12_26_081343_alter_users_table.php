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
         $table->string('Address')->after('last_name')->nullable();
         $table->string('pincode')->after('email_verified_at')->nullable();
         $table->integer('state_id')->after('pincode')->default('0');
            $table->boolean('status')->after('state_id')->default('0');
            $table->integer('security_question_id')->after('status')->nullable();
            $table->integer('answer_id')->after('security_question_id')->nullable();
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
            $table->dropColumn(['first_name','last_name','pincode','state_id','status','security_question_id','answer_id']);
        });
    }
}
