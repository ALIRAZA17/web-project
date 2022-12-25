<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleSelectionController extends Controller
{
    /**
     * Display the role selection view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.role-selection');
    }

}
