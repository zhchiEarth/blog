<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $this->checkAllowedExtensionsOrFail($file);

        $avatar_name = Auth::user()->id . '_' . time() . '.' . $file->getClientOriginalExtension() ?: 'png';
        $path = $this->saveImageToLocal($file, 1140, $avatar_name);

        \App\Image::create([
                'url' => $path,
                'user_id' => Auth::user()->id
            ]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function checkAllowedExtensionsOrFail($file)
    {
        $allowed_extensions = ["png", "jpg", "gif", 'jpeg'];
        $extension = strtolower($file->getClientOriginalExtension());
        if ($extension && !in_array($extension, $allowed_extensions)) {
            return '格式不正确'. implode($allowed_extensions, ',');
        }
    }

    protected function saveImageToLocal($file, $resize, $filename = '')
    {
        $folderName =  'uploads/images/articles/' . date("Ymd", time());

        $destinationPath = public_path() . '/' . $folderName;
        $extension = $file->getClientOriginalExtension() ?: 'png';
        $safeName  = $filename ? :str_random(10) . '.' . $extension;
        $file->move($destinationPath, $safeName);

        if ($file->getClientOriginalExtension() != 'gif') {
            $img = Image::make($destinationPath . '/' . $safeName);
            $img->resize($resize, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save();
        }
        return $folderName .'/'. $safeName;
    }
}
