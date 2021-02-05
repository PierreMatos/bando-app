<?php

namespace App\Repositories;

use App\Models\Track;
use App\Repositories\BaseRepository;

/**
 * Class TrackRepository
 * @package App\Repositories
 * @version February 5, 2021, 3:25 pm UTC
*/

class TrackRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order',
        'name',
        'duration',
        'lyric',
        'link',
        'created_at'
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
