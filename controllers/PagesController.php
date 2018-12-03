<?php

class PagesController
{
    public function home() 
    {
        $users = App::get('database')->selectAll('users');

        return view('index', [
            'users' => $users
        ]);
    }

    public function about()
    {
        $company = 'Laracasts';
    }

    public function contact()
    {
        return view('contact');   
    }
}