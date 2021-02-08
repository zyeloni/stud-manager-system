<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Report extends Model
{
    use HasFactory;
    use Searchable;


    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(AnswerReports::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryReport::class);
    }
}
