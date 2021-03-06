<?php

namespace App\Repositories;

use App\Models\Track;
use App\Repositories\BaseRepository;

/**
 * Class TrackRepository
 * @package App\Repositories
 * @version February 11, 2021, 9:14 pm UTC
*/

class TrackRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'link',
        'lyric',
        'order',
        'duração'
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
        return Track::class;
    }
}
