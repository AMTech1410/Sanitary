<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class dashboard extends Controller
{
    public function index()
    {
        $users = User::paginate(1);

        return view('dashboard',['users' => $users]);
    }
    public function statusChange(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
       $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }



    function insertSubAdmin(){

        return view("User.User_registration");
    }
    public function storeSubAdmin(Request $request)
    {
        // code...
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'phone'=>'required|max:10',
            'password'=>'required|min:8|max:8',
            'email'=>'required',
        ]);
        $User=new User();
        $User->firstName=$request->firstName;
        $User->lastName=$request->lastName;
        $User->phone=$request->phone;
        $User->email=$request->email;
        $User->phone=$request->phone;
        $User->password=$request->password;

       $result=$User->save();

        if($result){
            return back()->with('success','you have register successfully');
        }else{
            return back()->with('fail','something wrong to register');
        }
    }




    public function removeUser($id){
        $User=User::find($id);
        $User->delete();
        return redirect('dashboard')->with('status',"data deleted successfully");
    }
    public function editUser($id){

        $User= User::find($id);

        return view('User.User_Edit',['User'=>$User]);
     }
     public function updateUser(Request $request)
     {



         User::whereId($request->id)->update([
             "firstName"=>$request->firstName,
             "lastName"=>$request->lastName,
             "email"=>$request->email,
             "phone"=>$request->phone,
            // "status"=>$request->status,
             //"roles"=>$request->role,
         ]);

         return redirect('dashboard');


         }

    }


