<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

        DB::table('users')->insert([
            ['name' => 'wkwksama',
            'email' => 'mailpakgasing@gmail.com',
           'password' => bcrypt('gasing'),
           'admin' => 1,
           'created_at' => date("Y-m-d H:i:s"),
           'updated_at' => date("Y-m-d H:i:s")],

           ['name' => 'admin',
           'email' => 'admin@telolet.com',
          'password' => bcrypt('admin'),
            'admin' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]

        ]);

        DB::table('divisis')->insert([
            ['nama' => 'lapangan',
            'tugas' => 'jalan-jalan dan gathering informasi dan relasi dalam maupun luar kota',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],

            ['nama' => 'kantoran',
            'tugas' => 'mengurusi administrasi komunitas dan sponsorship',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],

            ['nama' => 'teknis',
            'tugas' => 'belajar tentang perkembangan teknologi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]

        ]);

        for ($i=0; $i <10 ; $i++) {
        DB::table('pesertas')->insert([
                # code...

            ['nama' => str_random(8),
            'email' => str_random(8).'@gmail.com',
            'hp' =>  intval( "0"."8".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9). rand(0,9).rand(0,9).rand(0,9) ),
            'divisi_id' => rand(1,3),
            'alasan' => substr(str_repeat($content, 15), 0, 420),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],

        ]);
        }
    }
}
