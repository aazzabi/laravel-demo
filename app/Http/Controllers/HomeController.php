<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    public function index() {
        return 'Bonjour HOMEPAGE';
    }

    public function show() {
        return view('Home.show');
    }
    public function detail($value) {
        return view('Home.detail', ['value' => $value]);
    }
}