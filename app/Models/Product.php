<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $image
 * @property $precio
 * @property $stock
 * @property $color
 * @property $material
 * @property $estilo
 * @property $medidas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'image' => 'required',
		'precio' => 'required',
		'stock' => 'required',
		'color' => 'required',
		'material' => 'required',
		'estilo' => 'required',
		'medidas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','image','precio','stock','color','material','estilo','medidas'];



}
