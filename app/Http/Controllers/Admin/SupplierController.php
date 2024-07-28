<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    const PARTH_VIEW = 'admin.suppliers.';
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Supplier::query()->latest('id')->paginate(5);

        return view(self::PARTH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PARTH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supplier::query()->create($request->all());
        return redirect()->route('admin.suppliers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Supplier::query()->findOrFail($id);

        return view(self::PARTH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Supplier::query()->findOrFail($id);

        return view(self::PARTH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Supplier::query()->findOrFail($id);
        $model->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Supplier::query()->findOrFail($id);

        $model->delete();

        return back();
    }
}
