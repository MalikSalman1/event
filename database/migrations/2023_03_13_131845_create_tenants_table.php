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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            // create table having tenant name,father name,cnic, address,phone number and email and use appropriate data types for each column
            $table->string('tenant_name', 50);
            $table->string('father_name', 50);
            $table->string('cnic', 15);
            $table->string('address', 100);
            $table->string('phone_number', 15);
            $table->string('email', 50);
            $table->string('password', 50);
            // add user_id column and make it foreign key of id column of users table
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('tenant');
    }
};
