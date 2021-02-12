<?php

namespace App\Repositories;

use App\Models\Album;
use App\Repositories\BaseRepository;

/**
 * Class AlbumRepository
 * @package App\Repositories
 * @version February 11, 2021, 9:20 pm UTC
*/

class AlbumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'asset',
        'link',
        'data_lancamento'
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
