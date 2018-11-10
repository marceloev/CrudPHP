<?php
/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 09/11/18
 * Time: 13:46
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeCtrl
{
    public function home_GET() {
        $produtos = [
            array("codigo"=> 1, "descricao"=>"Sabão em Pó", "marca"=> "OMO", "categoria"=> "Higiene"),
            array("codigo"=> 2, "descricao"=>"Televisão Smart TV", "marca"=> "Samsung", "categoria"=> "Eletrônicos"),
            array("codigo"=> 3, "descricao"=>"Playstation 4", "marca"=> "Sony", "categoria"=> "Eletrônicos"),
            array("codigo"=> 4, "descricao"=>"Rasteirinha", "marca"=> "Melissa", "categoria"=> "Vestuário"),
        ];
        return view('/home', compact('produtos'));
    }

    public function novoProduto_POST() {
        return response()->json(array(
            'success' => true,
            'data'   => array("codigo"=> 12)
        ));
    }
}
