<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\Comment;
use Illuminate\Http\Request;
use Exception;

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
    public function comment(Request $request)
    {
       try{
            $data=$request->only('documentid','detail');
            $data['userid']=auth()->user()->userid;
            comment::create( $data);
            $status=200;
            return json_encode($status, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       }catch(Exception){
            $status=500;
            return json_encode($status, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       }
    }
}
?>