<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index($id)
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }
}
?>
