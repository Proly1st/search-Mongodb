<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Friend;
use App\Models\UserModel;

use MongoDB\BSON\ObjectId;
use Illuminate\Support\Facades\DB;
use Exception;

class FriendController extends Controller
{
    public  function index()
    {
        view('index');
    }

    public function getFriend()
    {

    }

    public function searchPeople (Request $request)
    {
        try {

            $keyword = $request->get('keyword');
            $search = DB::table('users')->where('name','like',$keyword .'%')->get();

            $response   =[
                'status' =>200,
                'message' =>'success',
                'data' => $search,

            ];
        }catch (Exception $exception){
            $response =[
                'status' =>500,
                'message' =>$exception,
                'data' =>null,

            ];
        }

        return $response ;
    }
}
