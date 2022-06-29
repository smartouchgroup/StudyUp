<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LikedResource;
use App\Models\Like;
use Illuminate\Http\Request;


class LikeController extends Controller
{
    public function getBestLiked(){
        $avg = Like::avg('like_number');
        $getBest = Like::where('like_number','>=',$avg)->get();
        return LikedResource::collection($getBest);
    }

    public function liked(Request $request)
    {
        $getLiked = Like::where('book_id',$request->book_id)->pluck('like_number');
        $Like = (int)$getLiked[0] + 1 ;
        $final = Like::where('book_id',$request->book_id)->first();
        $final->update([
            'like_number' => $Like
        ]);
        return response()->json(['message' => "Vous avez aimé ce livre"], 200);
    }

    public function disliked(Request $request)
    {
        $getLiked = Like::where('book_id',$request->book_id)->pluck('like_number');
        $Like = (int)$getLiked[0] - 1 ;
        $final = Like::where('book_id',$request->book_id)->first();
        $final->update([
            'like_number' => $Like
        ]);
        return response()->json(['message' => "like retiré"], 200);
    }
}
