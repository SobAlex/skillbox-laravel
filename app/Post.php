<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use RevisionableTrait;

    public $fillable = ['owner_id', 'title', 'content', 'shortContent', 'code', 'isPublick'];

    protected $dispatchesEvents = [
        'created' => PostCreated::class,
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

}
