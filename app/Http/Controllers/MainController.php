<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show iOS app page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showiOS()
    {
        return view('ios');
    }

    /**
     * Show tvOS app page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showtvOS()
    {
        return view('tvos');
    }

    /**
     * Get the current iOS version info
     *
     * @return mixed
     */
    public function getiOSVersionInfo()
    {
        return Application::iOS();
    }

}
