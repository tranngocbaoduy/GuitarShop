<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('categories')->insert([
//            ['name' => 'Acoustic Guitar', 'description' => 'An acoustic guitar is a guitar that produces sound acoustically by transmitting the vibration of the strings to the air—as opposed to relying on electronic amplification (see electric guitar).'],
//            ['name' => 'Classic Guitar', 'description' => 'Classical guitar. The classical guitar (also known as the nylon-string guitar, or Spanish guitar) is a member of the guitar family used in classical music. It is an acoustic wooden guitar with strings made of gut or nylon, rather than the metal strings used in acoustic and electric guitars.'],
//            ['name' => 'Electric Guitar', 'description' => 'An electric guitar is a guitar that uses one or more pickups to convert the vibration of its strings into electrical signals. The vibration occurs when a guitar player strums, plucks, fingerpicks, or taps the strings.'],
//            ['name' => 'Bass Guitar', 'description' => 'The bass guitar (also called electric bass, or simply bass) is a stringed instrument played primarily with the fingers or thumb, by plucking, slapping, popping, strumming, tapping, thumping, or picking with a plectrum, often known as a pick.'],
//            ['name' => 'Ukulele', 'description' => 'First and foremost, the ukulele is a paradoxical instrument. It manages to be known around the world and tied to a single location at the same time. The ukulele is a relatively simple instrument, yet it is able to produce beautiful music that\'s adored worldwide.']
//        ]);
        factory(App\Category::class, 5)->create();
    }
}
