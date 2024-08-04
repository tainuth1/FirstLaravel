<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCoverRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoverController extends Controller
{
    
    public function update(UpdateCoverRequest $request){

        $path = $request->file('cover')->store('covers', 'public');


        if($oldCover = $request->user()->cover){
            Storage::disk('public')->delete($oldCover);
        }
        
        // in this way you can also user function auth()->user() to get user data instead of using $request.
        $request->user()->update(['cover' => $path]);
        
        return redirect(route('profile.edit'))->with(['message' => 'Cover Changed.']);

    }

}
