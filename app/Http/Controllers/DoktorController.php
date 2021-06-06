<?php

namespace App\Http\Controllers;

use App\Doktor;
use App\Unvan;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $doktorlar  = Doktor::paginate(8);
        return view('doktor.index',['doktorlar'=>$doktorlar])
            ->with('unvanlar',Unvan::all());
    }
    public function show($doktor)
    {
        $doktor = Doktor::with(['unvan'=>function($q) {
            $q->select('unvanAd','id');
        }])->find($doktor);
        return view('doktor.show', ['doktor'=>$doktor]);
    }
    public function create()
    {
        return view('doktor.create')
            ->with('unvanlar',Unvan::all());
    }
    public function store()
    {
        Doktor::create($this->validateDoktor());
        return redirect('/otomasyon/doktorlar');
    }
    public function edit(Doktor $doktor)
    {
        return view('doktor.edit',compact('doktor'))
            ->with('unvanlar',Unvan::all());
    }
    public function update(Doktor $doktor)
    {
        $doktor->update($this->validateDoktor());
        return redirect($doktor->path());
    }
    public function destroy(Doktor $doktor)
    {
        $doktor->delete();
        return redirect('/otomasyon/doktorlar');
    }
    protected function validateDoktor()
    {
        return request()->validate([
            'doktorTc' => 'required',
            'doktorTel' => 'required',
            'doktorAd' => 'required',
            'doktorSad' => 'required',
            'doktorAdres' => 'required',
            'email' => 'required',
            'unvanID' => 'required'


        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $doktorlar = Doktor::query()
            ->where('doktorTc', 'LIKE', "%{$search}%")
            ->orWhere('doktorAd', 'LIKE', "%{$search}%")
            ->get();
        return view('doktor.search', compact('doktorlar'),compact('search'))
            ->with('query',\request('search'));
    }
}
