<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();

        //ANDIAMO A PRENDERE IL SINGOLO APPARTAMENTO
        //$apartment = Apartment::where('apartment_id', $apartmentId)->get();

        return view('admin.apartments.index', compact("apartments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartmentRequest $request)
    {
        $validatedData = $request->validated();

        // DA RIVEDERE LO SLUG
        //$validatedData['slug'] = Str::slug($validatedData['name']);

        // Verifica se il campo 'photo' è stato fornito
        if ($request->hasFile('photo')) {
            $validatedData = array_merge($request->validated(), [
                // 'photo' => $request->file('photo')->store('path_to_your_upload_directory'),
            ]);
        } else {
            // Se 'photo' non è stato fornito, impostalo su null
            $validatedData = array_merge($request->validated(), ['photo' => 'no photo']);
        }

        $apartment = Apartment::create($validatedData);
        return redirect()->route('apartments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment = Apartment::find($id);

        if (!$apartment) {
            return redirect()->route('apartments.index')->with('error', 'Appartamento non trovato');
        }
    
        return view('admin.apartments.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment = Apartment::find($id);

        if (!$apartment) {
            return redirect()->route('apartments.index')->with('error', 'Appartamento non trovato');
        }
    
        return view('admin.apartments.edit', compact('apartment'));
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
        $apartment = Apartment::find($id);

        if (!$apartment) {
            return redirect()->route('apartments.index')->with('error', 'Appartamento non trovato');
        }
    
        // Valida e aggiorna i dati dell'appartamento
        $apartment->update($request->all());
    
        return redirect()->route('apartments.index')->with('success', 'Appartamento aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartment = Apartment::find($id);
        if (!$apartment) {
            return redirect()->route('apartments.index')->with('error', 'Appartamento non trovato');
        }
        $apartment->delete();
        return redirect()->route('apartments.index')->with('success', 'Appartamento eliminato con successo');

    }
}
