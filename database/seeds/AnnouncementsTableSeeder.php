<?php

use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('announcements')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'title' => 'Swimming Pool Summer Schedule',
	        'details' => 'Swimming Pool will be open from 8:00 AM to 8:00 PM Monday through Friday.',
	    ]);

	    DB::table('announcements')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'title' => 'Stoop Repairs',
	        'details' => 'We will be starting on repairing the stoop and we advise everyone to not park your cars on the driveways.',
	    ]);
    }

}
