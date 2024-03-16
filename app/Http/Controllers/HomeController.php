<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Date;
use App\Models\Hijri;
use App\Models\UniqueVisitor;
use App\Models\User;
use App\Models\VisitorCount;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    // Backend View
    function dashboard(){
        $total = VisitorCount::count();
        $unique = UniqueVisitor::count();
        return view('dashboard',[
            'total'=>$total,
            'unique'=>$unique,
        ]);
    }

    function date(){
        $hijri = Hijri::find(1);
        $content1 = Date::find(1);
        //Shaowal Shareef
        $content2 = Date::find(2);
        //volume
        $volume = Volume::find(1);
        return view('admin.date',[
            'content1'=>$content1,
            'content2'=>$content2,
            'volume'=>$volume,
            'hijri'=>$hijri,
        ]);
    }

    function user(){
        $users = User::all();
        return view('admin.user', [
            'users'=>$users,
        ]);
    }



    // Frontend View
    function index(Request $request){

        // All Visitor
        $all_ip = $request->ip();
        VisitorCount::Create(['ip' => $all_ip]);

        // Unique Visitor
        $ip = $request->ip();
        UniqueVisitor::firstOrCreate(['ip' => $ip]);


        $hijri = Hijri::find(1);
        // 9th rwamadan Shareef
        $content1 = Date::find(1);
        //Shaowal Shareef
        $content2 = Date::find(2);
        //volume
        $volume = Volume::find(1);

        return view('frontend.index', [
            'content1'=>$content1,
            'content2'=>$content2,
            'volume'=>$volume,
            'hijri'=>$hijri,

        ]);
    }

    function works(){
        return view('frontend.works');
    }

    function about(){
        return view('frontend.about');
    }
    function contact(){
        return view('frontend.contact');
    }

    function category(){
        $categories = Category::all();
        return view('admin.category', [
            'categories'=>$categories,
        ]);
    }

    function post(){
        $categories = Category::all();
        return view('admin.post', [
            'categories'=>$categories,
        ]);
    }


    function audio(){

        return view('admin.audio');
    }



}
