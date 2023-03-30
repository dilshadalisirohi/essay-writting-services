<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class SitemapGenerateController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        Artisan::call('sitemap:generate');

        return redirect()->back()->with('message', 'Sitemap was generated');
    }
}
