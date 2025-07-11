<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function razones()
     {
         return view('Blog.Razones');
     }
     public function OpenDaysalle()
     {
         return view('Blog.OpenDaysalle'); 
     }
     public function IngredientesInactivos()
     {
         return view('Blog.IngredientesInactivos'); 
     }




     public function propiedadeslaqato()
     {
         return view('Blog.propiedadeslaqato'); 
     }
     public function vinoAjenjo()
     {
         return view('Blog.vinoAjenjo'); 
     }
     public function jaleadeSabila()
     {
         return view('Blog.jaleadeSabila'); 
     }
     public function farmaceuticaFrutoseco()
     {
         return view('Blog.farmaceuticaFrutoseco'); 
     }
     public function fabricaciondeoximielito()
     {
         return view('Blog.fabricaciondeoximielito'); 
     }





 }

