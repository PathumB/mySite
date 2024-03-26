<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index')->with([
            'title' => 'Services',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get web-design page.
     */
    public function webDesign()
    {
        return view('services.web-design')->with([
            'title' => 'Services | Web Design',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

     /**
     * get mobile-app-development page.
     */
    public function mobileAppDevelopment()
    {
        return view('services.mobile-app-development')->with([
            'title' => 'Services | Mobile App Development',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional mobile apps for businesses',
            'metaKeywords' => 'PhyxleLoom, mobile app development, mobile application development, mobile app design, Android development, iOS development, responsive design'
        ]);
    }

    /**
     * get ui-ux-design page.
     */
    public function uiUxDesign()
    {
        return view('services.ui-ux-design')->with([
            'title' => 'Services | UI/UX Design',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional user interfaces for businesses',
            'metaKeywords' => 'PhyxleLoom, UI design, UX design, user interface design, user experience design, web design, website design, mobile app design, mobile application design'
        ]);
    }

    /**
     * get graphic-design page.
     */
    public function graphicDesign()
    {
        return view('services.graphic-design')->with([
            'title' => 'Services | Graphic Design',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional graphic designs for businesses',
            'metaKeywords' => 'PhyxleLoom, graphic design, logo design, branding, visual identity, advertising, marketing materials'
        ]);
    }
}
