<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Album
 * @package App\Models
 * @version February 11, 2021, 9:20 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $link
 * @property string $asset
 * @property string $data_lancamento
 */
class Album extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'albums';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'link',
        'asset',
        'data_lancamento'
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
        'asset' => 'string'
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

    
}
