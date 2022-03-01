<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        $country = file_get_contents(asset('maxcoach/data/countries.json'));
        $json = json_decode($country, true);

    }
}
