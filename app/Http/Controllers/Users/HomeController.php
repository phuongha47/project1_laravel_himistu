<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
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
        //Categories with childern 
        $categories_with_children = Category::with('children')->whereNull('parent_id')->get();
        //Lastest news
        $latest_posts = Post::orderBy('created_at', 'desc')->take(10)->get();
        //World news
        $world_id = Category::where('parent_id', 1)->get();
        $items = array();
        foreach($world_id as $category) {
            $items[] = $category['id'];
        }
        $world_posts = Post::whereIn('category_id', $items)->orderBy('created_at', 'DESC')->get();
        //Business news
        $business_id = Category::where('parent_id', '=', '2')->get('id'); 
        $items = array();
        foreach($business_id as $category) {
            $items[] = $category['id'];
        }
        $business_posts = Post::whereIn('category_id', $items)->orderBy('created_at', 'DESC')->get();
        //Tech news
        $tech_id = Category::where('parent_id', 8)->get();
        $items = array();
        foreach($tech_id as $category) {
            $items[] = $category['id'];
        }
        $tech_posts = Post::whereIn('category_id', $items)->orderBy('created_at', 'DESC')->get();
        //Health news
        $health_id = Category::where('parent_id', 6)->get();
        $items = array();
        foreach($health_id as $category) {
            $items[] = $category['id'];
        }
        $health_posts = Post::whereIn('category_id', $items)->orderBy('created_at', 'DESC')->get();
        $img_posts = Image::where('imageable_type', 'App\Models\Post')->get();

        return view('welcome', compact(['latest_posts', 'world_posts', 'business_posts', 'tech_posts', 'img_posts', 'health_posts', 'categories_with_children', 'searchKeyWord']));
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
