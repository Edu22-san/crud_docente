<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $sexo
 * @property $direccion
 * @property $correo
 * @property $codigo
 * @property $fecha_nacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'sexo' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'codigo' => 'required',
		'fecha_nacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','sexo','direccion','correo','codigo','fecha_nacimiento'];



}
