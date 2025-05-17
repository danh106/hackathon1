<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Document;
use App\Models\DocumentCategory;

class DocumentController extends Controller{
    public function detail($alias,Document $document)
    {
        $categoryid=DocumentCategory::select('categoryid')->where('documentid','=',$document->documentid)->get();
        $documentrelated=DocumentCategory::with(['document'])->where('documentid','!=',$document->documentid)->whereIn('categoryid', $categoryid)->get();
        return view("Document.detail",compact('document','documentrelated'));
    }
     public function viewpdf(Document $document)
    {
        $filePath = $document->documentpath;
        return view('Document.Viewpdf', compact('filePath'));
    }
}
?>