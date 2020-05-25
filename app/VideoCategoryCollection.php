<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VideoCategoryCollection extends Model
{
  // protected $table = 'video_category_collections';
  public function videoCategories()
  {
    return $this->belongsTo('App\VideoCategory');
  }

  public function video()
  {
    return $this->belongsTo('App\Video');
  }
}
