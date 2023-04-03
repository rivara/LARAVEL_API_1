<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

  public function index()
  {
    $clients = Http::get('https://jsonplaceholder.typicode.com/posts');
    //alimento modelo con los datos del JSON
    $clients = $clients->object();
    //Alimento modelo con los datos del JSON
    //Control de llenadp
    if (clients::all() == Null) {
      foreach ($clients as  $cli) {
        $clients = new Clients;
        $clients->id = $cli->id;
        $clients->title = $cli->title;
        $clients->body = $cli->body;
        $clients->userId = $cli->userId;
        $clients->save();
      }
    }

    $cli=DB::table('clients')->paginate(5);
    //Devuelvo el modelo paginao
    return view("index", ['leads' => $cli]);
  }
}
