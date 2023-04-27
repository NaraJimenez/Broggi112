<?php

namespace App\Http\Controllers;

use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResources;

class GraficoController extends Controller{
  public function incidentes(){


    return view('paginas.graficos');
  }
}


// Conectarse a la base de datos
// $dbh = new PDO('mysql:host=localhost;dbname=conbdbroggi', 'prueba', 'prueba');

// // Ejecutar una consulta SQL
// $sth = $dbh->prepare('SELECT id FROM cartes_trucades');
// $sth->execute();

// // Recuperar los datos
// $resultado = $sth->fetchAll(PDO::FETCH_ASSOC);

// // Devolver los datos en formato JSON
// echo json_encode($id);
// ?>
