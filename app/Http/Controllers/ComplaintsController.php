<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\ComplaintType;
use App\Complaint;
use App\Photo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewparams = [];
        $viewparams["locations"] = Location::all();
        $viewparams["departamentos"] = Location::where('location_type_id', 1)->get();
        $viewparams["municipios"] = Location::where('location_type_id', 2)->get();
        $viewparams["zonas"] = Location::where('location_type_id', 3)->get();
        $viewparams["complaint_types"] = ComplaintType::all();
        return view('complaints.create', $viewparams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        //dd($request->filename->clientExtension());
        $denuncia = new Complaint;
        $denuncia->uuid = Str::uuid();
        $denuncia->location_id = $request->zona;
        $denuncia->complaint_type_id = $request->complaint_type;
        $denuncia->details = $request->details;
        $denuncia->address = $request->address;
        $denuncia->save();

        
        //$storagePath = Storage::disk('s3')->put("uploads/".$imgUUID, $request->file('filename'));
        
        foreach ($request->filename as $updatedFile) {
            if ($request->hasFile('filename')) {
                $imgUUID = Str::uuid();
                $file = $updatedFile;                
                $filePath = 'uploads/' . $imgUUID . '.' . $updatedFile->clientExtension();
                
                $photo = new Photo;                    
                $photo->url = $filePath;
                $photo->uuid = $imgUUID;
                $photo->complaint_id = $denuncia->id;
                $photo->save();
                /*
                if (Storage::disk('s3')->put($filePath, file_get_contents($file))){
                    $photo = new Photo;
                    //$photo->url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/uploads/' . $imgUUID . '.' . $updatedFile->clientExtension();
			        $photo->url = $imgUUID.'+'.$updatedFile->clientExtension();
                    $photo->uuid = $imgUUID;
                    $photo->complaint_id = $denuncia->id;
                    $photo->save();
                }
                */

           }    
        }
        
        return view('complaints.store');
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

    public function all()
    {
        return Complaint::all();
    }
}
