<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        	['title'=>'Tips Mahir Coding','content'=>'lorem ipsum'],
        	['title'=>'Haruskah menunda lulus demi Kematangan Skill','content'=>'lorem ipsum'],
        	['title'=>'Membangun Visi Misi Tubuh Kristus','content'=>'Haleluya'],
        ];

        //Masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
