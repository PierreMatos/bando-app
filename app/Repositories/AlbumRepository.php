<?php

namespace App\Repositories;

use App\Models\Album;
use App\Repositories\BaseRepository;

/**
 * Class AlbumRepository
 * @package App\Repositories
 * @version February 16, 2021, 9:37 am UTC
*/

class AlbumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'slug',
        'name',
        'description',
        'release_date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Album::class;
    }
}
