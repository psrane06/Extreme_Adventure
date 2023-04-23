<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{
    use HasFactory;

    public static function getCountByActivity()
    {
        $query = "SELECT sport_name, MAX(activity_count) AS max_activity_count FROM
        ( SELECT sport_name, COUNT(*) AS activity_count
            FROM activities
            GROUP BY sport_name
        ) AS subquery GROUP BY sport_name limit 1";
        return DB::select($query);
    }
}
