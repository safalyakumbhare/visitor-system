<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function list()
    {
        $data = User::where('role', 2)->get();
        return view('admin.user-list', compact('data'));
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string', 'max:10', 'min:10'],
            'alternate_phone' => ['required', 'string', 'max:10', 'min:10'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'block' => ['required', 'string'],
            'flat_no' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
            'block' => $request->block,
            'flat_no' => $request->flat_no,
            'password' => Hash::make($request->password),
            'password_confirmation' => $request->password_confirmation,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin.user-list')->with('success','user deleted successfully');
    }
}
