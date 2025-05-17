<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Document;

class HomeController extends Controller{
    public function index()
    {
        $data = Category::with('tbldocumentcategories.document')->get();
        $data->each(function ($category) {
            $category->setRelation('tbldocumentcategories', $category->tbldocumentcategories->take(12));
        });
        $newupdatedocument=Document::orderBy('updatedat','desc')->take(20)->get();
        $newdocument=Document::orderBy('updatedat','desc')->where('isnew','=',true)->take(20)->get();
        return view("Home.index",compact('data','newupdatedocument','newdocument'));
        // echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
?>