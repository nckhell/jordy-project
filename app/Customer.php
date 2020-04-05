<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'postalCode',
        'city',
        'country',
        'VAT',
    ];
}
