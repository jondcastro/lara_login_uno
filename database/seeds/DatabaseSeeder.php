<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // $data = [            
        //     [
        //         'role' => '1'
                
        //     ],          
        //     [
        //        'role' => '2' 
        //     ]
        // ];

        // DB::table('roles')->insert($data);

    	$data = [
    		[
    			'first_name' => 'jonathan',
    			'last_name' => 'castro',
    			'email' => 'admin@hotmail.com',
    			'password' => bcrypt('123'),
    			'role_id' => 1    			
    		],
    		[
    			'first_name' => 'maria',
    			'last_name' => 'pacheco',
    			'email' => 'maria@hotmail.com',
    			'password' => bcrypt('123'),
                'role_id' => 2 
    		],    		
    		[
    			'first_name' => 'jose',
    			'last_name' => 'martin',
    			'email' => 'jose@hotmail.com',
    			'password' => bcrypt('123'),
                'role_id' => 2 
    		]
    	];

    	DB::table('users')->insert($data);
    }
}
