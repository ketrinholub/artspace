<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserPainting;
use App\FavoriteVideo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // $favVideos = FavoriteVideo::where('user_id', '=', $user->id)->get();
        $favVideos = DB::table('videos')
                        ->select(
                            'videos.id as video_id',
                            'videos.title as video_title',
                            'videos.video_url as video_url',
                            'videos.thumbnail as video_thumbnail',
                            'videos.description as video_description',
                            // 'favorite_videos.id as favorite_video_id',
                        )
                        ->leftJoin('favorite_videos', 'favorite_videos.video_id', '=', 'videos.id')
                        ->where('favorite_videos.user_id', $user->id)
                        ->get();
        $userPaintings = UserPainting::where('user_id', '=', $user->id)->get();

        return view('profile', [
            'user' => $user,
            'favVideos' => $favVideos,
            'userPaintings' => $userPaintings,
        ]);
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
     * @param  \App\User $userId
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
