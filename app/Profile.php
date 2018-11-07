<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUser() {
        return $this -> belongsTo('App\User');
    }
}
