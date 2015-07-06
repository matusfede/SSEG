<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function inicio()
    {
        return view('sistema.inicio');
    }
}
