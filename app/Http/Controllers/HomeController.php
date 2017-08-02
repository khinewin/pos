<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Category;
use Auth;

class HomeController extends Controller
{

    public function getIndex(){
        $cats=Category::all();
        $cts=Content::OrderBy('id', 'desc')->paginate('8');
        return view('welcome')->with(['cts'=>$cts])->with(['cats'=>$cats]);
    }
    public function getContentCover($file_name){
        $file=Storage::disk('local')->get($file_name);
        return new Response($file, 200);
    }
    public function getContentByCategory($category_name){
        $cats=Category::all();

        $category=Category::where('category_name', $category_name)->first();
        $cat_id=$category->id;
        $cts=Content::Where('category_id', $cat_id)->paginate('8');
        return view('welcome')->with(['cts'=>$cts])->with(['cats'=>$cats]);
    }
    public function getSearchContent(Request $request){
        $ct=$request['q'];
        if($ct) {
            $cats = Category::all();
            $cts = Content::where('content_name', 'LIKE', '%' . $ct . '%')->paginate('8');
            return view('welcome')->with(['cts' => $cts])->with(['cats' => $cats]);
        }else{
            return redirect()->back()->with('err', 'Please input the name you want to search.');
        }
    }
}
