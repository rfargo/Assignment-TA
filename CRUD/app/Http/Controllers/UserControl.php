<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserControl extends Controller
{
	public function __construct(UserModel $users){
		$this->users = $users;
	}

	public function register(Request $request){
		// echo $request->name;
		// echo "	";
		// echo $request->email;
		// echo "	";
		// echo $request->password;
		// echo "	";
		// return "Success";

		$users = [
			"name" => $request->name,
			"email" => $request->email,
			"password" => md5($request->password)
		];

		$users = $this->users->create($users);

		if($users){
			return "Success";
		}

		return "Failed";
	}

	public function all(){
		$users = $this->users->all();

		return view('all')->with('users', $users);
	}

	public function find($id){
		$users = $this->users->find($id);
//		$users = $this->users->where("id", "=", $id);

		return $users;
	}

	public function edit($id){

	}

	public function destroy($id){
		$users = $this->users->find($id);
		$users->delete();

//		 return redirect('/hello')->with('success', 'Ticket has been deleted!!');
		 return redirect('/hello');
	}

}
