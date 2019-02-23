<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='Articulo';
    protected $primaryKey='idArticulo';
    /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
    public $timestamps=true;
    
    /*paso 4 - indicar las tablas de la base de datos al modelo*/
    protected $fillable = [
       'Nombre_Art',
       'UnidadM_Art',
       'Categoria_Art',
       'Peso_Art',  
       'Precio_Art',
       'Cantidad_Art',
       'created_at',
       'updated_at',
       
    ];
    protected $guarded =[
    ];
 }