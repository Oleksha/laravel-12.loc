<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Classe::getRecord();
        return view('superadmin.classes.index', $data);
    }
}
