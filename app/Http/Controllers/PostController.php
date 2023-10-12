<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function createPost(Request $request){
    $incomingfields = $request->validate([
        'title' => 'required',
        'body' => 'required',
    ]);
    $incomingfields['title'] = strip_tags( $incomingfields['title']);
    $incomingfields['body'] = strip_tags( $incomingfields['body']);
    $incomingfields['user_id'] = auth()->id();

   }
}
