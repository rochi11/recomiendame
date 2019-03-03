<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'stores';
    protected $primaryKey = 'idStore';
}
