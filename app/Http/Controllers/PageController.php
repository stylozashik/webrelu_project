<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Member;
use App\Models\Project;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //home page
    public function home(){
        $members = Member::all();
        $categories = Category::all();
        $c_projects = Project::all();
        return view('frontend.index',compact('members','categories','c_projects'));
    }

    //about page
    public function about(){
        return view('frontend.about');
    }

    //portfolio page
    public function portfolio(){
        $categories = DB::table('categories')->get()->all();
        $c_projects = DB::table('projects')->get()->all();
        //dd($c_projects);
        return view('frontend.portfolio' ,compact('categories' , 'c_projects'));
    }

    //team page
    public function team(){
        $members = Member::all();
        return view('frontend.team',compact('members'));
    }

    //Service page
    public function service(){
        return view('frontend.service');
    }

    //Contact Page
    public function contact(){
        return view('frontend.contact');
    }

    //Send Message
    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'phone' => 'required|max:50',
            'subject' => 'required|max:255',
            'message' => 'required|max:200',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Contact message send successfully');
        return redirect()->back();
    }
}
