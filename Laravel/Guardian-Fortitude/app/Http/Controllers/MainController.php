<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function INDEX()
    {
        return view('INDEX');
    }
    public function ABOUTUS()
    {
        return view('ABOUTUS');
    }
    public function SERVICES()
    {
        return view('SERVICES');
    }
    public function PRODUCTS()
    {
        return view('PRODUCTS');
    }
    public function CONTACTUS()
    {
        return view('CONTACT US');
    }
    public function QUOTE()
    {
        return view('QUOTE');
    }
    public function LOGIN()
    {
        return view('login');
    }
    public function ACCESSORIES()
    {
        return view('PRODUCTS.ACCESSORIES');
    }
    public function ARMOURY()
    {
        return view('PRODUCTS.ARMOURY');
    }
    public function GUIDESBOOKS()
    {
        return view('PRODUCTS.GUIDES&BOOKS');
    }
    public function OPTICS()
    {
        return view('PRODUCTS.OPTICS');
    }
    public function PROTECTIVEGEARS()
    {
        return view('PRODUCTS.PROTECTIVEGEARS');
    }
    public function SPECIALIZEDVEHICALS()
    {
        return view('PRODUCTS.SPECIALIZEDVEHICALS');
    }
    public function UNMANNEDVEHICALS()
    {
        return view('PRODUCTS.UNMANNEDVEHICALS');
    }
   
}
