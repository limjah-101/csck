<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class FileController extends Controller
{

    public function index() {

        return view('admin.documents.all');
    }
    
    public function signUp(Request $request) {

        return view('files.inscription');
    }

    /**
     * @param $request
     */
    public function uploadDocuments(Request $request) {

        
        if($request->exists('document_create')) {
            $this->validate($request,[
                'title' => 'required',
                'document' => 'required|mimes:pdf|max:2048'
            ],[
                'document.required' => 'Veuillez choisir un fichier',
                'document.mimes' => 'Format accépté - PDF',
                'title.required' => 'Veuillez saisir un titre'
            ]);
                
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            
            $isFileExists = File::exists(public_path('storage/uploads/'.$filename));

            if($isFileExists)               
                return back()->with('error', 'Le fichier ' . $filename . ' existe déjà');
            
            $path = $file->storeAs('uploads', $filename, 'public');
                        
            $upload = new FileUpload();
            $upload->title = $request->title;
            $upload->path = $path;            
            $upload->save();
                        
            return redirect()->route('document.all')->with('success', 'Votre fichier à bien été enregistré');
        }

        return view('admin.documents.upload');
    }

    /**
     * @param $file 
     */
    public function downloadFile(FileUpload $document) {
        
        return response()->download(public_path('storage/'.$document->path));
    }
}
