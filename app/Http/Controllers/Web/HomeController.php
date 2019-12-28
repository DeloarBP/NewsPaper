<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $viewPath = 'frontend.pages';

    public function index()
    {
        return view("{$this->viewPath}.index");
    }
}
