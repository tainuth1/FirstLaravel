<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    public function update(UpdateAvatarRequest $request)
    {

        $path = $request->file('avatar')->store('avatar', 'public');

        if ($oldAvatar = $request->user()->avatar) {
            Storage::disk('public')->delete($oldAvatar);    
        }

        auth()->user()->update(['avatar' => $path]);

        return redirect(route('profile.edit'))->with(['message' => 'Avatar Updated']);

    }

}
