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

        DB::table('tags')->insert(['lib' => 'Fantastique']);
        DB::table('tags')->insert(['lib' => 'Cyberpunk']);
        DB::table('tags')->insert(['lib' => 'Historique']);

        DB::table('games')->delete();

        DB::table('games')->insert([
            'lib' => 'Shadowrun',
            'complexity' => 4
        ]);


    }

}