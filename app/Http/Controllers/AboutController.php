<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about')->with([
            'title' => 'About Us',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }
}
