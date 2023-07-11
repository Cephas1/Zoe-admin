<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all()->desc()->load('client', 'voyage', 'user', 'type_reservation');

        return view('admin.reservations.index', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTraveler(Request $request)
    {

        $id_voyage;
        $voyage;

        $data_client = [
            'name' => $request->name,
            'firstname' => $request->firstname,
            'adresse' => $request->address,
            'sexe' => $request->sexe,
            'age' => $request->age,
        ];

        $client = Client::create($data_client);

        $data_voyage = [
            'ville_d' => $request->ville_d,
            'ville_a' => $request->ville_a,
            'agence_d' => $request->agence_d,
            'agence_a' => $request->agence_a,
            'code' => Ville::where('id', $request->ville_d)->get()->first().'-'.Ville::where('id', $request->ville_a)->get()->first()
        ];

        if($voyage = Voyage::where('code', $data_voyage['code'])->get()->first()){
            $id_voyage = $voyage->id;
        }else{
            $voyage = Voyage::create($data_voyage);
        }

        $data_reservation = [
            'client_id' => $client->id,
            'voyage_id' => ($id_voyage)? $id_voyage : $voyage->id,
            //$user_id = Auth::user()->id;
            "user_id" => 01,
            'type_reservation_id' => $request->type_reservation,
            'code' => now().'-resv-'.$data_voyage['code'],
            'montant' => $request->montant
        ];


        $reservations = Reservation::create($data_reservation);

        return redirect()->back()->with(compact('reservations'));
    }


    public function storeFreight(Request $request)
    {

        $id_voyage;
        $voyage;

        $data_client = [
            'name' => $request->name,
            'firstname' => $request->firstname,
            'adresse' => $request->address,
            'sexe' => $request->sexe,
            'age' => $request->age,
        ];

        $client = Client::create($data_client);


        $data_destinataire = [
            'name' => $request->name,
            'firstname' => $request->firstname,
            'adresse' => $request->address,
            'sexe' => $request->sexe,
            'age' => $request->age,
        ];

        $destinataire = Destinataire::create($data_destinataire);


        $data_voyage = [
            'ville_d' => $request->ville_d,
            'ville_a' => $request->ville_a,
            'agence_d' => $request->agence_d,
            'agence_a' => $request->agence_a,
            'code' => Ville::where('id', $request->ville_d)->get()->first().'-'.Ville::where('id', $request->ville_a)->get()->first()
        ];

        if($voyage = Voyage::where('code', $data_voyage['code'])->get()->first()){
            $id_voyage = $voyage->id;
        }else{
            $voyage = Voyage::create($data_voyage);
        }

        $data_reservation = [
            'client_id' => $destinataire->id,
            'destinataire_id' => $client->id,
            'voyage_id' => ($id_voyage)? $id_voyage : $voyage->id,
            //$user_id = Auth::user()->id;
            "user_id" => 01,
            'type_reservation_id' => $request->type_reservation,
            'code' => now().'-resv-'.$data_voyage['code'],
            'montant' => $request->montant
        ];


        $reservations = Reservation::create($data_reservation);

        return redirect()->back()->with(compact('reservations'));
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
}
