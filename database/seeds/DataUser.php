<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Berita;
use Faker\Factory as Faker;

class DataUser extends Seeder
{
    
    public function run()
    {
    	User::truncate();
        $user = [
	        [
	        	'name'	=> 'superadmin',
	        	'email'	=> 'seperadmin@gmail.com',
	        	'password'	=> bcrypt('123'),
	        	'level'	=> 1
	        ],
	        [
	        	'name'	=> 'admin',
	        	'email'	=> 'admin@gmail.com',
	        	'password'	=> bcrypt('123'),
	        	'level'	=> 2
	        ],
	        [
	        	'name'	=> 'user',
	        	'email'	=> 'user@gmail.com',
	        	'password'	=> bcrypt('123'),
	        	'level'	=> 3
	        ]
	     ];

	    foreach ($user as $value) {
	    	User::create([
	    		'name'	=> $value['name'],
	        	'email'	=> $value['email'],
	        	'password'	=> $value['password'],
	        	'level'	=> $value['level'],
	    	]);
    	}

  	  	$faker = Faker::create('id_ID');
  	  	for ($i=1; $i < 1000 ; $i++) { 
  	  		Berita::create([
		        'judul'	=> $faker->jobTitle,
		        'kategori_id' => 1,
		        'deskripsi'=> $faker->name, 
		        'isi'=> $faker->paragraph,
		        'foto' => 'abdi.jpg',
		        'user_id' => 1
  	  		]);
  	  	}

    }

}
