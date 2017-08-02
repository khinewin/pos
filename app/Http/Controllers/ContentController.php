<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Content;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function getCategories(){
        $cats=Category::OrderBy('id', 'desc')->paginate('10');
        return view ('content.categories')->with(['cats'=>$cats]);
    }
    public function postNewCategory(Request $request){
        $this->validate($request,[
           'category_name'=>'required|unique:categories'
        ]);
        $cat=new Category();
        $cat->category_name=$request['category_name'];
        $cat->save();
        return redirect()->back()->with('info', 'The category have been created.');
    }
    public function postDeleteCategory(Request $request){
        $id=$request['id'];
        $cat=Category::Where('id', $id)->first();
        $cat->delete();
        return redirect()->route('categories')->with('info','The category have been deleted.');
    }
    public function getContents(){
        $cts=Content::OrderBy('id', 'desc')->paginate('10');
        $cats=Category::all();
        return view ('content.contents')->with(['cats'=>$cats])->with(['cts'=>$cts]);
    }
    public function postNewContent(Request $request){
        $this->validate($request,[
           'content_cover'=>'required|image|mimes:jpeg,jpg,png',
            'content_name'=>'required:unique:contents',
            'content_price'=>'required',
            'category'=>'required'
        ]);
        $unique_code=uniqid();
        $content_cover_file=$request->file('content_cover');
        $content_cover=$request['content_name'].$unique_code.'.'.$request->file('content_cover')->getClientOriginalExtension();
        $ct=new Content();
        $ct->content_name=$request['content_name'];
        $ct->content_price=$request['content_price'];
        $ct->category_id=$request['category'];
        $ct->content_cover=$content_cover;
        $ct->save();

        Storage::disk('local')->put($content_cover, File::get($content_cover_file));
        return redirect()->back()->with('info','The new content have been saved.');


    }
    public function postDeleteContent(Request $request){
        $id=$request['id'];
        $ct=Content::where('id', $id)->first();
        $ct->delete();
        Storage::delete($ct->content_cover);
        return redirect()->back()->with('info', 'The content have been deleted.');
    }
    public function postUpdateContent(Request $request){
        $id=$request['id'];
        $ct=Content::Where('id', $id)->first();
        if($request->file('content_cover')){
            Storage::delete($ct->content_cover);

            $content_cover=$request['content_name'].uniqid().'.'.$request->file('content_cover')->getClientOriginalExtension();
            $content_cover_file=$request->file('content_cover');
            $ct->content_name=$request['content_name'];
            $ct->content_price=$request['content_price'];
            $ct->category_id=$request['category'];
            $ct->content_cover=$content_cover;
            $ct->update();
            Storage::disk('local')->put($content_cover, File::get($content_cover_file));


        }else{
            $ct->content_name=$request['content_name'];
            $ct->content_price=$request['content_price'];
            $ct->category_id=$request['category'];
            $ct->update();
        }
        return redirect()->back()->with('info', 'The content have been updated.');
    }
}
