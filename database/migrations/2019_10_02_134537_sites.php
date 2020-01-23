<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sites", function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('okab_license')->nullable();
            $table->date('date_started')->nullable();
            $table->date('date_finished')->nullable();
            $table->string('developer')->nullable();
            $table->string('designer')->nullable();
            $table->string('po')->nullable();
            $table->string('sc')->nullable();
            $table->string('ticket')->nullable();
            $table->string('state')->nullable();
            $table->string('staging_link')->nullable();
            $table->string('live_link')->nullable();
            $table->string('repo_link')->nullable();
            $table->string('email')->nullable();
            $table->string('company_house')->nullable();
            $table->string('mailchimp_list')->nullable();
            $table->integer('feedback_id')->nullable();
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
        Schema::drop('sites');
    }
}
