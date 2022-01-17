<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptor extends Model
{
    use HasFactory;

    protected $table = 'subscriptors';

    protected $fillable = [
        'email',
        'website_id'
    ];




}
