<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Traits\RestControllerTrait;
use App\Http\Requests;

class ExerciseController extends Controller
{
    use RestControllerTrait;
    const MODEL = 'App\Exercise';


}
