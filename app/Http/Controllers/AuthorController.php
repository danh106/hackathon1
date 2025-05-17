<?php
namespace App\Http\Controllers;

use App\Models\Movie;

class AuthorController extends Controller{
    public function index()
    {
        $data=Movie::with(['tblmoviecategories.category','tblepisodes'])->get();
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
?>