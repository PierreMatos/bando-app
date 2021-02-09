<?php

namespace App\Repositories;

use App\Models\Guest;
use App\Repositories\BaseRepository;

/**
 * Class GuestRepository
 * @package App\Repositories
 * @version February 9, 2021, 3:02 pm UTC
*/

class GuestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email'
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
        return Guest::class;
    }
}
