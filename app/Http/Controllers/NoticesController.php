<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{
    /*
     * create a new controller instances
     * */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * show all notices
     * @return string
     * */

    public function index()
    {
        return 'all notices';
    }

    /*
     * create a new notices
     *
     * @ return \response
     * */

    public function create()
    {
        // Get list of providers

        // load a view to create a new notice
        return view('notices.create');

    }
}
