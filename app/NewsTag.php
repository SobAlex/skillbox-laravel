<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'new_tag';
}