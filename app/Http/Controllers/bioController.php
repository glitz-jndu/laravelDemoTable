<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class bioController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('table', compact('persons'));
    }

    public function insert(){
        return view('createPerson');    
    }
    public function create()
    {
        return view('persons.create');
    }


    public function store(Request $req)
    {
       $req->validate([
        'name'=> 'required',
        'email'=> 'required',
        'phone'=> 'required',
       ]);

       Person::create($req->all());

       return redirect()->route('persons.index')
                        ->with('success','person created successfully.');
    }

    public function show($id)
    {
           $persons = Person::find($id);
           return view('persons.show', compact('persons'));
    }

    public function edit($id)
    {
        $persons = Person::find($id);
        return view('persons.edit',compact('persons','id'));
    }

    public function update($req)
    {
        $persons = Person::find($req);
        $persons->name = request('name');
        $persons->email = request('email');
        $persons->phone = request('phone');
        $persons->save();
                    $req->validate([
                        'name' => 'required',
                        'email'=> 'required',
                        'phone'=> 'required',
                    ]);
                $persons->update($persons->all());
            return redirect()->route('persons.index')
                             ->with('success','person update successfilly');
    }

    public function destroy($id){
        Person::find($id)->delete();
        return redirect()->route('persons.index')
                         ->with('success','person deleted successfilly');
    }


}


