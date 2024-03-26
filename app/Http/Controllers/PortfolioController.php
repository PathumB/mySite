<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portfolio.index')->with([
            'title' => 'Portfolio',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get disonsconstruction page.
     */
    public function disonsconstruction()
    {
        return view('portfolio.disonsconstruction')->with([
            'title' => 'Portfolio | Disonsconstruction',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get dragonsof page.
     */
    public function dragonsof()
    {
        return view('portfolio.dragonsof')->with([
            'title' => 'Portfolio | Dragonsof',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get econsulate page.
     */
    public function econsulate()
    {
        return view('portfolio.econsulate')->with([
            'title' => 'Portfolio | Econsulate',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get hcm page.
     */
    public function hcm()
    {
        return view('portfolio.hcm')->with([
            'title' => 'Portfolio | HCM',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get estai page.
     */
    public function estai()
    {
        return view('portfolio.estai')->with([
            'title' => 'Portfolio | Estai',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }

    /**
     * get tropi page.
     */
    public function tropi()
    {
        return view('portfolio.tropi')->with([
            'title' => 'Portfolio | Tropi',
            'metaDescription' => 'PhyxleLoom is a professional web development company specializing in creating stunning and functional websites for businesses',
            'metaKeywords' => 'PhyxleLoom, web development, website development, web design, PHP development, Laravel development, responsive design'
        ]);
    }
}
