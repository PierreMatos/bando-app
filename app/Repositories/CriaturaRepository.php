<?php

namespace App\Repositories;

use App\Models\Criatura;
use App\Repositories\BaseRepository;

/**
 * Class CriaturaRepository
 * @package App\Repositories
 * @version February 17, 2021, 11:39 pm UTC
*/

class CriaturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'slug',
        'name',
        'description',
        'bio'
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
        return Criatura::class;
    }
}
