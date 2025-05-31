<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControll extends Controller
{
    public function show($page)
    {
        // Liste des pages valides
        $validPages = [
            'index',
            'about-us',
            'application-form',
            'news-and-blog',
            'blog-details',
            'alumni',
            'academics',
            'undergraduate',
            'graduate',
            'online-education',
            'faculty',
            'admission',
            'how-to-apply',
            'tuition-fees',
            'financial-aid',
            'date-deadlines',
            'schedule-tour',
            'courses',
            'courses-details',
            'university-life',
            'the-campus-experience',
            'fitness-athletics',
            'support-guidance',
            'student-activities',
            'contact-us',
            'demande-details',
            'demande',
            'suivi_demande',

        ];

        // Vérifier si la page demandée est valide
        if (!in_array($page, $validPages)) {
            abort(404);
        }

        // Renvoyer la vue correspondante
        return view("home.pages.{$page}");
    }
}
