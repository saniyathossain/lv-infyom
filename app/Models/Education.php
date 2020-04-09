<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Education",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="institute_id",
 *          description="institute_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="education_level",
 *          description="education_level",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="education_department",
 *          description="education_department",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="start_date",
 *          description="start_date",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="end_date",
 *          description="end_date",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="continuing",
 *          description="continuing",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="cgpa",
 *          description="cgpa",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="cgpa_out_of",
 *          description="cgpa_out_of",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="current_status",
 *          description="current_status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_by",
 *          description="created_by",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="updated_by",
 *          description="updated_by",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Education extends Model
{

    public $table = 'p_education';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'institute_id' => 'integer',
        'education_level' => 'string',
        'education_department' => 'string',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'continuing' => 'boolean',
        'cgpa' => 'float',
        'cgpa_out_of' => 'float',
        'current_status' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
