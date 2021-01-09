<?php

namespace App\Http\Controllers;

use App\DataTables\FileDataTable;
use App\Http\Requests\CreateFileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Throwable;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FileDataTable $dataTable)
    {
//        $files = File::all();
        return $dataTable->render('files');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFileRequest $request)
    {
        if ($request->hasfile('files')) {
            $dir = 'uploads/pictures/';
            try{
                foreach ($request->file('files') as $image) {
//                    $extension = $image->getClientOriginalExtension();
//                    $filename = uniqid() . '_' . time() . '.' . $extension;
//                $image->move($dir, $filename);
                    $path = $image->store('uploads');
                    File::create([
                        'path' => $path,
                    ]);
                }
                session()->flash('message', 'Successfully uploaded');
                return redirect()->back()->with('success', 'Your images have been successfully uploaded, you can view them in the files page.');
            }
            catch(Throwable $e){
                return redirect()->back()->withErrors(['error' => 'Something went wrong when uploading the files', 'files' => 'Error occurred : ' .$e->getMessage()]);
            }

        } else {
            return redirect()->back()->withErrors(['error' => 'There were no files selected.', 'files' => 'There were no files selected.']);
        }
    }

    public function storeFileTinyMCEUpload(Request $request)
    {
        $response = [
            'success' => false,
            'exception' => false,
            'location' => '',
            'exceptionMessage' => '',
            'message' => '',
            'errors' => '',
        ];

        $rules = [
            'file' => 'required',
            'file.*' => 'mimes:jpg,jpeg,png,gif,svg|max:2048'
        ];

        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            try {
                if ($request->hasfile('file')) {
                    $path = $request->file('file')->store('uploads');
                    File::create([
                        'path' => $path,
                    ]);

                    $response['success'] = true;
                    $response['location'] = asset($path);
                    $response['message'] = 'Image successfully uploaded';
                    return $response;
                } else {
                    $response['success'] = false;
                    $response['errors'] = 'No files selected';
                    $response['message'] = "You didn't select any files";
                    return $response;
                }
            } catch (Throwable $e) {
                $response['success'] = false;
                $response['exception'] = true;
                $response['exceptionMessage'] = $e->getMessage();
                return $response;
            }
        }
        else{
            $response['success'] = false;
            $response['message'] = 'There was something wrong with the data you entered.';
            $response['errors'] = $validator->messages();
            return $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('files.remove'. compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    public function remove(File $file){
        return view('files.delete',compact('file'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        Storage::delete($file->path);
        session()->flash('message', 'File successfully deleted.');
        return redirect("/files");
    }
}
