<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'name' => 'Cheqs',
            'okab_license' => 'N/A - old site',
            'date_started' => '2018-05-14',
            'date_finished' => '2018-05-15',
            'developer' => 'Ste Parratt',
            'designer' => 'Lisa Badrock',
            'po' => 'Ivor Perry',
            'sc' => 'Paul Millward',
            'ticket' => '#',
            'state' => 'Live',
            'staging_link' => 'https://www.cheqs.co.uk/',
            'live_link' => 'https://www.cheqs.co.uk/',
            'repo_link' => '',
            'email' => 'contact@cheqs.co.uk',
            'company_house' => '#',
            'mailchimp_list' => 'Cheqs',
        ]);

        DB::table('sites')->insert([
            'name' => 'Connected Creatives',
            'okab_license' => 'Yes',
            'date_started' => '2019-09-20',
            'date_finished' => '2019-09-25',
            'developer' => 'Daniel Currie',
            'designer' => 'Ollie McAinsh',
            'po' => 'Ivor Perry',
            'sc' => '',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => 'https://wps.connectedcreatives.co.uk/',
            'live_link' => 'https://connectedcreatives.co.uk/',
            'repo_link' => '',
            'email' => 'info@connectedcreatives.co.uk',
            'company_house' => '',
            'mailchimp_list' => '',
        ]);

        DB::table('sites')->insert([
            'name' => 'Mordex',
            'okab_license' => 'Yes',
            'date_started' => '2019-01-01',
            'date_finished' => '2019-01-01',
            'developer' => 'Ste Parratt',
            'designer' => 'Lisa Badrock',
            'po' => 'Hannah Tilstone',
            'sc' => 'Charlotte Corke',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => '',
            'live_link' => 'http://mordex.gg',
            'repo_link' => '',
            'email' => 'noreply@mordex.gg',
            'company_house' => '',
            'mailchimp_list' => 'Mordex',
        ]);

        DB::table('sites')->insert([
            'name' => 'Qbunk',
            'okab_license' => 'Yes',
            'date_started' => '2019-01-01',
            'date_finished' => '2019-01-01',
            'developer' => 'Ste Parratt',
            'designer' => 'Lisa Badrock',
            'po' => 'Chris Elston',
            'sc' => 'Rebecca Stockdale',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => 'http://qbunk.studiobryte.co.uk/',
            'live_link' => 'https://qbunk.co.uk/',
            'repo_link' => '',
            'email' => 'noreply@qbunk.co.uk',
            'company_house' => '',
            'mailchimp_list' => 'Qbunk for Personal / Qbunk for Business',
        ]);  

        DB::table('sites')->insert([
            'name' => 'Flexi',
            'okab_license' => 'No - old site',
            'date_started' => '2019-01-01',
            'date_finished' => '2019-01-01',
            'developer' => 'Ste Parratt',
            'designer' => 'Clare Curran',
            'po' => 'Jordan Caldwell',
            'sc' => 'Sunil Minstry',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => 'http://flexi.studiobryte.co.uk/',
            'live_link' => 'https://myflexi.io/',
            'repo_link' => '',
            'email' => 'noreply@flexi.co.uk',
            'company_house' => '',
            'mailchimp_list' => '-',
        ]);  

        DB::table('sites')->insert([
            'name' => 'Playback',
            'okab_license' => 'No - old site',
            'date_started' => '2019-01-01',
            'date_finished' => '2019-01-01',
            'developer' => 'Ste Parratt',
            'designer' => 'Ollie McAinsh',
            'po' => 'Sam Newton',
            'sc' => 'Rishi Kapoor',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => '-',
            'live_link' => 'https://partners.playback.live/',
            'repo_link' => '',
            'email' => 'noreply@playback.live',
            'company_house' => '',
            'mailchimp_list' => 'Playback',
        ]);  

        DB::table('sites')->insert([
            'name' => 'Umii',
            'okab_license' => 'No - old site',
            'date_started' => '2019-01-01',
            'date_finished' => '2019-01-01',
            'developer' => 'Ste Parratt',
            'designer' => 'Ollie McAinsh',
            'po' => 'Sam Newton',
            'sc' => 'Rishi Kapoor',
            'ticket' => '-',
            'state' => 'Live',
            'staging_link' => '-',
            'live_link' => 'https://partners.playback.live/',
            'repo_link' => '',
            'email' => 'noreply@playback.live',
            'company_house' => '',
            'mailchimp_list' => 'Playback',
        ]);  

    }
}
