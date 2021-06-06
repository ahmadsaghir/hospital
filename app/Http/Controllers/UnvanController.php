<?php

namespace App\Http\Controllers;

use App\Doktor;
use App\Unvan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnvanController extends Controller
{
    public function index()
    {
        $unvanlar  = Unvan::paginate(8);
        return view('unvan.index',['unvanlar'=>$unvanlar]);
    }
    public function show($unvan)
    {
        $doktorlar = Doktor::All()->where('unvanID','=',$unvan);

//        return response()->json($doktorlar);
        return view('unvan.show', ['doktorlar'=>$doktorlar]);
    }
    public function create()
    {
        return view('unvan.create');
    }
    public function store()
    {
        Unvan::create($this->validateUnvan());
        return redirect('/otomasyon/unvanlar');
    }
    public function edit(Unvan $unvan)
    {
        return view('unvan.edit',compact('unvan'));
    }
    public function update(Unvan $unvan)
    {
        $unvan->update($this->validateUnvan());
        return redirect($unvan->path());
    }
    public function destroy(Unvan $unvan)
    {
        $doktor = DB::table('doktors')->where('unvanID','=',$unvan->id);
        $doktor->delete();
        $unvan->delete();
        return redirect('/otomasyon/unvanlar');
    }
    protected function validateUnvan()
    {
        return request()->validate([
            'unvanAd' => 'required'
        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $unvanlar = Unvan::query()
            ->where('unvanAd', 'LIKE', "%{$search}%")
            ->get();
        return view('unvan.search', compact('unvanlar'),compact('search'))
            ->with('query',\request('search'));
    }
}
