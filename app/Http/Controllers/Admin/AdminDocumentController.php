<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\Publisher;
use App\Models\Language;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Document::with(['tbldocumentcategories.category','publisher','author','user'])->get();
        //echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        return view('Admin.Document.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author=Author::all();
        $publisher=Publisher::all();
        $category=Category::all();
        $language=Language::all();
        return view("Admin.Document.Create",compact('author','publisher','category','language'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $Document=$request->only(['title', 'authorid', 'publisherid', 'publishdate', 'pagecount', 'languageid', 'isactive', 'isnew', 'description', 'maindetail']);
            $Document['userid']=auth('admin')->user()->userid;
            if ($request->has('image')) {
                $filename = $request->image->hashName();
                $request->image->move(public_path('uploads/images/documents'),$filename);
                $Document['image']="/uploads/images/documents/".$filename;
            }
            if ($request->has('document')) {
                $filename = $request->document->hashName();
                $request->document->move(public_path('uploads/documents'),$filename);
                $Document['documentpath']="/uploads/documents/".$filename;
            }
            $data=Document::create($Document);
            foreach (($request->categoryid ?? []) as $item) {
                $Documentcategory=array();
                $Documentcategory['documentid']=$data->documentid;
                $Documentcategory['categoryid']=$item;
                DocumentCategory::create($Documentcategory);
            }
            return redirect("/admin/document");
        }catch(Exception){
            return redirect("/admin/document");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $Document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $author=Author::all();
        $publisher=Publisher::all();
        $category=Category::all();
        $language=Language::all();
        return view("Admin.Document.Edit",compact('author','publisher','category','document','language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        try{
            $data=$request->only(['title', 'authorid', 'publisherid', 'publishdate', 'pagecount', 'languageid', 'image', 'isactive', 'isnew', 'description', 'maindetail']);
            if ($request->has('image')) {
                if (File::exists(public_path($document->image))) {
                    File::delete(public_path($document->image));
                }
                $filename = $request->image->hashName();
                $request->image->move(public_path('uploads/images/documents'),$filename);
                $data['image']="/uploads/images/documents/".$filename;
            }
            if ($request->has('document')) {
                if (File::exists(public_path($document->documentpath))) {
                    File::delete(public_path($document->documentpath));
                }
                $filename = $request->document->hashName();
                $request->document->move(public_path('uploads/documents'),$filename);
                $data['documentpath']="/uploads/documents/".$filename;
            }
            if($document->tblDocumentcategories->count()!=0){
                DocumentCategory::where('documentid',$document->documentid)->delete();
            }
            foreach (($request->categoryid ?? []) as $item) {
                $Documentcategory=array();
                $Documentcategory['documentid']=$document->documentid;
                $Documentcategory['categoryid']=$item;
                DocumentCategory::create($Documentcategory);
            }
            $document->update($data);
            return redirect("/admin/document");
        }catch(Exception){
            return redirect("/admin/document");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        try{
            if($document->tblDocumentcategories->count()!=0){
                DocumentCategory::where('documentid',$document->documentid)->delete();
            }
            $document->delete();
            return redirect("/admin/document");
        }catch(Exception){
            return redirect("/admin/document");
        }
    }
    public function isactive(Document $document)
    {
        $document->isactive=!$document->isactive;
        $document->save();
        return redirect("/admin/document");
    }
}
