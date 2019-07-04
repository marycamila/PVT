<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $table = "cities";
  public $fillable = ['name', 'first_shortened', 'second_shortened', 'third_shortened'];

  public function users()
  {
    return $this->hasMany(User::class);
  }
}