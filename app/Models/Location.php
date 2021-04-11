<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    use HasFactory;
}
