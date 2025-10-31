<?php
// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Inertia\Inertia;

class PageController extends Controller
{
    public function welcome()
    {
        return Inertia::render('Welcome', [
            'title' => 'Welcome Page'
        ]);
    }
    
    public function dashboard()
    {
        return Inertia::render('Dashboard', [
            'user' => auth()->user()
        ]);
    }
}