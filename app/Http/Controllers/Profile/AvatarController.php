<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    public function index(Request $request)
    {
        $users = User::all();
        return view('showUser', compact('users'));

    }
    public function update(UpdateAvatarRequest $request)
    {

        $users = $request->user();
        // dd($users);

        $path = $request->file('avatar')->store('avatar', 'public');

        if ($oldAvatar = $request->user()->avatar) {
            Storage::disk('public')->delete($oldAvatar);
        }

        auth()->user()->update(['avatar' => $path]);

        return redirect(route('profile.edit'));

    }

}
