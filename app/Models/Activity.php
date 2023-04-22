<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function getCountByActivity()
    {
        return $this->groupBy('sport_name')
                    ->selectRaw('sport_name, COUNT(*) as count')
                    ->get();
    }
}
