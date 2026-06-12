<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected function sampleShoes()
    {
        return [
            ['name' => 'Runner X', 'type' => 'Sneaker', 'price' => 89.99],
            ['name' => 'Trail Pro', 'type' => 'Boot', 'price' => 129.50],
            ['name' => 'Classic Slip', 'type' => 'Casual', 'price' => 59.00],
            ['name' => 'Street One', 'type' => 'Sneaker', 'price' => 99.99],
        ];
    }

    public function sale()
    {
        $shoes = $this->sampleShoes();
        return view('pages.sale', ['active' => 'sale', 'shoes' => $shoes]);
    }

    public function shoes()
    {
        $shoes = $this->sampleShoes();
        return view('pages.shoes', ['active' => 'shoes', 'shoes' => $shoes]);
    }

    public function sneakers()
    {
        $shoes = array_filter($this->sampleShoes(), fn($s) => stripos($s['type'], 'sneaker') !== false || stripos($s['type'],'sneaker') !== false);
        return view('pages.sneakers', ['active' => 'sneakers', 'shoes' => $shoes]);
    }

    public function boots()
    {
        $shoes = array_filter($this->sampleShoes(), fn($s) => stripos($s['type'], 'boot') !== false);
        return view('pages.boots', ['active' => 'boots', 'shoes' => $shoes]);
    }
}
