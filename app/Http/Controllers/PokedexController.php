<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokedexController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/']);
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $url = 'pokemon?limit=20';

        if ($search) {
            $url = "pokemon/{$search}";
        }

        try {
            $response = $this->client->get($url);
            $data = json_decode($response->getBody()->getContents());

            if ($search) {
                $data = (object) [
                    'results' => [ (object) ['name' => $data->name] ]
                ];
            }

        } catch (\Exception $e) {
            $data = (object) ['results' => []];
        }

        return view('pokedex.index', ['pokemons' => $data->results]);
    }
    public function show($pokemon)
    {
        $response = $this->client->get("pokemon/{$pokemon}");
        $data = json_decode($response->getBody()->getContents());

        return view('pokedex.show', ['pokemon' => $data]);
    }
}
