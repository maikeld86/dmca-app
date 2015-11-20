<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrepareNoticeRequest;
use App\Provider;
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
        $providers = Provider::lists('name','id');

        // load a view to create a new notice
        return view('notices.create',compact('providers'));

    }

    /*
    * create a new notices
    *
    * @ return \response
    * */

    public function confirm(PrepareNoticeRequest $request)
    {
        //
        return $request->all();
    }

}
