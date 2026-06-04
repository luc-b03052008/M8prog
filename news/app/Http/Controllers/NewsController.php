<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private array $articles = [
        [
            'slug' => 'eminem',
            'title' => 'Eminem Speaks To Police Officer After Noise Complaint Called On Super Bowl Halftime Performance',
            'intro' => 'INGLEWOOD, CA—During an awkward interruption of an otherwise lively performance, rapper Eminem was reportedly tasked with speaking to police officers Sunday after a noise complaint had been called on the Super Bowl halftime show.',
        ],
        [
            'slug' => 'rams',
            'title' => 'Rams Dedicate Win To Whatever City They Play For',
            'intro' => 'INGLEWOOD, CA—Upon securing a decisive victory over the Cincinnati Bengals in Super Bowl LVI, the triumphant Rams told reporters Sunday that they wanted to dedicate their win to whatever city it was that they played for.',
        ],
        [
            'slug' => 'gelato',
            'title' => 'Learn the Difference Between Ice Cream and Gelato, Once and for All',
            'intro' => 'From milk, cream, and eggs to air and storage, ice cream and gelato actually quite different.',
        ],
    ];

    public function index()
    {
        return view('news', [
            'articles' => $this->articles,
        ]);
    }
}
