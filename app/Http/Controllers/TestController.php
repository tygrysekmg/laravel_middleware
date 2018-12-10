<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckYear;

class TestController extends Controller
{
	   /**

    * Constructor.

    *

    * @return void

    */

   public function __construct()

   {

       $this->middleware(CheckYear::class);

   }
      public function index(){

      echo "<br>Test Controller.";

   }
}
