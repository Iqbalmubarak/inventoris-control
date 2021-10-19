<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $dinkeses = [
          ['Dinas', 'Kesehatan', 'dinkes@gmail.com','dinkes','12345678',1]
        ];

        $user_total = 10;

        foreach ($dinkeses as $dinkes) {
            DB::table('users')->insert([
               [
                   'first_name'		 => $dinkes[0],
                   'last_name'     => $dinkes[1],
                   'email' 		     => $dinkes[2],
                   'username'      => $dinkes[3],
                   'password' 		 => bcrypt($dinkes[4]),
                   'satker_id'     => 1
               ]
            ]);

            $id = DB::getPdo()->lastInsertId();

            DB::table('activations')->insert([
                [
                    'user_id' 		=> $id,
                    'code' 			  => str_random(40),
                    'completed' 	=> '1',
                ]
            ]);

            DB::table('role_users')->insert([
                [
                    'user_id' 		=> $id,
                    'role_id' 			  => '2'
                ]
            ]);
        }

        for ($i=0; $i < $user_total; $i++) {
            $no = $i;
            if($i<10){
              $no = '0'.$i;
            }
            DB::table('users')->insert([
               [
                   'first_name'		 => 'User',
                   'last_name'     => $i,
                   'email' 		     => 'user'.$i.'@gmail.com',
                   'username'      => 'user'.$i,
                   'password' 		 => bcrypt('12345678'),
                   'satker_id'     => rand(2,5)
               ]
            ]);

            $id = DB::getPdo()->lastInsertId();

            DB::table('activations')->insert([
                [
                    'user_id' 		=> $id,
                    'code' 			  => str_random(40),
                    'completed' 	=> '1',
                ]
            ]);

            DB::table('role_users')->insert([
                [
                    'user_id' 		=> $id,
                    'role_id' 			  => '3'
                ]
            ]);
        }

    }
}
