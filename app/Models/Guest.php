<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Guest
 * @package App\Models
 * @version February 9, 2021, 3:02 pm UTC
 *
 * @property string $name
 * @property string $email
 */
class Guest extends Model
{
    use SoftDeletes;


    public $table = 'guests';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
