<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    
    public function update(UpdateAvatarRequest $request)
    {

        $path = $request->file('avatar')->store('avatar', 'public');
        auth()->user()->update(['avatar' => $path]);

        return redirect(route('profile.edit'))->with(['message' => 'Avatar Updated']);

    }

}
