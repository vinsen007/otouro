<?php

namespace App\Http\Controllers;

use App\Category;
use App\Destinations;
use App\Tag;
use App\Blog;
use App\RecentPost;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $search = request()->query('search');
        if (request()->query('search')) {
            $destinations = Destinations::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        } else {
            $destinations = Destinations::simplePaginate(3);
        }

        return view('welcome')
            ->with('destinations', $destinations)
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('recent_post', RecentPost::all());
    }


    public function about()
    {
        return view('about')->with('categories', Category::all())
        ->with('tags', Tag::all());
    }
    public function blogSingle($id)
    {
        $post = RecentPost::where('id',$id)->first();
        $rand_post = RecentPost::inRandomOrder()->first();
        return view('blog-single', compact('post','rand_post'))
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('recent_post', RecentPost::all());
    }

    public function packages()
    {
        return view('packages')
            ->with('destinations', Destinations::paginate(4))
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }
    public function blog()
    {
        return view('blog')
            ->with('blogs', Blog::paginate(2))
            ->with('tags', Tag::all())
            ->with('categories', Category::all());
    }
    public function contact()
    {
        return view('contact')
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }
    public function destinationPlace($id)
    {
        $destination = Destinations::where('id',$id)->with('tags','category')->first();
        $rand_destination = Destinations::with('tags', 'category')->inRandomOrder()->first();
// return $rand_destination;
        return view('destination_place', compact('destination','rand_destination'))->with('destinations', Destinations::all())->with('tags', Tag::all())->with('categories', Category::all());;
        // return view('Bali')->with('destinations', Destinations::all())->with('tags', Tag::all())->with('categories', Category::all());
    }

    public function cart($id)
    {
        $data = Destinations::where('id',$id)->with('tags','category')->first();
        return view('cart', compact('data'))->with('destinations', Destinations::all())->with('tags', Tag::all())->with('categories', Category::all());;
    }

    public function checkoutNew($id,$cartValue)
    {
            $des = Destinations::where('id',$id)->with('tags','category')->first();
            return view('checkoutNew', compact('des','cartValue'))->with('tags', Tag::all())->with('categories', Category::all());;
    }
    //    public function checkout()
    // {
    //         return view('checkout')
    //     ->with('destinations', Destinations::first());
    // }

     public function stripe(Request $request)
    {
        return view('stripe')
        ->with('destinations', Destinations::first());
    }


}
