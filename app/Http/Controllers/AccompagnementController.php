<?php

namespace App\Http\Controllers;

use App\Models\Accompagnement;
use Illuminate\Http\Request;

class AccompagnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
    {
         $this->middleware('permission:accompagnement-list|accompagnement-create|accompagnement-edit|accompagnement-delete', ['only' => ['index','show']]);
         $this->middleware('permission:accompagnement-create', ['only' => ['create','store']]);
         $this->middleware('permission:accompagnement-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:accompagnement-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
         $accompagnements = Accompagnement::latest()->paginate(5);
        return view('accompagnements.index',compact('accompagnements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('accompagnements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate([
            'nom_structure'=> 'required',
            'description'=> 'required',
            'partenariat_orange'=> 'required',
            'nom_prenom_directeur'=> 'required',
            'adresses'=> 'required',
            'coordonnee'=> 'required',
            'site_web'=> 'required',
            'email'=> 'required',
             'user_id'=>'User::find($id)',
            'commentaire' => 'required',
        ]);

        Accompagnement::create($request->all());

        return redirect()->route('accompagnements.index')
                        ->with('success',' Structure créée avec succés.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Accompagnement $accompagnement)
    {
        return view('accompagnements.show',compact('accompagnement'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Accompagnement $accompagnement)
    {
                return view('accompagnements.edit',compact('accompagnement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accompagnement $accompagnement)
    {
         request()->validate([
            'nom_structure'=> 'required',
            'description'=> 'required',
            'partenariat_orange'=> 'required',
            'nom_prenom_directeur'=> 'required',
            'adresses'=> 'required',
            'coordonnee'=> 'required',
            'site_web'=> 'required',
            'email'=> 'required',
            'commentaire' => 'required',
        ]);

        $accompagnement->update($request->all());

        return redirect()->route('accompagnements.index')
                        ->with('success','Structure mis à jour avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accompagnement $accompagnement)
    {
        $accompagnement->delete();

        return redirect()->route('accompagnements.index')
                        ->with('success','Structure supprimée');

    }
}
