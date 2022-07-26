<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Providers\ManagerAdded;
use App\Models\Articles;
use App\Models\Books;
use App\Models\Contact;
use App\Models\PaymentBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function dashboard(){
        $books = Books::all();
        $articles = Articles::all();
        $messages = Contact::all();
        $users = User::where('role_id','=', 2)->latest()->paginate(10);
        return view('layouts.Admin',compact('books','users','articles','messages'));
    }
    public function manageAdmin(){
        $managers = User::where('role_id',3)->paginate(5);
        return view('manage_admin.manage',compact('managers'));
    }
    public function addManager(Request $request){
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','unique:users'],
        ]);
        $input = $request->all([
            'firstname',
            'lastname',
            'email',
        ]);
        $password = substr(str_shuffle(Hash::make(Str::random(10))) , 0, 15);
        $input['password'] = Hash::make($password);
        $additionalInput = [
            'role_id' => 3,
        ];
        foreach ($additionalInput as $key => $value) {
            $input[$key] = $value;
        }
        $manager = User::create($input);

        event(new ManagerAdded($manager, $password));
        return redirect()->route('manageAdmin')->with('success','Ajout effectué avec succès');
    }

    public function deleteManager($id){
        $manager = User::find($id);
        $manager->delete();
        return back()->with('success' , 'Suppression effectué avec succès');
    }

    public function profile(){
        return view('auth.profile');
    }
    public function changeData(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
        ]);
        Auth::user()->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'updated_at' => auth()->user()->updated_at
        ]);

        return back()->with('success', 'Informations changé avec succes');
    }

    public function changeEmail(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'email|required',
                'email-confirm' => 'string|required|same:email'
            ],
            [
                'email.email' => 'Vous dévez entrez un email correct!',
                'email-confirm' => 'Vos e-mails ne correspondent pas. Réessayer !',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Auth::user()->update([
            'email' => $request->email,
            'updated_at' => auth()->user()->updated_at
        ]);
        return back()->with('success', 'Email changé avec succes');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'string|required',
            'confirm_password' => 'string|required|same:password'
        ]);
        Auth::user()->update([
            'password' => Hash::make($request->password),
            'updated_at' => auth()->user()->updated_at
        ]);
        return back()->with('success', 'Mot de passe  changé avec succes Vos povez désormais vous connecter avec votre nouveau mot de passe');
    }
    public function desactivate($id){
        $user = User::find($id);
        $user->update([
            'status'=> 0
        ]);
        return back();
    }
    public function activate($id){
        $user = User::find($id);
        $user->update([
            'status'=> 1
        ]);
        return back();
    }
    public function removeManager ($id){
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Suppression éffectué avec succès');
    }

    public function depositTransaction(){
        $deposit = Account::latest()->paginate(10);
        return view('transaction.deposit',compact('deposit'));
    }

    public function buyTransaction(){
        $buys = PaymentBook::latest()->paginate(5);
        return view('transaction.buy',compact('buys'));

    }

    public function deleteTransaction($id){
        $deposit = Account::find($id);
        Account::destroy($deposit->id);
        User::destroy($deposit->amounts->id);
        return back()->with('success', 'Suppression éffectué avec succès');
    }

}
