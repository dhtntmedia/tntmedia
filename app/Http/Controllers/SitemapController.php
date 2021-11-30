<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{

    protected $cacheTime;
    public function __construct()
    {
        $setting = Setting::where('name', 'sitemap_cache')->first();
        $this->cacheTime = (int)$setting->body;
    }

    public function index()
    {
        $album = Album::published()->orderBy('published_at', 'desc')->first();
        $image = Image::public()->orderBy('created_at', 'desc')->first();
        $user = User::orderBy('created_at', 'desc')->first();
        $tag = Tag::orderBy('created_at', 'desc')->first();

        return response()->view('sitemap.index', [
            'album' => $album,
            'image' => $image,
            'user' => $user,
            'tag' => $tag,
        ])->header('Content-Type', 'text/xml');
    }

    public function albums()
    {
        $albums = Cache::remember('sitemap-albums', $this->cacheTime,  function() {
            return Album::published()->with('images')->orderBy('published_at', 'desc')->limit(50000)->get();
        });

        return response()->view('sitemap.albums', [
            'albums' => $albums,
        ])->header('Content-Type', 'text/xml');
    }

    public function images()
    {
        $images = Cache::remember('sitemap-images', $this->cacheTime,  function() {
            return Image::public()->orderBy('created_at', 'desc')->limit(50000)->get();
        });

        return response()->view('sitemap.images', [
            'images' => $images,
        ])->header('Content-Type', 'text/xml');
    }

    public function users()
    {
        $users = Cache::remember('sitemap-users', $this->cacheTime,  function() {
            return User::orderBy('created_at', 'desc')->limit(50000)->get();
        });

        return response()->view('sitemap.users', [
            'users' => $users,
        ])->header('Content-Type', 'text/xml');
    }

    public function tags()
    {
        $tags = Cache::remember('sitemap-users', $this->cacheTime,  function() {
            return Tag::orderBy('created_at', 'desc')->get();
        });

        return response()->view('sitemap.tags', [
            'tags' => $tags,
        ])->header('Content-Type', 'text/xml');
    }

}