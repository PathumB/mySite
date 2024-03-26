<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index')->with([
            'title' => 'Home',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }
}
