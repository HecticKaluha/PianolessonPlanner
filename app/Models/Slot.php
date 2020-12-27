<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $casts = [
        'date' => 'datetime:Y-m-d',
        'startTime' => 'datetime:H:i',
        'endTime' => 'datetime:H:i',
    ];
    protected $fillable = [
        'date',
        'startTime',
        'endTime',
        'category_id',
        'email',
        'name',
        'remarks',
    ];

    public function category(){
        return $this->belongsTo(Category::class)->withDefault([
            'name' => ' - ',
        ]);
    }
}
