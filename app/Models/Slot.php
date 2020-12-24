<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $casts = [
        'startDate' => 'datetime:Y-m-d H:i',
        'endDate' => 'datetime:Y-m-d H:i',
    ];
    protected $fillable = [
        'startDate',
        'endDate',
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
