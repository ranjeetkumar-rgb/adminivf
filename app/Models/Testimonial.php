<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUpload;

class Testimonial extends Model
{
    use HasImageUpload;
    
    protected $fillable = ['name', 'designation', 'message', 'image'];
}
