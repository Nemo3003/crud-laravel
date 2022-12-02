<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $emp_fname
 * @property $emp_lname
 * @property $emp_dob
 * @property $salary
 * @property $branches_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'emp_fname' => 'required',
		'emp_lname' => 'required',
		'emp_dob' => 'required',
		'salary' => 'required',
		'branches_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['emp_fname','emp_lname','emp_dob','salary','branches_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne('App\Models\Branch', 'id', 'branches_id');
    }
    

}
