<?php

namespace App\Http\Controllers;

use App\Doktor;
use App\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliklinikController extends Controller
{
    public function index()
    {
        $poliklinikler  = Poliklinik::paginate(3);
        return view('poliklinik.index',['poliklinikler'=>$poliklinikler])
            ->with('doktorlar',Doktor::all());
    }
    public function show($poliklinik)
    {
        $poliklinik = Poliklinik::with(['doktor'=>function($q) {
            $q->select('doktorAd','doktorSad','id');
        }])->find($poliklinik);

//      return response()->json($poliklinik);
        return view('poliklinik.show', ['poliklinik'=>$poliklinik]);


    }
    public function create()
    {
        return view('poliklinik.create')
            ->with('doktorlar',Doktor::all());
    }
    public function store()
    {
        Poliklinik::create($this->validatePoliklinik());
        return redirect('/otomasyon/poliklinikler');
    }
    public function edit(poliklinik $poliklinik)
    {
        return view('poliklinik.edit',compact('poliklinik'))
            ->with('doktorlar',Doktor::all());
    }
    public function update(poliklinik $poliklinik)
    {
        $poliklinik->update($this->validatePoliklinik());
        return redirect($poliklinik->path());
    }
    public function destroy(poliklinik $poliklinik)
    {
        $poliklinik->delete();
        return redirect('/otomasyon/poliklinikler');
    }
    protected function validatePoliklinik()
    {
        return request()->validate([
            'poliklinikAd' => 'required',
            'doktorID' => 'required',
            'aktif' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $poliklinikler = Poliklinik::query()
            ->where('poliklinikAd', 'LIKE', "%{$search}%")
            ->get();
        return view('poliklinik.search', compact('poliklinikler'),compact('search'))
            ->with('query',\request('search'));
    }
}
