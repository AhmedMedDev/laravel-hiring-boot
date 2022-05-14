<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class KernelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $client = new Client();

        $crawler = $client->request('GET', 'https://wuzzuf.net/a/IT-Software-Development-Jobs-in-Egypt');
        // css-1gatmva e1v1l3u10
        $job = $crawler->filter('.css-1gatmva .e1v1l3u10 .css-o171kl')->first();

        dd($job->text());
        
        return view('index');
    }
}
