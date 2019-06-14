<?php

namespace App\Http\Controllers;

use App\Models\Enchere;
use App\Repositories\ImageRepository;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param  \App\Repositories\ImageRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function index(ImageRepository $repository)
    {
        $images = $repository->getAllImages ();

        $encheres = Enchere::with('image')->get();




        return view ('home', compact ('images', 'dernier_montant'));
    }


    /**
     * Change locale.
     *
     * @param  string $locale
     * @return \Illuminate\Http\Response
     */
    public function language(String $locale)
    {
        $locale = in_array ($locale, config ('app.locales')) ? $locale : config ('app.fallback_locale');

        session (['locale' => $locale]);

        return back ();
    }
}
