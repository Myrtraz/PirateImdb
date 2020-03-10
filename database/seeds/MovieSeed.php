<?php

use Illuminate\Database\Seeder;

use App\Movie;

class MovieSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
    	    "name" => 'Monsters Inc.',
            "resume" =>'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, 2 monsters realize things may not be what they think.',
            "year" =>2001,
            "cover" => 'https://img.yts.lt/assets/images/movies/Monsters_Inc_2001/medium-cover.jpg'
    	]);

    	 Movie::create([
    	    "name" => 'Toy Story',
            "resume" =>'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boys room.',
            "year" =>1995,
            "cover" => 'https://img.yts.lt/assets/images/movies/Toy_Story_1995/medium-cover.jpg'
    	]);

    	  Movie::create([
    	    "name" => 'Transformers: Dark of the Moon',
            "resume" =>'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.',
            "year" =>2011,
            "cover" => 'https://img.yts.lt/assets/images/movies/Transformers_Dark_of_the_Moon_2011/medium-cover.jpg'
    	]);

    	   Movie::create([
    	    "name" => 'Joker',
            "resume" =>'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.',
            "year" =>2019,
            "cover" => 'https://img.yts.lt/assets/images/movies/joker_2019/medium-cover.jpg'
    	]);

    	    Movie::create([
    	    "name" => 'Godzilla: King of the Monsters',
            "resume" =>'The crypto-zoological agency Monarch faces off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah.',
            "year" =>2019,
            "cover" => 'https://img.yts.lt/assets/images/movies/godzilla_king_of_the_monsters_2019/medium-cover.jpg'
    	]);
    }
}
