<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use DB;
class FavoriteController extends Controller
{
    public function showAll()
    {
        $favorites = DB::table('favorites')->get();

        // $favorites = Favorite::all("id");
        return view ('favorites', compact('favorites')); 
    }
    public function addFavorite(){
        $favorite = new favorite();
        // $favorite->user_id = $request->user()->id;
        $favorite->user_id = Auth::user()->id;
        $favorite->title = $request->title;
        $favorite->save();
    }

}
// Auth::user()->id 
