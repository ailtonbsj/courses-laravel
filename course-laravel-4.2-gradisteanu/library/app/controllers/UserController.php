<?php

class UserController extends BaseController {

    public function home() {
        $user = User::find(1);
        // $books = Book::where('user_id', '=', $user->id)->get();
        $books = $user->book;

        return View::make('home')->with('books', $books);
    }

}