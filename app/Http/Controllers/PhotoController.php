<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\User;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = Photo::all();
        $data = ['photos' => $photos];
        return view('photo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users = $this->getUsersForSelect();
        $data = ['users' => $users];

        return view('photo.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store()
    {
        $photo = Photo::create($this->request->all());
        $image = $this->request->file('image');
        //$originalName = $image->getClientOriginalName();
        $originalExtension = $image->getClientOriginalExtension();
        $name = 'PH'.date('YmdHis').'.'.$originalExtension;
        \Storage::disk('local')->put($name,  \File::get($image));
        
        $photo->file_name = $name;
        $photo->save();

        return redirect()->route('photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $photo = Photo::findOrFail($id);
        $storagePath  = \Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $url = $storagePath.$photo->image_url;
        $photo->image_url = $url;
        $data = ['photo' => $photo];
        return view('photo.show', $data);
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

    private function getUsersForSelect()
    {
        $users = User::select(['id', 'username'])->get();
        $list = [];
        foreach ($users as $user) {
            $list[$user->id] = $user->username;
        }
        return $list;
    }
}
