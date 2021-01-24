<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('first_name');
                $table->string('last_name')->nullable();
                $table->string('postal_code');
                $table->string('phone_number')->nullable();
                $table->string('date_of_birth')->nullable();
                $table->string('description')->nullable();
                $table->string('name_of_business')->nullable();
                $table->string('account_type')->nullable();
                $table->string('website_url')->nullable();
            });
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
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('first_name');
                $table->dropColumn('last_name');
                $table->dropColumn('postal_code');
                $table->dropColumn('phone_number');
                $table->dropColumn('date_of_birth');
                $table->dropColumn('description');
                $table->dropColumn('name_of_business');
                $table->dropColumn('account_type');
                $table->dropColumn('website_url');
            });
        });
    }
}
