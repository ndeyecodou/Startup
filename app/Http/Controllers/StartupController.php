<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Startup;


class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
    {
         $this->middleware('permission:startup-list|startup-create|startup-edit|startup-delete', ['only' => ['index','show']]);
         $this->middleware('permission:startup-create', ['only' => ['create','store']]);
         $this->middleware('permission:startup-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:startup-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $startup = Startup::latest()->paginate(5);
        return view('startups.index',compact('startup'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('startups.create');
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
             'nom_startup'=> 'required',
            'description'=> 'required',
            'partenariat_orange'=> 'required',
            'date_creation'=> 'required',
            'ceo_co_fondateur'=> 'required',
            'adresses'=> 'required',
            'coordonnee'=> 'required',
            'site_web'=> 'required',
            'email'=> 'required',
            'secteur_activites'=> 'required',
            'statut'=> 'required',
            'commentaire' => 'required',
        ]);
    
        Startup::create($request->all());
    
        return redirect()->route('startups.index')
                        ->with('success',' Startup créé avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
           return view('startups.show',compact('startup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        return view('startups.edit',compact('startup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        request()->validate([
             'nom_startup'=> 'required',
            'description'=> 'required',
            'partenariat_orange'=> 'required',
            'date_creation'=> 'required',
            'ceo_co_fondateur'=> 'required',
            'adresses'=> 'required',
            'coordonnee'=> 'required',
            'site_web'=> 'required',
            'email'=> 'required',
            'secteur_activites'=> 'required',
            'statut'=> 'required',
            'commentaire' => 'required',
    ]);
         $startup->update($request->all());

        return redirect()->route('startups.index')
                        ->with('success',' Startup créé avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
          $startup->delete();
    
        return redirect()->route('startups.index')
                        ->with('success','Structure supprimée');
    }
}
