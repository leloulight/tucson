<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($filename)
    {
        $file = \Storage::get($filename);
        // Append the filename to the path where our images are located
        //$path = '/var/www/html/tucson/storage/' . \Config::get('assets.images') . $filename;

        // Initialize an instance of Symfony's File class.
        // This is a dependency of Laravel so it is readily available.
        //$file = new \Symfony\Component\HttpFoundation\File\File($path);

        // Make a new response out of the contents of the file
        // Set the response status code to 200 OK
        $response = \Response::make(
            $file, 
            200
        );

        // Modify our output's header.
        // Set the content type to the mime of the file.
        // In the case of a .jpeg this would be image/jpeg
        $response->header(
            'Content-type',
            'image'//$file->getMimeType()
        );

        // We return our image here.
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
