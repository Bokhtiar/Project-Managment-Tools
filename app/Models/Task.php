<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id','user_id','title','des','start_date','end_dete','images','file','status',
    ];

    public function setUserAttribute($value)
    {
        $this->attributes['user'] = json_encode($value);
    }

    public function getUserAttribute($value)
    {
        return $this->attributes['user'] = json_decode($value);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
