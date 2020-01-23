<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Checklists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("checklists", function(Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->boolean('func_links_buttons')->default(0);
            $table->boolean('func_permalink')->default(0);
            $table->boolean('func_search_replace')->default(0);
            $table->boolean('func_https')->default(0);
            $table->boolean('func_meta')->default(0);
            $table->boolean('func_flamingo')->default(0);

            $table->boolean('speed_optimised')->default(0);
            $table->boolean('speed_minified')->default(0);

            $table->boolean('aesthetic_favicon')->default(0);
            $table->boolean('aesthetic_breakpoints')->default(0);

            $table->boolean('cont_tandc')->default(0);
            $table->boolean('cont_privacy')->default(0);
            $table->boolean('cont_cookies')->default(0);

            $table->boolean('forms_mailchimp')->default(0);
            $table->boolean('forms_submit')->default(0);
            $table->boolean('forms_email')->default(0);
            $table->boolean('forms_smtp')->default(0);
            $table->boolean('forms_domain')->default(0);
            $table->boolean('forms_template')->default(0);
            $table->boolean('forms_welcome_email')->default(0);
            $table->boolean('forms_recaptha')->default(0);

            $table->boolean('analytics_google')->default(0);
            $table->boolean('analytics_facebook')->default(0);
            $table->boolean('analytics_hotjar')->default(0);

            $table->string('notes')->nullable();;
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
        //
    }
}
