<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use App\Models\Image;
use Illuminate\Http\Request;

use App\Http\Requests\CameraRequest;
use App\Repositories\CameraRepository;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('camera.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('camera.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CameraRequest $request, CameraRepository $repository)
    {
        $repository->store($request->all ());
        return redirect ()->route ('home')->with ('ok', __ ('Le type de caméra a bien été enregistré'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Camera $camera)
    {
        $images = Image::where('camera_id', '=', $camera->id)->get();

        return view ('camera.show', compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Camera $camera)
    {
        return view ('camera.edit', compact('camera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CameraRequest $request
     * @param Camera $camera
     * @return \Illuminate\Http\Response
     */
    public function update(CameraRequest $request, Camera $camera)
    {

        $camera->update ($request->all ());

        return redirect ()->route ('camera.edit', [$camera->id])->with ('ok', __ ('La catégorie a bien été modifiée'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Camera::find($id)->delete();
        return response ()->json ();
    }

    public function camera(string $slug){
        return view('camera.index');
    }
}
