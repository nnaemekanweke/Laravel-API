<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PersonController extends Controller
{

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /**
     * @param Person $person
     * @return PersonResource
     */

    public function store(Request $request)
    {
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',

            ]);

        $person = Person::create($request->all());

        return new PersonResource($person);
    }

    public function update(Person $person, Request $request): PersonResource
    {
       // dd($request->all());

        $person->update($request->all());

        return new PersonResource($person);
    }


    public function show(Person $person): PersonResource
     {
     	//dd($person);
    	return new PersonResource($person);
    }


   public function destroy(person $person)
   {
        $person->delete();
        return response()->json();
   }

}

