<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index() {

        return view('admin.documents.all');
    }
    
    public function signUp(Request $request) {

        return view('files.inscription');
    }

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
            // $file_without_ext = pathinfo($filename, PATHINFO_FILENAME);            
            $path = $file->storeAs('uploads', $filename, 'public');
                        
            $upload = new FileUpload();
            $upload->name = $request->title;
            $upload->path = $path;            
            $upload->save();
                        
            return redirect()->route('document.all')->with('success', 'Fichier bien enregistré');
        }

        return view('admin.documents.upload');
    }

    public function downloadFile(FileUpload $file) {

        if(!$file)
            return redirect()->back()->with('error', 'Fichier introuvable');
        
        return response()->download(public_path('storage/'.$file->path));

    }
}
