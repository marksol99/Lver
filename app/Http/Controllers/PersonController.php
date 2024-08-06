<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function create()
    {
        return view("person.create");
    }
    public function store(Request $request)
    {
        $request->validate([
        "personalId"  => "required|integer|digits:11|unique:persons",
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

    return redirect()->back()->with("succsess", "Personinfo sendt inn!");
    
    }
}
