<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financiere;

class FinanciereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      function __construct()
    {
         $this->middleware('permission:financiere-list|financiere-create|financiere-edit|financiere-delete', ['only' => ['index','show']]);
         $this->middleware('permission:financiere-create', ['only' => ['create','store']]);
         $this->middleware('permission:financiere-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:financiere-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
         $financiere = Financiere::latest()->paginate(5);
        return view('financieres.index',compact('financiere'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financieres.create');
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
            'commentaire' => 'required',
        ]);
    
        Financiere::create($request->all());
    
        return redirect()->route('financieres.index')
                        ->with('success',' Structure créée avec succés.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Financiere $financiere)
    {
        return view('financieres.show',compact('financiere'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit (Financiere $financiere)
    {
          return view('financieres.edit',compact('financiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financiere $financiere)
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
    
        $financiere->update($request->all());
    
        return redirect()->route('financieres.index')
                        ->with('success','Structure mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financiere $financiere)
    {
        $financiere->delete();
    
        return redirect()->route('financieres.index')
                        ->with('success','Structure supprimée');
   
    }
}
