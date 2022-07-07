<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Age;

use App\Models\Boy;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($type = 'boy')
    {
        // $ages = Age::all();

        return view('auth.register', compact('type'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->type == 'boy') {
            $guardName = 'web';
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'record' => ['required', 'string', 'max:255'],
                'f_phone' => ['required'],
                's_phone' => ['required'],
                'class' => ['required'],
                'school' => ['required'],
                'neighbor' => ['required'],
                'age' => ['required'],
                'move' => ['required'],
                'photo' => ['nullable'],
                'employee' => ['nullable'],
                'condition' => ['required'],
            ]);
            // Uploads photo For photo folder
            $image = null;

            if ($request->hasFile('photo')) {
                $files = $request->file('photo'); // Uploaded File Objects

                $img_path = $files->store('/', [
                    'disk' => 'photo',
                ]);

                $image = $img_path;
            } else {
                $image = null;
            }
            // $boy =
            Boy::create([
                'name' =>  $request->name,
                'civil_record' =>  $request->record,
                'first_phone' =>  $request->f_phone,
                'second_phone' =>  $request->s_phone + 1,
                'class' =>  $request->class,
                'school' =>  $request->school,
                'neighborhood' =>  $request->neighbor,
                'age_id' =>  $request->age,
                'move' =>  $request->move,
                'photo' => $image,
                'employee' =>  $request->employee,
                'condition' =>  $request->condition,
                'club_id' =>  session()->get('club'),

                'city_id' =>  session()->get('city'),

                'year' =>  2020 + 1,
            ]);
            // return view('boy.index');

            // event(new Registered($boy));
            // Session::put('guardName', $guardName);
            // Session::put('boy',  $request->name);
            $boy_name = $request->session()->get('boy', $request->name);
            $boy_phone = $request->session()->get('boy', $request->f_phone);
            // return redirect()->intended(RouteServiceProvider::BOY);

            return view('boy.success_register', compact('boy_name', 'boy_phone'));
        } else if ($request->type == 'girl') {
            $guardName = 'web';
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'record' => ['required', 'string', 'max:255'],
                'f_phone' => ['required'],
                's_phone' => ['required'],
                'class' => ['required'],
                'school' => ['required'],
                'neighbor' => ['required'],
                // 'age' => ['required'],
                'move' => ['required'],
                'photo' => ['nullable'],
                'employee' => ['nullable'],
                'condition' => ['required'],
            ]);
            // Uploads photo For photo folder
            $image = null;

            if ($request->hasFile('photo')) {
                $files = $request->file('photo'); // Uploaded File Objects

                $img_path = $files->store('/', [
                    'disk' => 'photo',
                ]);

                $image = $img_path;
            } else {
                $image = null;
            }
            $boy = Boy::create([
                'name' =>  $request->name,
                'civil_record' =>  $request->record,
                'first_phone' =>  $request->f_phone,
                'second_phone' =>  $request->s_phone + 1,
                'class' =>  $request->class,
                'school' =>  $request->school,
                'neighborhood' =>  $request->neighbor,
                'age_id' =>  $request->age,
                // 'age_id' =>  null,
                // 'current_age_id' =>  $request->age,
                'move' =>  $request->move,
                'photo' => $image,
                'employee' =>  $request->employee,
                'condition' =>  $request->condition,
                'year' =>  2020 + 1,
            ]);

            event(new Registered($boy));
            // Session::put('guardName', $guardName);
            // Session::put('boy',  $request->name);
            $boy_name = $request->session()->get('boy', $request->name);
            $boy_phone = $request->session()->get('boy', $request->f_phone);

            // return redirect()->intended(RouteServiceProvider::GIRL);
            return view('boy.success_register', compact('boy_name', 'boy_phone'));
            // return view('boy.index');

        }
    }
}
