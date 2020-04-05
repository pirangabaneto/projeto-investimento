<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSocial extends Model
{
  use SoftDeletes;
  use Notifiable;


  /*Recording time of modifications*/
  public $timestamps =Ƞtrue;
  /*Table used*/
  protected $table = 'users';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar', 'social_email'];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = ['email_verified_at' => 'datetime'];
}
