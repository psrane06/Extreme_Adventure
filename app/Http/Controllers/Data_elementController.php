<?php

namespace App\Http\Controllers;

use App\Models\Data_element;
use Illuminate\Http\Request;

class Data_elementController extends Controller
{
    public static function index($id)
    {
        $data = Data_element::find($id);
        return view(
            'dashboard.index',
            [
                'data' => $data,
            ]
        );
    }
}
