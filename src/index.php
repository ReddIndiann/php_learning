<?php


require_once __DIR__ . '/Database.php';

require_once __DIR__ . '/Model/User.php';


$user = User::create([

'name' => 'Johndwq Doe',
'email'=> 'johncDmoe@gmail.com',
'role' => 'admin',
'password' => 'admin123'
]);


$users = User::all();

foreach($users as $user){

	echo $user->name . "<br>";
}







