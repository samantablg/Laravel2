<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'invoices';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUser() {
        return $this -> belongsTo('App\User');
    }
}
