<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Helmesvs\Notify\Notify;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'idProduct';
}
