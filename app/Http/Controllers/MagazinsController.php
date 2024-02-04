<?php

namespace App\Http\Controllers;

use App\Models\Magazins;
use Illuminate\Http\Request;
//use Illuminate\App\Models\Magazin;
//use App\Http\Requests\StoreMagazinsRequest;
//use App\Http\Requests\UpdateMagazinsRequest;

class MagazinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazins = Magazins::all();
        //dd($magazins);
        return view('admin-altrazin-views.magazins', ['magazins' => $magazins]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            'name' => $request->name,
            'description' => $request->description
        ];

        $magazin = Magazins::create($data);

        if($magazin){
            return redirect()->back()->with('success', 'Le magasin '.$magazin->name.' a été créé avec succès !');
        }else{
            return redirect()->back()->with('error', 'Le magasin '.$request->name.' n\'a pas été créé, merci de réessayer !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Magazins $magazins)
    {
        return view('_magazins_show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(Request $magazins, int $id)
    {
        $magazin = Magazin::find($id);

        $data=[
            'name' => $request->name,
            'description' => $request->description
        ];

        if($magazin->update($data)){

            return redirect()->back()->with('success', 'Le magasin '.$magazin->name.' a été modifié avec succès !');
        }else{

            return redirect()->back()->with('error', 'Le magasin '.$magazin->name.' n\'a pas été modifié, merci de réessayer !');
        }
    }*/
    public function edit(Request $request, int $id)
    {
        $magazin = Magazins::find($id);

        if(!$magazin){
            return redirect()->back()->with('error', 'Le magasin avec spécifié n\'existe pas.');
        }

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ];

        if($magazin->update($data)){
            return redirect()->back()->with('success', 'Le magasin '.$request->name.' a été modifié avec succès !');
        }else{
            return redirect()->back()->with('error', 'Le magasin '.$request->name.' n\'a pas été modifié, merci de réessayer !');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMagazinsRequest $request, Magazins $magazins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magazins $magazins)
    {
        $destroy = Magazin::delete($magazins->id);

        if($destroy){return true;}else{return false;}
    }
}
