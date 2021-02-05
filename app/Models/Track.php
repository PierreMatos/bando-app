<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Track
 * @package App\Models
 * @version February 5, 2021, 3:25 pm UTC
 *
 * @property integer $order
 * @property string $name
 * @property string $duration
 * @property string $lyric
 * @property string $link
 */
class Track extends Model
{
    use SoftDeletes;


    public $table = 'track';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'order',
        'name',
        'duration',
        'lyric',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'name' => 'string',
        'duration' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
