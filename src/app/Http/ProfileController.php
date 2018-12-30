<?php

namespace MaterialAdmin\app\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;

class ProfileController extends Controller
{

    /**
     * User eloquente.
     */
    protected $user;

    /**
     * Create a new controller instance.
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }
    /**
     * Show the profile page.
     *
     * @return view
     */
    public function index()
    {
        return view('material::pages.profile', ['user'=>Auth::user()]);
    }

     /**
     * Update the user profile.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'sometimes|required|unique:users,id|email',
            'name' => 'sometimes|required|unique:users,id',
            'password' => 'sometimes|confirmed|nullable|min:4',
        ]);

        if ($validator->fails()){
            return redirect()
                   ->back()
                   ->withErrors($validator)
                   ->withInput();
        }

        $user = $this->user->find($id);

        if($request['password'] !== null){
          $request['password'] = bcrypt($request['password']);
          $user->update($request->all());
        }else{
          $user->update($request->only(['email' , 'name']));
        }

        return redirect()->back()->with('toastr' , ['msg'=>'Profile success update']);
    }
}
