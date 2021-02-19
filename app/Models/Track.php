<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravelista\Comments\Commentable;


/**
 * Class Track
 * @package App\Models
 * @version February 11, 2021, 9:14 pm UTC
 *
 * @property \App\Models\Album $album
 * @property string $name
 * @property string $description
 * @property string $link
 * @property string $asset
 * @property string $lyric
 * @property integer $order
 * @property string $duração
 * @property integer $album_id
 */
class Track extends Model
{
    use SoftDeletes, Commentable, HasFactory;

    public $table = 'track';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'file',
        'image',
        'lyric',
        'order',
        'duração',
        'album_id'
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
        'file' => 'string',
        'image' => 'string',
        'order' => 'integer',
        'duração' => 'string',
        'album_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function album()
    {
        return $this->belongsTo(\App\Models\Album::class, 'album_id', 'id');
    }

    public function post(){
        return $this->has(PostType::class);
    }
}
