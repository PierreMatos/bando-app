<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version February 3, 2021, 12:29 pm UTC
 *
 * @property \App\Models\PostType $type
 * @property string $name
 * @property string $description
 * @property string $link
 * @property string $asset
 * @property string $lyric
 * @property integer $type_id
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'link',
        'asset',
        'lyric',
        'type_id',
        'created_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'link' => 'string',
        'asset' => 'string',
        'type_id' => 'integer',
        'created_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function type()
    {
        return $this->belongsTo(\App\Models\PostType::class, 'type_id', 'id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function track()
    {
        return $this->belongsTo(Track::class, 'track_id', 'id');

    }
}
