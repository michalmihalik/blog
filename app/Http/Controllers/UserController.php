<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*public function showAction($id){
        $user = User:: find($id);

        echo $user->email."<br>";
        echo $user->meno . " " . $user->priezvisko. "<br>";
        echo $user->vek."<br>";
        echo $user->updated_at;


    }*/

    /* public function insertAction($id){

         $user = new User();
         $user->meno =str_random(5);
         $user->priezvisko =str_random(5);
         $user->email = $user->meno . "." . $user->priezvisko . "@hmail.com";
         $user->vek = mt_rand(1,80);
         $user->save();
     }*/

    /* public function updateAction($id){
         $user= User::where("id", "=",$id)->first();
         $user->update(["vek" => mt_rand(1,80)]);

     }*/

    public function deleteAction($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->action('UserController@showAllAction');

    }

    public function getAddUserForm()
    {
        return view("adduser");
    }

    public function insertAction(Request $request)
    {

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('Email');
        $age = $request->input('age');


        $user = new User();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->vek = $age;
        $user->save();

        return response()->view('adduser');
    }

    public function showAllAction()
    {
        $users = User::all();
        return view('showall', ['users' => $users]);
    }

    public function showAction($id)
    {
        $user = User:: find($id);
        return view("update", ['user' => $user]);

    }
    public function updateAction($id, Request $request)
    {
        $user= User::where("id", "=",$id)->first();
        $user->update(["vek" => $request->input('age'),
            'meno'=> $request->input('firstname'),
            'priezvisko'=> $request->input('lastname'),
            'email'=> $request->input('Email')]);

        return redirect()->action('UserController@showAllAction');

    }
}
