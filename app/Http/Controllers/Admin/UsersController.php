<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserRequest;
use App\Country;
use App\User;
use App\Review;
use Keygen;
use Session;
use Hash;
use File;
use App\Contact;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $title = 'Users';
        $users = User::all();
        return view('admin.users.view', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add User';
        $countries = Country::all();
        return view('admin.users.add', compact('title', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $key = Keygen::numeric(10)->generate();

        // Brand File Upload configurartion
        $File = $request->file('avatar');
        if ($File) {
            // change filename 
            $FileName = time() . '-' . $key . '-' . $File->getClientOriginalName();
            // Move file to uploads directory
            $File->move(public_path('uploads/user'), $FileName);
        } else {
            $FileName = null;
        }

        $user = User::create([
            'name' => $request->name,
            'lastName' => ($request->lastName) ? $request->lastName : null,
            'email' => $request->email,
            'role' => $request->role,
            'status' => 'Deactivated',
            'designation' => ($request->designation) ? $request->designation : null,
            'gender' => ($request->gender) ? $request->gender : null,
            'webiste' => ($request->webiste) ? $request->webiste : null,
            'phone' => ($request->phone) ? $request->phone : null,
            'country' => ($request->country) ? $request->country : null,
            'province' => ($request->province) ? $request->province : null,
            'city' => ($request->city) ? $request->city : null,
            'address' => ($request->address) ? $request->address : null,
            'twitterProfile' => ($request->twitterProfile) ? $request->twitterProfile : null,
            'facebookProfile' => ($request->facebookProfile) ? $request->facebookProfile : null,
            'instagramProfile' => ($request->instagramProfile) ? $request->instagramProfile : null,
            'avatar' => $FileName,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('success', 'User Created Successfully please change the status to Activated to approve the user');
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $title = 'Edit User';
        $countries = Country::all();
        return view('admin.users.add', compact('title', 'countries', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->password === $user->password)
        {
            $password = $user->password;
        } else {
            $password = Hash::make($request->password);
        }
        $key = Keygen::numeric(10)->generate();

        if($request->avatar) {
            $File = $request->file('avatar');
            if ($File) {
                // change filename 
                $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
                // Move file to uploads directory
                $File->move(public_path('uploads/user'), $FileName);
                $userImage = $user->avatar;
                $image_path = public_path().'/uploads/user/' . $userImage;
                if(File::exists($image_path)){
                    // Deleting userImage
                  File::delete(public_path('/uploads/user/' . $userImage));    
            }
        }
        }else{
            // Redirecting if the image is not exist in directory 
            $FileName = $user->avatar;
        }
            
        $user->update([
            'name' => $request->name,
            'lastName' => ($request->lastName) ? $request->lastName : null,
            'email' => $request->email,
            'role' => $request->role,
            'designation' => ($request->designation) ? $request->designation : null,
            'gender' => ($request->gender) ? $request->gender : null,
            'webiste' => ($request->webiste) ? $request->webiste : null,
            'phone' => ($request->phone) ? $request->phone : null,
            'country' => ($request->country) ? $request->country : null,
            'province' => ($request->province) ? $request->province : null,
            'city' => ($request->city) ? $request->city : null,
            'address' => ($request->address) ? $request->address : null,
            'twitterProfile' => ($request->twitterProfile) ? $request->twitterProfile : null,
            'facebookProfile' => ($request->facebookProfile) ? $request->facebookProfile : null,
            'instagramProfile' => ($request->instagramProfile) ? $request->instagramProfile : null,
            'avatar' => $FileName,
            'password' => $password,
        ]);

        Session::flash('success', 'User updated successfully');
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user) {
            if($user->avatar) {
                // deleting image 
                $image = $user->avatar;
                // check if the file exist in directory
                $image_path = public_path().'/uploads/user/' . $image;
                if(File::exists($image_path)){
                    // Deleting image
                  File::delete(public_path('/uploads/user/' . $image));
                }else{
                    // Redirecting if the image is not exist in directory 
                    $user->delete();
                    Session::flash('error', 'File not exist!');
                    return redirect()->back();
                }
            }
            // Delete review relation wo user
            foreach ($user->reviews as $reviewId) {
                $deleteReviewWithUser = Review::find($reviewId->id);
                $deleteReviewWithUser->delete();
            }
            // Deleting orders related to user
            foreach($user->orders as $orders) {
                $orders->delete();
            }
            $user->delete();
            Session::flash('info', 'User deleted successfully!');
            return redirect()->back(); 
        } else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }

    //Custom function

    public function status(User $id)
    {
        $id->update([
            'status' => $id->status == 'Activated' ? 'Deactivated' : 'Activated',
            ]);
        Session::flash('info', 'Status updated successfully!');
        return redirect()->back();
    }

    public function registeration(Request $request)
    {
        if(!$request) {
            Session::flash('registeration', 'Something went wrong please try again later!');
            return redirect()->back();
        }
        $this->validate($request, [
            'name'              => 'required',
            'email'             => 'required|unique:users',
            'password'          => 'required|min:6|max:12',
            'password_confirmation'   => 'required|same:password'
        ]);
        $contact = Contact::find(1);
        if(\App\Contact::count() !== 0) {
            $code = $contact->code;
            if($request['one_time_pass'] == $code) {
                User::create([
                    'name' => $request['name'],
                    'role' => 'Admin',
                    'status' => 'Activated',
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ]);
                Session::flash('registeration', 'Registered Successfully!');
                return redirect()->back();
            } else {
                Session::flash('registeration', 'One Time Password did not match!');
                return redirect()->back();
            }
        } else {
            Session::flash('registeration', 'Server Issue Please try again later!');
            return redirect()->back();
        }
    }
}
