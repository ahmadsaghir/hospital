<?php

namespace App\Http\Controllers;

use App\Hasta;
use App\HastaTipi;
use App\Kurum;
use App\Vizite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HastaController extends Controller
{
    public function index()
    {
        $hastalar  = Hasta::paginate(8);
        return view('hasta.index',['hastalar'=>$hastalar])
            ->with('kurumlar',Kurum::all())
            ->with('hastaTipleri',HastaTipi::all());
    }
    public function show($hasta)
    {
        $hasta = Hasta::find($hasta);

//        $hasta = DB::table('hastas')
//            ->join('kurums', 'hastas.kurumID', '=', 'kurums.id')
//            ->join('hasta_tipis', 'hastas.hastaTipiID', '=', 'hasta_tipis.id')
//            ->select('hastas.*', 'kurums.kurumAd','hasta_tipis.hastaTipiAd')
//            ->get();
//        return response()->json($hasta);
        return view('hasta.show', ['hasta'=>$hasta]);
    }
    public function create()
    {
        return view('hasta.create')
            ->with('kurumlar',Kurum::all())
            ->with('hastaTipleri',HastaTipi::all());
    }
    public function store()
    {
        Hasta::create($this->validateHasta());
        return redirect('/otomasyon/hastalar');
    }
    public function edit(Hasta $hasta)
    {
        return view('hasta.edit',compact('hasta'))
            ->with('kurumlar',Kurum::all())
            ->with('hastaTipleri',HastaTipi::all());
    }
    public function update(Hasta $hasta)
    {
        $hasta->update($this->validateHasta());
        return redirect($hasta->path());
    }
    public function destroy(Hasta $hasta)
    {
        $vizite = DB::table('vizites')->where('hastaID','=',$hasta->id);
        $vizite->delete();
        $hasta->delete();
        return redirect('/otomasyon/hastalar');
    }
    protected function validateHasta()
    {
        return request()->validate([
            'hastaTC' => 'required',
            'hastaTel' => 'required',
            'hastaAd' => 'required',
            'hastaSad' => 'required',
            'dogumTarihi' => 'required',
            'dogumYeri' => 'required',
            'cinsiyet' => 'required',
            'medeniHal' => 'required',
            'adres' => 'required',
            'kurumID' => 'required',
            'hastaTipiID' => 'required'

        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $hastalar = Hasta::query()
            ->where('hastaTC', 'LIKE', "%{$search}%")
            ->orWhere('hastaAd', 'LIKE', "%{$search}%")
            ->orWhere('hastaSad', 'LIKE', "%{$search}%")
            ->get();
        return view('hasta.search', compact('hastalar'),compact('search'))
            ->with('query',\request('search'));
    }
}
