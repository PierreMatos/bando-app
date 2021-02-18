<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Criatura
 * @package App\Models
 * @version February 17, 2021, 11:39 pm UTC
 *
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $bio
 * @property string $file
 * @property string $image
 * @property string $link
 */
class Criatura extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'criaturas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'slug',
        'name',
        'description',
        'bio',
        'file',
        'image',
        'link'
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
        'image' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'bio' => 'required'
    ];

    
}
