<?php
	return array(

<<<<<<< HEAD
    'multi' => array(
        'account' => array(
            'driver' => 'eloquent',
            'model' => 'Account'
        ),
        'user' => array(
            'driver' => 'database',
            'table' => 'users'
=======
// 'Ollieread\Multiauth\MultiauthServiceProvider'
return array(

    'multi' => array(
        'admin' => array(
            'driver' => 'eloquent',
            'model' => 'Cred'
        ),
        'user' => array(
            'driver' => 'eloquent',
            'model' => 'User'
>>>>>>> 52d6e42c210f608dd40c2bc7f2b7b9822c7e11a6
        )
    ),

    'reminder' => array(

        'email' => 'emails.auth.reminder',

        'table' => 'password_reminders',

        'expire' => 60,

    ),

);

// return array(

// 	/*
// 	|--------------------------------------------------------------------------
// 	| Default Authentication Driver
// 	|--------------------------------------------------------------------------
// 	|
// 	| This option controls the authentication driver that will be utilized.
// 	| This driver manages the retrieval and authentication of the users
// 	| attempting to get access to protected areas of your application.
// 	|
// 	| Supported: "database", "eloquent"
// 	|
// 	*/

// 	'driver' => 'eloquent',

// 	/*
// 	|--------------------------------------------------------------------------
// 	| Authentication Model
// 	|--------------------------------------------------------------------------
// 	|
// 	| When using the "Eloquent" authentication driver, we need to know which
// 	| Eloquent model should be used to retrieve your users. Of course, it
// 	| is often just the "User" model but you may use whatever you like.
// 	|
// 	*/

// 	'model' => 'User',

	
// 	|--------------------------------------------------------------------------
// 	| Authentication Table
// 	|--------------------------------------------------------------------------
// 	|
// 	| When using the "Database" authentication driver, we need to know which
// 	| table should be used to retrieve your users. We have chosen a basic
// 	| default value but you may easily change it to any table you like.
// 	|
	

<<<<<<< HEAD
// 	'table' => 'members',
=======
// 	'table' => 'creds',
>>>>>>> 52d6e42c210f608dd40c2bc7f2b7b9822c7e11a6

// 	/*
// 	|--------------------------------------------------------------------------
// 	| Password Reminder Settings
// 	|--------------------------------------------------------------------------
// 	|
// 	| Here you may set the settings for password reminders, including a view
// 	| that should be used as your password reminder e-mail. You will also
// 	| be able to set the name of the table that holds the reset tokens.
// 	|
// 	| The "expire" time is the number of minutes that the reminder should be
// 	| considered valid. This security feature keeps tokens short-lived so
// 	| they have less time to be guessed. You may change this as needed.
// 	|
// 	*/

// 	'reminder' => array(

// 		'email' => 'emails.auth.reminder',

// 		'table' => 'password_reminders',

// 		'expire' => 60,

// 	),

<<<<<<< HEAD
// );
=======
// );
>>>>>>> 52d6e42c210f608dd40c2bc7f2b7b9822c7e11a6
