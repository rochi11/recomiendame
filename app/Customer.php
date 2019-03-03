<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Helmesvs\Notify\Notify;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'customers';
    protected $primaryKey = 'idCustomer';
}
