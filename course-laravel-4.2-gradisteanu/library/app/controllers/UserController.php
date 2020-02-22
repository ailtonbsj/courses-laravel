<?php

class UserController extends BaseController {

    public function home() {
        $user = User::find(1);
        // $books = Book::where('user_id', '=', $user->id)->get();
        $books = $user->book;

        //return View::make('home')->with('books', $books);
        return View::make('home', compact('books'));
    }

    public function getLogin() {
        return View::make('login');
    }

    public function postLogin() {
        
    }

    public function getRegister() {
        return View::make('register');
    }

    public function postRegister() {

    }

}