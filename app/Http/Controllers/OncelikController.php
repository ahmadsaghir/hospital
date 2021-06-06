<?php

namespace App\Http\Controllers;

use App\Oncelik;
use App\Vizite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OncelikController extends Controller
{
    public function index()
    {
        $oncelikler  = Oncelik::paginate(8);
        return view('oncelik.index',['oncelikler'=>$oncelikler]);
    }
    public function show($oncelik)
    {
        $oncelik = Oncelik::find($oncelik);

//        return response()->json($oncelik);
        return view('oncelik.show',['oncelik'=>$oncelik]);
    }
    public function create()
    {
        return view('oncelik.create');
    }
    public function store()
    {
        Oncelik::create($this->validateOncelik());
        return redirect('/otomasyon/oncelikler');
    }
    public function edit(Oncelik $oncelik)
    {
        return view('oncelik.edit',compact('oncelik'));
    }
    public function update(Oncelik $oncelik)
    {
        $oncelik->update($this->validateOncelik());
        return redirect($oncelik->path());
    }
    public function destroy(Oncelik $oncelik)
    {
        $vizite = DB::table('vizites')->where('oncelikID','=',$oncelik->id);
        $vizite->delete();
        $oncelik->delete();
        return redirect('/otomasyon/oncelikler');
    }
    protected function validateOncelik()
    {
        return request()->validate([
            'oncelikAd' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $oncelikler = Oncelik::query()
            ->where('oncelikAd', 'LIKE', "%{$search}%")
            ->get();
        return view('oncelik.search', compact('oncelikler'),compact('search'))
            ->with('query',\request('search'));
    }
}
