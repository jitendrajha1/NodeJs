<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\UserProfile;
use Session;    
use Redirect;

class AdminController extends Controller
{
    /*
        @admin log In
        @Author: Jitendra
    */
    public function login(Request $request){
        if($request->isMethod('POST')){
            $this->validate($request,[
                'email' => 'required',
                'password' => 'required'
            ]);
            $email = $request->get('email');
            $password = $request->get('password');
            if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])){
                $userRole = trim(Auth::user()->roles[0]->title);
                if($userRole == 'admins'){
                    return redirect()->intended('/admin/dashboard');
                }
                else{
                    Session::flash('flash_message', 'Opp! Please contact to super admin');
                    return Redirect()->back();
                }
            }else{
                Session::flash('flash_message', 'Either email/password is wrong');
                return Redirect()->back();
            }
        }else{
            return view('admin.login');
        }
    }
    /*
        @admin Dashboard
        @Autjor: Jitendra
    */
    public function index(){
    	return view('admin.dashboard');
    }
    /*
        @Members Listings
        @Author: Jitendra
    */
    public function memberLists(){
    	return view('admin.members');
    }
    /*
        @Add Members
        @Author: Jitendra
    */
    public function addMembers(Request $request){
        if($request->isMethod('POST')){
            $this->validate($request,[
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'phone' => 'required',
                'branch' => 'required',
                'address' => 'required',
                'description' => 'required',
                'sex' => 'required',
                'year' => 'required'
            ]);
            $user = new User;
            $user->name = $request->get('first_name').' '.$request->get('last_name');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->status = 1;
            $roleId = 1;
            $user_profile = new UserProfile;
            $user_profile->mobile = $request->get('phone');
            $user_profile->branch = $request->get('branch');
            $user_profile->address = $request->get('address');
            $user_profile->description = $request->get('description');
            $user_profile->gender = $request->get('sex');
            $user_profile->year = $request->get('year');
            $user_profile->img = 'anc.png';
            if($user->save()){
                $user->roles()->attach($roleId);
                $user->profile()->save($user_profile);
                Session::flash('flash_message', 'Member Added Successfully!');
                return Redirect('/admin/members');
            }
        }else{
    	   return view('admin.add-members');
        }
    }
    /*
        @Event Listings
        @Author: Jitendra
    */
    public function eventLists(){
    	return view('admin.events');
    }
    /*
        @Add Events
        @Author: Jitendra
    */
    public function addEvents(){
    	return view('admin.add-events');
    }
    /*
        @Gallery Listings
        @Author: Jitendra
    */
    public function galleryLists(){
    	return view('admin.gallery');
    }
    /*
        @Add Images
        @Author: Jitendra
    */
    public function addImages(){
    	return view('admin.add-images');
    }
    /*
        @Blog Listings
        @Author: Jitendra
    */
    public function blogLists(){
    	return view('admin.blogs');
    }
    /*
        @Add Blogs
        @Author: Jitendra
    */
    public function addBlogs(){
    	return view('admin.add-blogs');
    }
    /*
        @News Listings
        @Author: Jitendra
    */
    public function newsLists(){
    	return view('admin.news');
    }
    /*
        @Add News
        @Author: Jitendra
    */
    public function addNews(){
    	return view('admin.add-news');
    }
    /*
        @Cms Pages Management
        @Author: Jitendra
    */
    public function cms(){
    	return view('admin.blank');
    }

}
