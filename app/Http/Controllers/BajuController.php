<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baju = Baju::all();
        return View('baju.index', compact('baju'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('baju.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Baju::create([
            'nama_baju' => $request->nama_baju,
            'harga_baju' => $request->harga_baju
        ]);

        // return redirect()->route('baju.index');
        return redirect(route('baju.index'));
    }

    /**
     * Display the specified resource.
     */ 
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $baju = Baju::find($id);
        return view('baju.edit', compact('baju'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $baju = Baju::find($id);
        $baju->update([
            'nama_baju' => $request->nama_baju,
            'harga_baju' => $request->harga_baju,
        ]);

        return redirect()->route('baju.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $baju = Baju::find($id);
        $baju->delete();
        return redirect(route('baju.index'));

         
    }
    }

