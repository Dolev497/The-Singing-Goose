<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/start', function (Request $request) {
    $wavfile = $request->file("file-input");
    $response = (new GuzzleHttp\Client)->post("http://localhost:5100/", ['multipart' => [
        [
            'name'     => 'file', // This should match the expected parameter name in the API
            'contents' => fopen($wavfile->getPathname(), "r"),
            'filename' => $wavfile->getClientOriginalName()
        ]
    ]]);

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();

    return [$statusCode, $body];
});
