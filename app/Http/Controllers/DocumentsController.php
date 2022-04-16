<?php

namespace App\Http\Controllers;

use App\Domain\Documents\Models\Document;
use App\Domain\Documents\Resources\DocumentsResource;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function getDocuments(){
        return DocumentsResource::collection(Document::all());
    }
}
