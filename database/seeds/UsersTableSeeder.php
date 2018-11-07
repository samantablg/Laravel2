<?php

use
  Illuminate\Database\Seeder,

  Illuminate\Support\Facades\Hash,

  App\Profile,
  App\User;

class UsersTableSeeder extends Seeder
{
  private static function Create_User ($objData) {

		// ------------ USER DATA ------------ //

		$uUser = new User;

		$uUser -> email = $objData -> MAIL;
		$uUser -> password = Hash::make($objData -> PASSWORD);

		$uUser -> save();

    // ------------ PROFILE DATA ------------ //

		$pProfile = new Profile;

		$pProfile -> user_id = $uUser -> id;
		$pProfile -> username = $objData -> USERNAME;
    $pProfile -> first_name = $objData -> FIRST_NAME;
    $pProfile -> last_name = $objData -> LAST_NAME;

		$pProfile -> save();

    echo ' - ' . $uUser -> id . ' <---> ' . $pProfile -> id . "\n";
	}

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $iMAXUSERS = 100;

    for ($i = 0; $i < $iMAXUSERS; $i++)
      static::Create_User ((object)[
        'MAIL' => 'tutu' . $i . '@tututest.com',
        'PASSWORD' => 'tutu' . $i,
        'USERNAME' => 'tutu' . $i,
        'FIRST_NAME' => 'Tutu ' . $i . ' First Name',
        'LAST_NAME' => 'Tutu ' . $i . ' Last Name',
      ]);

  }
}
