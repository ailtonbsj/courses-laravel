<?php

class UserController extends BaseController {

	public function home() {
		//$user = User::find(1);
		$user = Auth::user();
		// $books = Book::where(
		// 	'user_id','=',$user->id
		// )->get();
		$books = $user->book;

		return View::make('home')->with(
			'books', $books
		);
		//return View::make('home', compact('books'));
	}

	public function getLogin(){
		return View::make('login');
	}

	public function postLogin(){
		$rules = array(
			'username'=>'required',
			'password'=>'required|min:4'
		);
		$validator = Validator::make(
			Input::all(), $rules
		);

		if($validator->fails()){
			return Redirect::to('login')
			->withErrors($validator)
			->withInput(Input::except('password'));
		} else {
			$userdata = array(
				'username'=>Input::get('username'),
				'password'=>Input::get('password')
			);

			$remember = Input::has('remember') ? true: false;

			if(Auth::attempt($userdata, $remember)){
				//return Redirect::route('home');
				return Redirect::to('/');
			}
			else {
				return Redirect::to('login')
				->with('message','Invalid username/password!')
				->with('alert-class','alert-danger');
			}
		}
	}

	public function getRegister(){
		return View::make('register');
	}

	public function postRegister(){
		$validator = User::validate(Input::all());
		if($validator->passes()){
			User::create(array(
				'username'=>Input::get('username'),
				'email'=>Input::get('email'),
				'password'=>Input::get('password')
			));

			return Redirect::route('login')
			->withMessage('Yout have successfully registered!');
		}

		return Redirect::route('register')
		->withErrors($validator);
	}

	public function logout(){
		Auth::logout();
		return Redirect::route('login')
		->with('message','You have successfully log out!');
		//->with('alert-class','alert-danger');
	}

}