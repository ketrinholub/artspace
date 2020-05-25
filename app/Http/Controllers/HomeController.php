<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blog;
use App\Video;
use App\VideoCategory;
use App\UserPainting;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $inspirations = UserPainting::with('user')
            ->leftJoin('users', 'user_paintings.user_id', '=', 'users.id')
            ->take(8)
            ->get(['users.name as user_name', 'user_paintings.image', 'user_paintings.user_id']);
        $blogs = Blog::all()->take(4);
        $videoCategories = VideoCategory::limit(6)->get();
        $videos = Video::limit(6)->get()->toArray();
        // dd($blog);
        $res = [
            'inspirations' => $inspirations,
            'videoCategories' => $videoCategories,
            'videos' => $videos,
            'blogs' => $blogs,
        ];

        return view('home', $res);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
