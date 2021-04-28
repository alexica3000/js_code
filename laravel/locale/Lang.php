<?php

class Lang
{
    public function lang()
    {
        $langArr = ['ro' => 'Romanian', 'en' => 'English'];

        $lang = Request::segment(1);
        if (array_key_exists($lang, $langArr)) {
            Session::put('applocale', $lang);
        } else {
            Session::put('applocale', 'en');
        }

        if (Session::has('applocale') && array_key_exists(Session::get('applocale'), $langArr)) {
            App::setLocale(Session::get('applocale'));
        }
        else {
            App::setLocale('en');
        }

        $lang = App::getLocale();

        return get_defined_vars();
    }
}
