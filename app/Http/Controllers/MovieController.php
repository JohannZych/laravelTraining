<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($genre)
    {
        $html = "
        List of movies with genre : <strong>{$genre}</strong>
        <br/>
        <ul>
            <li>Halloween</li>
            <li>Jaw</li>
        </ul>";

        $response = new \Illuminate\Http\Response($html);

        return $response;
    }
}
