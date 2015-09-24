<?php
namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WebController extends Controller{
    public function welcome(Request $rq){
        return view('welcome');
    }
    public function index(Request $rq){
        return view('welcome');
    }
}
