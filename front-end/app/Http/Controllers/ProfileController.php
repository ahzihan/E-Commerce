<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function CreateProfile(Request $request): JsonResponse
    {
        $UserEmail=$request->header('UserEmail');
        $request->merge(['email' =>$UserEmail]);
        $data= Profile::updateOrCreate(
            ['email' => $UserEmail],
            $request->input()
        );
        return ResponseHelper::Out('success',$data,200);
    }


    public function ReadProfile(Request $request): JsonResponse
    {
        $UserEmail=$request->header('UserEmail');
        $data=Profile::where('email',$UserEmail)->get();
        return ResponseHelper::Out('success',$data,200);
    }
}
