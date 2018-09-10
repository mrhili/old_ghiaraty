<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Support\Facades\Auth;

use App\Building;

class LikeController extends Controller
{

	/*
    public function likeProduct($id)
    {
        // here you can check if product exists or is valid or whatever

        $this->handleLike('App\Product', $id);
        return redirect()->back();
    }

    */

    public function likeBuilding($id, Building $b)
    {
        // here you can check if product exists or is valid or whatever

        $this->handleLike($b, $id);

        //

        return redirect()->back();
    }

    public function handleLike($type, $id)
    {
        $existing_like = Like::withTrashed()->whereLikeableType($type)->whereLikeableId($id)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'user_id'       => Auth::id(),
                'likeable_id'   => $id,
                'likeable_type' => $type,
            ]);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }
    }

    public function updateLikeNotificationAsRead(Request $request, $id){

        Auth::user()->unreadNotifications->markAsRead();

        return response()->json(['مقروئة']);

    }


    
}
