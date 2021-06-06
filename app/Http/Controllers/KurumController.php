<?php

namespace App\Http\Controllers;

use App\Hasta;
use App\Kurum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurumController extends Controller
{
    public function index()
    {
        $kurumlar  = Kurum::paginate(8);
        return view('kurum.index',['kurumlar'=>$kurumlar]);
    }
    public function show($kurum)
    {
        $hastalar = Hasta::All()->where('kurumID','=',$kurum);

//        return response()->json($hastalar);
        return view('kurum.show', ['hastalar'=>$hastalar]);
    }
    public function create()
    {
        return view('kurum.create');
    }
    public function store()
    {
        Kurum::create($this->validateKurum());
        return redirect('/otomasyon/kurumlar');
    }
    public function edit(Kurum $kurum)
    {
        return view('kurum.edit',compact('kurum'));
    }
    public function update(Kurum $kurum)
    {

        $kurum->update($this->validateKurum());
        return redirect($kurum->path());
    }
    public function destroy(Kurum $kurum)
    {
        $hasta = DB::table('hastas')->where('kurumID','=',$kurum->id);
        $hasta->delete();
        $kurum->delete();
        return redirect('/otomasyon/kurumlar');
    }
    protected function validateKurum()
    {
        return request()->validate([
            'kurumAd' => 'required',
            'aktif' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $kurumlar = Kurum::query()
            ->where('kurumAd', 'LIKE', "%{$search}%")
            ->get();
        return view('kurum.search', compact('kurumlar'),compact('search'))
            ->with('query',\request('search'));
    }
}
