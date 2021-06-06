<?php

namespace App\Http\Controllers;

use App\Hasta;
use App\Oncelik;
use App\Poliklinik;
use App\Vizite;
use Illuminate\Http\Request;

class ViziteController extends Controller
{
    public function index()
    {
        $viziteler  = Vizite::all();
        return view('vizite.index',['viziteler'=>$viziteler])
            ->with('hastalar',Hasta::all())
            ->with('poliklinikler',Poliklinik::all())
            ->with('oncelikler',Oncelik::all());
    }
    public function show(Vizite $vizite)
    {
//        $viziteler = Vizite::all()->where('viziteID', '=', $vizite->id);
        $viziteler = Vizite::with(['poliklinik'=>function($q) {
            $q->select('poliklinikAd','id');
        }])->find($vizite);

//      return response()->json($viziteler);
        return view('vizite.show', ['vizite'=>$vizite]);
    }
    public function create()
    {
        return view('vizite.create')
            ->with('hastalar',Hasta::all())
            ->with('poliklinikler',Poliklinik::all())
            ->with('oncelikler',Oncelik::all());
    }
    public function store()
    {
        Vizite::create($this->validateVizite());
        return redirect('/otomasyon/viziteler');
    }
    public function edit(Vizite $vizite)
    {
        return view('vizite.edit',compact('vizite'))
            ->with('hastalar',Hasta::all())
            ->with('poliklinikler',Poliklinik::all())
            ->with('oncelikler',Oncelik::all());
    }
    public function update(Vizite $vizite)
    {
        $vizite->update($this->validateVizite());
        return redirect($vizite->path());
    }
    public function destroy(Vizite $vizite)
    {
        $vizite->delete();
        return redirect('/otomasyon/viziteler');
    }
    protected function validateVizite()
    {
        return request()->validate([
            'hastaID' => 'required',
            'poliklinikID' => 'required',
            'oncelikID' => 'required',
            'viziteTarihi' => 'required',
            'baslamaZamani' => 'required',
            'bitisZamani' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
//        $viziteler = Vizite::query()
//            ->where('hastaID', 'LIKE', "%{$search}%")
//            ->get();
        $viziteler = Vizite::whereHas('hasta', function ($query) use ($search) {
            $query->where('hastaTC', 'like', '%' . $search . '%');
        })->get();
        return view('vizite.search', compact('viziteler'),compact('search'))
            ->with('query',\request('search'));
    }
}
