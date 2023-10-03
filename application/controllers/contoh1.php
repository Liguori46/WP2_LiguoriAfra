<?php

namespace App\Controllers;

class Product extends BaseController{
    public fuction index(){
        renturn view('product_page');
    }
    public fuction display(){
        renturn view('product?product_display');
    }
    public fuction page(){
        echo view('multiple/header');
        echo view('multiple/content');
        echo viev('multiple/footer');

    }
    public fuction calatog(){
        $data = [
            'title' => 'product catalog',
            'brand' => 'Smartphone xiaomi',
            'product_name' => ['Black Shark','Redmi note 11']
        ];
        renturn view('product_catalog', $data)
    }
}