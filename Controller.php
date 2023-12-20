<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Http\Controllers\Controller;
class Controllers extends BaseController
{
 public function display(){
 return view('welcome',['name'=>'Jagjot']);
 }
}
