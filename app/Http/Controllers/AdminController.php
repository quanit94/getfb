<?php
/**
 * Created by PhpStorm.
 * User: quantt
 * Date: 05/12/2016
 * Time: 17:33
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function index() {
       return View('admin.dashboard');
    }

}
