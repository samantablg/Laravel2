<?php

use
  Illuminate\Database\Seeder,

  Illuminate\Support\Facades\Hash,

  App\User,
  App\Invoice;

class InvoicesTableSeeder extends Seeder
{
  private static function Create_Invoice ($objData) {

		// ------------ INVOICE DATA ------------ //

		$iInvoice = new Invoice;

    $iInvoice -> user_id = $objData -> USER_ID;
		$iInvoice -> reference = $objData -> REFERENCE;
    $iInvoice -> data = $objData -> DATA;

		$iInvoice -> save();

    echo ' - ' . $iInvoice -> id . "\n";

	}

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $iMAXUSERS = 10;

    $aUsers = User::all();

    foreach ($aUsers as $uUser)
      for ($i = 0; $i < $iMAXUSERS; $i++)
        static::Create_Invoice ((object)[
          'USER_ID' => $uUser -> id,
          'REFERENCE' => 'REFERENCE_' . $i . '_USER_' . $uUser -> id,
          'DATA' => 'DATA_' . $i . '_USER_' . $uUser -> id
        ]);
  }
}
