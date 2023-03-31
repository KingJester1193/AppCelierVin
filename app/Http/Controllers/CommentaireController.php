<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cellier;
use App\Models\Bouteille;
use App\Models\Commentaire;
use App\Models\ListeBouteille;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class CommentaireController extends Controller{

    // public function create(Request $request){}



    public function store(Request $request){
        $comment = Commentaire::create([
            'commentaire'=>$request->commentaire,
            'user_id'=> Auth::user()->id,
            'bouteille_id'=> $request->bouteille_id
        ]);
        
      return response()->json(['data' => $comment,'success' => true, 'message' => 'Commentaire ajouté']);
   
    }


    // public function show(Cellier $cellier, Bouteille $bouteille ){}
    
    
    public function edit(  Cellier $cellier,Bouteille $bouteille){
   
    }


    public function update(Request $request, Bouteille $bouteille, Cellier $cellier){

    }



    public function destroy(Cellier $cellier,Bouteille $bouteille,){
        
    }


}