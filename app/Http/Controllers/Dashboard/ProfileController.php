<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $admin = User::find(auth()->user()->id);
        return view('dashboard.profile.edit', compact('admin'));

    }
    public function updateProfile(ProfileRequest $request)
    {
        try {

            $admin = User::find(auth()->user()->id);
            if ($request->filled('password')) {
                $request->merge(['password' => bcrypt($request->password)]);
            }else{
                $request['password'] = $admin->password;
            }
            unset($request['id']);
            unset($request['password_confirmation']);
             $admin->update($request->all());
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);

        }

    }
}
