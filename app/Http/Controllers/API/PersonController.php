<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function listPersons() {
        $persons = Person::all();
        return response()->json([
            'status' => 'success',
            'message' => 'List of persons',
            'persons' => $persons
        ]);
    }

    public function storePerson(Request $request) {
        $person = new Person();
        $person->fill($request->all());
        $person->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Store person',
        ]);
    }

    public function updatePerson(Request $request) {
        $person = Person::find($request->get('person_id'));
        $person->fill($request->all());
        $person->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Update person',
        ]);
    }

    public function getPerson($id) {
        $person = Person::find($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Get person',
            'persons' => $person
        ]);
    }

    public function deletePerson($id) {
        $person = Person::find($id);
        $person->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Delete person',
        ]);
    }
}
