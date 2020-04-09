<?php

namespace App\Repositories;

use App\Models\Education;
use App\Repositories\BaseRepository;

/**
 * Class EducationRepository
 * @package App\Repositories
 * @version January 18, 2020, 11:21 am UTC
*/

class EducationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'institute_id',
        'education_level',
        'education_department',
        'start_date',
        'end_date',
        'continuing',
        'cgpa',
        'cgpa_out_of',
        'current_status',
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
        return Education::class;
    }
}
