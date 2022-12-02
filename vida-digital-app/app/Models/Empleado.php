<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $emp_fname
 * @property $emp_lname
 * @property $emp_dob
 * @property $salary
 * @property $sucursales_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursale $sucursale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'emp_fname' => 'required',
		'emp_lname' => 'required',
		'emp_dob' => 'required',
		'salary' => 'required',
		'sucursales_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['emp_fname','emp_lname','emp_dob','salary','sucursales_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursale()
    {
        return $this->hasOne('App\Models\Sucursale', 'id', 'sucursales_id');
    }
    

}
