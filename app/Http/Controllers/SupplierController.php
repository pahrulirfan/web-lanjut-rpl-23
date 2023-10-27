<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Supplier::all();
        return view("supplier.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_pt" => "required",
            "nama_ketua" => "required",
            "nomor_kontak" => "required",
            "alamat" => "required",
        ]);

        Supplier::create($request->all());
        return redirect()->route("supplier.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view("supplier.edit", compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            "nama_pt" => "required",
            "nama_ketua" => "required",
            "nomor_kontak" => "required",
            "alamat" => "required",
        ]);
        $supplier->update($request->all());
        return to_route("supplier.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return to_route("supplier.index")->with("success", "Data berhasil disimpan");
    }
}
