<?php

namespace Ckryo\Framework\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    protected $guarded = [];
    public $timestamps = false;

}
