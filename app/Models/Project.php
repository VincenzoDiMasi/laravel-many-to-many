<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description', 'project_link', 'techonologies_used'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
