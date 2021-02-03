<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Result;
    //  public $category_id= new request;
    
class ArticlesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index(Request $request)
    {
        
        $articale=Article::orderBy('id','desc')->get();
        $this->glob_cat_id = $request->input('catId');
        //   glob_cat_id
        return view('admin.article_list',['cat'=>$this->glob_cat_id])->with('arte',$articale);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allart=Article::select('id','title')->where('is_active',1)->get();
        return view('admin.article_add')->with('allart',$allart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  echo 'zxcsadasdas'.$glob_cat_id;
        $is_active=$request->has('is_active')?1:0;
        $newart=new Article();
        $newart->title=$request->input('title');
        $newart->content=$request->input('content');
        $newart->cat_id=$request->input('cat_id');
        $newart->is_active=$is_active;
        $result=$newart->save();
        if($result>0)
        return redirect()->route('articles.index')->with('message', 'category addes successful '.$result);
        return redirect()->route('articles.index')->with('error', 'category addes successful '.$result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
