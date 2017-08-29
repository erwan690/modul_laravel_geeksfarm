<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'content', 'image',
  ];

  public function comments()
  {
    return $this->hasMany('App\Comment', 'article_id');
  }
}
