<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function Major()
    {
        $majors = Major::all();
    }
}
