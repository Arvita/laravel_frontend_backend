<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table="users";
  protected $primaryKey = 'id';
  protected $fillable = [
      'id','name','username','password','id_status'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
