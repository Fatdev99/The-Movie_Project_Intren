<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $primaryKey = 'movie_id';

    protected $fillable = [
        'name',
        'releaseyear',
        'duration',
        'description',
        'category',
        'picture',
        'source',
    ];

    public $timestamps = false;

    public function convertMinutesToHours($minutes) {
        $hours = floor($minutes / 60);
        
        $hm = (string)$hours. 'h ' . (string)($minutes-$hours*60) . 'm';
        
        return $hm;
    }
}
