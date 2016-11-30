<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->renameColumn('name', 'firstName');
            $table->string('lastName')->after('name');
            $table->string('businessName')->after('lastName');
            $table->text('address')->after('businessName');
            $table->string('phoneNumber')->after('address');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->renameColumn('firstName', 'name');
            $table->dropColumn(['address','lastName','phoneNumber', 'businessName']);
        });
    }
}
