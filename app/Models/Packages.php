<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'item',
        'serial',
        'quantity',
        'price',
        'total',
        'client_id'
    ];

    //Table Name
    protected $table = 'packages';

    // Primary key
    public $primaryKey = 'id';

    public $timestamps = false;
}
