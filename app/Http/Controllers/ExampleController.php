<?php

namespace App\Http\Controllers;

use Guzzle/Client;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function ppob_get_kelompok()
    {
        $client = new Client();

        $request = $client->request('POST', 'http://test.api.aptmi.com', [
            'json' => [
                'apikey' => 'd4e58d3dae2df7031d0871aa03b967f1',
                'page' => 'host2host-ppob',
                'function' => 'get-info-kelompok',
                'param' => [
                    'memberid' => 'ZON18071751',
                    'tipe' => 'POST'
                ]
            ]
        ]);

        dd($request->getStatusCode(), $request->getBody());
    }
}
