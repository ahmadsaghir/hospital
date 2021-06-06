<?php

namespace App\Http\Controllers;

use App\Hasta;
use App\HastaTipi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HastaTipiController extends Controller
{
    public function index()
    {

        $hastaTipleri  = HastaTipi::paginate(8);
        return view('hastaTipi.index',['hastaTipleri'=>$hastaTipleri]);
    }
    public function show($hastaTipi)
    {
        $hastalar = Hasta::All()->where('hastaTipiID','=',$hastaTipi);

//        return response()->json($hastalar);
        return view('hastaTipi.show', ['hastalar'=>$hastalar]);
    }
    public function create()
    {
        return view('hastaTipi.create');
    }
    public function store()
    {
        HastaTipi::create($this->validateHastaTipi());
        return redirect('/otomasyon/hastaTipleri');
    }
    public function edit(hastaTipi $hastaTipi)
    {
        return view('hastaTipi.edit',compact('hastaTipi'));
    }
    public function update(HastaTipi $hastaTipi)
    {
        $hastaTipi->update($this->validateHastaTipi());
        return redirect($hastaTipi->path());
    }
    public function destroy(HastaTipi $hastaTipi)
    {
        $hasta = DB::table('hastas')->where('hastaTipiID','=',$hastaTipi->id);
        $hasta->delete();
        $hastaTipi->delete();
        return redirect('/otomasyon/hastaTipleri');
    }
    protected function validateHastaTipi()
    {
        return request()->validate([
            'hastaTipiAd' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $hastaTipleri = HastaTipi::query()
            ->where('hastaTipiAd', 'LIKE', "%{$search}%")
            ->get();
        return view('hastaTipi.search', compact('hastaTipleri'),compact('search'))
            ->with('query',\request('search'));
    }
}
