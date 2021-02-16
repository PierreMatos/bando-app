<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Album
 * @package App\Models
 * @version February 16, 2021, 9:37 am UTC
 *
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $file
 * @property string $image
 * @property string $release_date
 */
class Album extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'albums';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'slug',
        'name',
        'description',
        'file',
        'image',
        'release_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'description' => 'string',
        'file' => 'string',
        'image' => 'string'
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
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
