<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Image;

class UserCategoryController extends Controller
{
    protected $path_to_view = 'admin.pages.';

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
    public function show($id)
    {
        $this->limit = config('app.limit');
        $category = Category::findOrFail($id);
        $posts = $category->posts()->paginate($this->limit);
        $img_posts = Image::where('imageable_type', 'App\Models\Post')->get();

        return view($this->path_to_view . 'detailSubCategory', compact(['posts', 'img_posts']));
    }

    public function showCategory($parent_id)
    {
        $this->limit = config('app.limit');
        $categories = Category::where('parent_id', '=', $parent_id)->get('id'); 
        $items = array();
        foreach($categories as $category) {
            $items[] = $category['id'];
        }
        $posts = Post::whereIn('category_id', $items)->orderBy('created_at', 'DESC')->paginate($this->limit);
        $img_posts = Image::where('imageable_type', 'App\Models\Post')->get();
        $parent_name = Category::where('id', '=', $parent_id)->firstOrFail()['name'];

        return view($this->path_to_view . 'detailCategory', compact(['posts', 'img_posts', 'parent_name']));
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
