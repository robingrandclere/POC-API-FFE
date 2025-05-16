<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LicenceResource;
use App\Models\Licence;
use Illuminate\Http\Request;

class LicenceController extends Controller
{
    public function listLicence(){
       return LicenceResource::collection(Licence::all());
    }

    public function infoLicence(string $id){
        return LicenceResource::collection(Licence::whereId($id)->get());
    }

    public function addLicence(Request $request){

        $licence = new Licence();
        $licence->type_licence = $request->type_licence;
        $licence->libelle_licence = $request->libelle_licence;
        $licence->date_deb_saison = $request->now();
        $licence->date_fin_saison = $request->now();
        $licence->description = $request->description;

        if ($licence->save()){
            return ['result'=>'Licence has been succeesfully added'];
        }
        return ['result'=>'Licence has not been added'];
    }

    public function updateLicence(Request $request){

       $licence = Licence::findOrFail($request->id);
       $licence->type_licence = $request->type_licence;
        $licence->libelle_licence = $request->libelle_licence;
        $licence->description = $request->description;

        if ($licence->update()){
            return ['result'=>'Licence has been succeesfully updated'];
        }
        return ['result'=>'Licence has not been updated'];

    }
    
    public function deleteLicence(string $id){
       
       $licence = \App\models\Licence::findOrFail($id);
       $licence->delete();
       return response()->json(null); 
    }
}
