<?php

namespace App\Http\Controllers;

use App\Randevu;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    public function index()
    {
        $randevular  = Randevu::all();
        return view('randevu.index',['randevular'=>$randevular]);
    }
    public function show(Randevu $randevu)
    {
        $randevular = Randevu::all()->where('randevuID', '=', $randevu->id);

        return view('randevu.show', ['randevu'=>$randevu]);
    }
    public function create()
    {
        return view('randevu.create');
    }
    public function store()
    {
        Randevu::create($this->validateRandevu());
        return redirect('/Randevular');
    }
    public function edit(Randevu $randevu)
    {
        return view('randevu.edit',compact('randevu'));
    }
    public function update(Randevu $randevu)
    {
        $randevu->update($this->validateRandevu());
        return redirect($randevu->path());
    }
    public function destroy(Randevu $randevu)
    {
        $randevu->delete();
        return redirect()->back();
    }
    protected function validateRandevu()
    {
        return request()->validate([
            'hastaID' => 'required',
            'doktorID' => 'required',
            'poliklinikID' => 'required',
            'randevuTarihi' => 'required',

        ]);
    }
}
