<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder {
  /**     * Run the database seeds.     *
  *    
  * @return void  
*/
                public function run()    {
                    $user = [ 
                                  [
                                   'name'=>'Admin',
                                   'email'=>'admin@gmailcom',
                                   'statut'=>'1',
                                   'password'=> bcryp('123456'),
                                  ],
                                  [ 
                                     'name'=>'User',
                                     'email'=>'user@gmail.com',
                                       'is_admin'=>'0',
                                     'password'=> bcrypt('123456'),
                                      ],
                                ];
                                           foreach ($user as $key => $value) {
                                                                                      User::create($value);        }
                                                                                        } 
}