<?php
/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 09/11/18
 * Time: 13:46
 */

namespace App\Http\Controllers;


use App\Providers\JSONProvider;

class HomeCtrl
{
    public function home_GET() {
        $produtos = [
            array("codigo"=> 1, "descricao"=>"Sabão em Pó", "marca"=> "OMO", "categoria"=> "Higiene"),
            array("codigo"=> 2, "descricao"=>"Televisão Smart TV", "marca"=> "Samsung", "categoria"=> "Eletrônicos"),
            array("codigo"=> 3, "descricao"=>"Playstation 4", "marca"=> "Sony", "categoria"=> "Eletrônicos"),
            array("codigo"=> 4, "descricao"=>"Rasteirinha", "marca"=> "Melissa", "categoria"=> "Vestuário"),
        ];
          foreach ($produtos as $produto) {
            echo $produto-> codigo;
          };
        //return view('/home', compact('produtos'));
    }

    public function novoProduto_POST() {
        /*return response('responseJSON', 200)
            ->header('Content-Type', 'text/plain')
            ->json(['message' => 'Erro veio']);
        ($data = array(), $status = 200, $headers = array(), $options = 0)
        $headerContent = header('Content-Type', 'text/plain');
        JSONProvider::json($responseBody, 200, $headerContent);*/
        return '12323';
    }
}
