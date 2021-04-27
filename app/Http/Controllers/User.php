<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomRequestException;
use App\Http\Requests\User as RequestsUser;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User as ModelsUser;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Throwable;

class User extends Controller
{
    public function create(Request $request)
    {
        $user = ModelsUser::store($request);
        return $user;
    }

    public function read(Request $request)
    {
        // return UserCollection::collection(ModelsUser::all());
        return UserResource::collection(ModelsUser::all());
    }

    public function responseTest(Request $request)
    {
        return response()->success(UserResource::collection(ModelsUser::all()));
        // return response()->success('Successful');

    }

    public function formRequestTest(RequestsUser $request)
    {
        try {
            return response()->json($request->all());
        } catch (Throwable $e) {
            return response()->json("error", 400);
        }
    }

    public function formRequestTest2(Request $request)
    {
        // try {
        // $this->formRequestTest($request);
        app('App\Http\Requests\User');
        return response()->json($request->all());
        // } catch (HttpResponseException $e) {
        //     // return get_class($e);
        //     return $e->getResponse();
        // } catch (CustomRequestException $e) {
        //     // return get_class($e);
        //     return $e->getResponse();
        // }
    }
}
