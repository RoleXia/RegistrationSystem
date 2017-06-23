<?php

/**
 * Created by IntelliJ IDEA.
 * User: Azerom
 * Date: 28/05/2017
 * Time: 20:28
 */

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder {


    public function run()

    {

        DB::table('tags')->delete();

        DB::table('tags')->insert(['id' => 1, 'lib' => 'Fantastique']);
        DB::table('tags')->insert(['id' => 2, 'lib' => 'Cyberpunk']);
        DB::table('tags')->insert(['id' => 3, 'lib' => 'Historique']);

        DB::table('games')->delete();

        DB::table('games')->insert([
            'id' => 1,
            'lib' => 'Shadowrun',
            'complexity' => 4,
            'description' => 'Best game ever',
            'img_name' => 'shadowrun5.jpg'
        ]);
        DB::table('games')->insert([
            'id' => 2,
            'lib' => 'Naheulbeuk',
            'complexity' => 1,
            'description' => 'Chausette !!!!',
            'img_name' => 'naheulbeuk.jpg'
        ]);
        DB::table('games')->insert([
            'id' => 3,
            'lib' => 'Ygdrassil',
            'complexity' => 2,
            'description' => 'Avec des berserckers . ',
            'img_name' => 'ygrdrassil.jpg'
        ]);

        DB::table('game_tag')->delete();

        DB::table('game_tag')->insert([
            'game_id' => 1,
            'tag_id' => 2
        ]);
        DB::table('game_tag')->insert([
            'game_id' => 2,
            'tag_id' => 1
        ]);
        DB::table('game_tag')->insert([
            'game_id' => 3,
            'tag_id' => 3
        ]);


    }

}