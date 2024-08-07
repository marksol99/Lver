<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function create()
    {
        return view("persons.create");
    }

    public function store(Request $request)

    {
        $request->validate([
            "personalId" => "required|integer|unique:persons",
            "firstName" => "required|string|max:100",
            "lastName" => "required|string|max:100",
            "dob" => "required|date",
            "phonenumber" => "required|string|max:15",
            "gender" => "nullable|in:mann,kvinne,annet",
            "email" => "required|email|unique:persons",
            "address" => "required|string|max:255",
            "postCode" => "required|integer",
            "place" => "required|string|max:255",
        ]);

        Person::create($request->all());
        
        //prøver å redirecte 
        return redirect()->route('person.create')->with('success', 'Personinfo sendt inn!'); 
    }
}
