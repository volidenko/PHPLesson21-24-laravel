<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //
    protected $primaryKey = "id";
    protected $table = "blocks";
    protected $fillable = ["topicid", "title", "content", "imagePath", "created_at", "updated_at"];
}
