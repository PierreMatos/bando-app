<?php

namespace App\Repositories;

use App\Models\PostType;
use App\Repositories\BaseRepository;

/**
 * Class PostTypeRepository
 * @package App\Repositories
 * @version February 3, 2021, 11:47 am UTC
*/

class PostTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return PostType::class;
    }
}
