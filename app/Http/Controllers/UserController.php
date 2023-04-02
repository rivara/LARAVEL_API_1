<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Resources\Json\ResourceCollection;
use  Illuminate\Support\Collection;
use App\Utils\PaginateCollection;



class UserController extends Controller
{
  
    public function index(){
      $clients = Http::get('https://jsonplaceholder.typicode.com/posts');
      //alimento modelo con los datos del JSON
      $clients=$clients->object();
      //Alimento modelo con los datos del JSON
      
foreach( $clients as  $client){
      $clients = new Clients;
      $clients->id = $clients->id;
      $clients->title = $clients->title;
      $clients->body = $clients->body;
      $clients->userId = $clients->userId;
      $clients->save();
    }
      $cli=$clients->pagintae(5);
      //Devuelvo el modelo paginao
      return view("index",['leads'=> $cli]);
    }


}