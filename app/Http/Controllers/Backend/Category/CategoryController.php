<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $viewPath = 'backend.page.category';

    public function index()
    {
        return view( "{$this->viewPath}.categories ");
    }
    public function create()
    {

    }
    

    public function sub_categories()
    {
        return view( "{$this->viewPath}.sub_categories ");
    }
    public function sub_cat_create()
    {

    }
    
 }
