<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VideoCategory extends Model
{
  // protected $table = 'video_categories';

  public function videos()
  {
    return $this->belongsTo('App\Video');
  }

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName()
  {
    return 'id';
  }
}
