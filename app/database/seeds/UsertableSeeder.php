<?php 
class UsertableSeeder extends Seeder{

public function run(){
    DB::table('users')->delete();
    $users=  array(
        array(
            'name'=>'abdul',
            'password'=>Hash::make('abdul'),
            'email'=> 'abdulqaderutm@gmail.com'
        )
    );
    DB::table('users')->insert($users);
}
    
}