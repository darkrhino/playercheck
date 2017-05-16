<?php

use Illuminate\Database\Seeder;
use PC\Defences\Provider;

class DefenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name' => 'PlayerCheck',
            'details' => 'PlayerChecks homegrown defence validation system',
            'website_url' => 'https://playercheck.co.uk',
            'logo_url' => null,
            'facebook_url' => 'https://www.facebook.com/AirsoftPlayerCheck/'
        ]);

        Provider::create([
            'name' => 'United Kingdom Airsoft Retailers Association',
            'details' => 'The United Kingdom Airsoft Retailers Association was formed in response to the 2006 Violent Crime Reduction Bill to enable a safe method of selling Realistic Imitation Fireamrs (RiF\'s) to the UK Airsoft player market.',
            'website_url' => 'http://www.ukara.org.uk/',
            'logo_url' => null,
            'facebook_url' => null,
        ]);

        Provider::create([
            'name' => 'British Airsoft Club',
            'details' => 'The BAC embodies a totally electronic method of registration.',
            'website_url' => 'http://www.britishairsoftclub.co.uk/',
            'logo_url' => null,
            'facebook_url' => 'https://www.facebook.com/britishairsoftclub/',
        ]);
    }
}
