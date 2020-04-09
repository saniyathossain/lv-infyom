<?php

namespace App\Repositories;

use App\Models\Companies;
use App\Repositories\BaseRepository;

/**
 * Class CompaniesRepository
 * @package App\Repositories
 * @version January 18, 2020, 11:02 am UTC
*/

class CompaniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_name',
        'company_location',
        'company_link',
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
        return Companies::class;
    }
}
