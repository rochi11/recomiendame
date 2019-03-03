<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'idProduct';
}
