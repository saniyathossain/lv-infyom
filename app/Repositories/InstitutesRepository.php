<?php

namespace App\Repositories;

use App\Models\Institutes;
use App\Repositories\BaseRepository;

/**
 * Class InstitutesRepository
 * @package App\Repositories
 * @version January 18, 2020, 2:31 pm UTC
*/

class InstitutesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'institute_name',
        'institute_location',
        'institute_link',
        'created_by',
        'updated_by'
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
        return Institutes::class;
    }
}
