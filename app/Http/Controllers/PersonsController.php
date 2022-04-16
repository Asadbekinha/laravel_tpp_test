<?php

namespace App\Http\Controllers;

use App\Domain\Persons\Models\Person;
use App\Domain\Persons\Resources\PersonsResource;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function getPersons(){
        return PersonsResource::collection(Person::all());
    }
}
