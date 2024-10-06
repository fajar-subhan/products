<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Faker\Factory as faker;

class ProductsController extends Controller
{
    /**
     * 
     * Showing index products
     */
    public function index()
    {
        $data = Products::all();
        return view('products/view_products_index', ['data' => $data]);
    }

    public function store(Request $request)
    {

        $faker = faker::create('id_ID');

        $productNames = [
            'Nasi Goreng Spesial',
            'Ayam Penyet',
            'Sate Kambing',
            'Es Teh Manis',
            'Mie Goreng Aceh',
            'Kopi Arabika',
            'Kue Cubir',
            'Bubur Ayam',
            'Bakso Malang',
            'Roti Bakar Cinta',
            'Pisang Goreng Crispy',
            'Soto Ayam',
            'Martabak Manis',
            'Rendang Daging',
            'Ikan Bakar Jimbaran',
            'Cendol Durian',
            'Nasi Uduk',
            'Kerupuk Udang',
            'Kacang Bakar',
            'Kue Lapis'
        ];
        
        $data = [
            'name'          => $faker->randomElement($productNames),
            'description'   => $faker->word(),
            'price'         => $faker->randomFloat(2,2000,10000),
            'qty'           => $faker->randomNumber(2)
        ];

        Products::create($data);

        return redirect()->route('products.index');
    }
}
