<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Video;
use App\VideoCategory;
use App\VideoCategoryCollection;
use App\FavoriteVideo;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
        $videos = NULL;
        $rawVideos = NULL;
        $categories = NULL;
        $currentCategory = NULL;
        $categories = VideoCategory::all();
        $favVideosQuery = FavoriteVideo::where('user_id', $userId)->get();
        $favVideosJson = json_decode(json_encode($favVideosQuery), true);
        $favVideos = array_column($favVideosJson, 'video_id');

        if ($request->has('category')) {
            $categoryId = $request->query('category');

            $sqlQuery = DB::table('videos')
                        ->select(
                            'videos.id as video_id',
                            'videos.title as video_title',
                            'videos.video_url as video_url',
                            'videos.thumbnail as video_thumbnail',
                            'videos.description as video_description',
                            'video_categories.id as category_id',
                            'video_categories.name as category_name',
                            // 'favorite_videos.id as favorite_video_id',
                        )
                        ->join('video_category_collections', 'videos.id', '=', 'video_category_collections.video_id')
                        ->join('video_categories', 'video_categories.id', '=', 'video_category_collections.video_category_id')
                        // ->leftJoin('favorite_videos', 'favorite_videos.video_id', '=', 'videos.id')
                        // ->where('favorite_videos.user_id', $userId)
                        // ->orWhereNull('favorite_videos.user_id')
                        ->where('video_categories.id', $categoryId)
                        // ->get()
                        ->paginate(12);

            $rawVideos = $sqlQuery;
            $videos = json_decode(json_encode($sqlQuery), true);
            // $categories = array_column($videos["data"], 'category_name', 'category_id');
            $currentCategory = $categoryId;
        } else {
            // $videos = Video::all();
            $sqlQuery = DB::table('videos')
                    ->select(
                        'videos.id as video_id',
                        'videos.title as video_title',
                        'videos.video_url as video_url',
                        'videos.thumbnail as video_thumbnail',
                        'videos.description as video_description',
                        'video_categories.id as category_id',
                        'video_categories.name as category_name',
                        // 'favorite_videos.id as favorite_video_id',
                    )
                    ->leftJoin('video_category_collections', 'videos.id', '=', 'video_category_collections.video_id')
                    ->leftJoin('video_categories', 'video_categories.id', '=', 'video_category_collections.video_category_id')
                    // ->leftJoin('favorite_videos', 'favorite_videos.video_id', '=', 'videos.id')
                    // ->where('favorite_videos.user_id', $userId)
                    // ->orWhereNull('favorite_videos.user_id')
                    // ->get()
                    ->paginate(12);
            $rawVideos = $sqlQuery;
            $videos = json_decode(json_encode($sqlQuery), true);
            // $categories = array_column($videos["data"], 'category_name', 'category_id');
        }

        // $paginator = $this->getPaginator($request, $videos);
        return view('videos', [
            'type' => 'all',
            'videos' => $videos["data"],
            'rawVideos' => $rawVideos,
            'favVideos' => $favVideos,
            'categories' => $categories,
            'currentCategory' => $currentCategory,
        ]);
    }

    private function getPaginator(Request $request, $items)
    {
        $total = count($items); // total count of the set, this is necessary so the paginator will know the total pages to display
        $page = $request->page ? $request->page : 1; // get current page from the request, first page is null
        $perPage = 9; // how many items you want to display per page?
        $offset = ($page - 1) * $perPage; // get the offset, how many items need to be "skipped" on this page

        $items = array_slice($items, $offset, $perPage); // the array that we actually pass to the paginator is sliced

        return new Paginator($items, $total, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
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
     * @param  \App\Video  $videoId
     * @return \Illuminate\Http\Response
     */
    public function show($videoId, Request $request)
    {
        if ($request->has('like')) {
            $userId = Auth::id();
            $like = $request->query('like');

            if ($like === "0") {
                $favVideo = new FavoriteVideo;

                $favVideo->user_id = $userId;
                $favVideo->video_id = $videoId;

                $favVideo->save();
            } else if ($like === "1") {
                $video = Video::find($videoId);
                $video->delete();
            }

            return Redirect::back();
        }

        $video = Video::find($videoId);
        return view('video', ['video' => $video]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
