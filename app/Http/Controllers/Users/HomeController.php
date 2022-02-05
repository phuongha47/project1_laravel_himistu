<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $path_to_view = 'admin.pages.';
    protected $limit;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $searchKeyWord = "";
        //Categories
        $categories = Category::where('parent_id', 0)->get();
        //Sub categories
        $categories_sub = DB::table('categories')->select('*')->where('parent_id', '>', '0')->get();
        //Posts
        $posts = Post::all();
        //Slides news
        $slide_posts = Post::whereIn('id', array(5, 6))->get();
        //Lastest news
        $latest_posts = Post::orderBy('created_at', 'desc')->take(10)->get();
        
        return view('welcome', compact(['posts', 'categories', 'categories_sub',
                                        'slide_posts', 'latest_posts', 'searchKeyWord']));
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
    public function search(Request $request)
    {
        $searchKeyWord = $request->input('search');
        $this->limit = config('app.limit');
        $posts = Post::where('title', 'LIKE', "%{$searchKeyWord}%")
            ->orWhere('body', 'LIKE', "%{$searchKeyWord}%")
            ->paginate($this->limit);
        
        return view($this->path_to_view . 'searchHome', compact('posts', 'searchKeyWord'));
    }
}
