<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function doctors(){
        return Doctor::all();
    }

    function patients(){
        return DB::connection('mariadb')->table('patients')->get();
    }

    function all(){
        $doctors = array(Doctor::all());
        $patients = array(DB::connection('mariadb')->table('patients')->get());

        $sum = array_merge($doctors,$patients);
        return $sum;
    }
}
