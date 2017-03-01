<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Entities\Client;
use CodeProject\Repositories\ClientRepositoryEloquent;
use Illuminate\Http\Request;

/**
 * Class ClientController
 *
 * @package CodeProject\Http\Controllers
 */
class ClientController extends Controller
{


    public function index(ClientRepositoryEloquent $repository){
        return $repository->all();
    }

    public function store(Request $request){
        return Client::create($request->all());
    }

    public function show($id){
        return Client::find($id);
    }

    public function destroy($id){
        Client::find($id)->delete();
    }

    public function update(Request $request, $id){

    }

}
