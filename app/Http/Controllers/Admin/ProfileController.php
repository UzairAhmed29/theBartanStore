<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Country;
use App\User;
use Session;
use Keygen;
use File;
use Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'My Profile';
    	$countries = Country::all();
    	return view('admin.profile.index', compact('countries', 'title'));
    }

    public function updateProfileBasic(Request $request)
    {
    	$id = auth()->user()->id;
    	$user = User::find($id);
        $user->update([
            'name' => $request->name,
            'lastName' => ($request->lastName) ? $request->lastName : null,
            'email' => $request->email,
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
        ]);
        $user->save();
        Session::flash('success', 'Profile Updated Successfully');
        return redirect()->back();
    }

    public function updateProfileImage(Request $request)
    {
        $key = Keygen::numeric(10)->generate();

        // user File Upload configurartion
        $File = $request->file('avatar');
        if ($File) {
            // change filename 
            $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
            // Move file to uploads directory
            $File->move(public_path('uploads/user'), $FileName);

            if(auth()->user()->avatar) {
                $image = auth()->user()->avatar;
                // check if the file exist in directory
                $image_path = public_path().'/uploads/user/' . $image;
                if(File::exists($image_path)){
                        // Deleting image
                      File::delete(public_path('/uploads/user/' . $image));
                }
            } 
        }
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->update([
            'avatar' => $FileName,
        ]);

        Session::flash('success', 'Profile Picture Updated successfully');
        return redirect()->back();
    }

    public function changePassword(UpdatePasswordRequest $request)
    {
        $current_password = $request->current_password;
        $check = Hash::check($current_password, auth()->user()->password);
        if($check) {
            
            $id = auth()->user()->id;
            User::find($id)->update([
            'password'=> Hash::make($request->new_password)
        ]);
        } else {
            return redirect()->back()->with('error', 'Current Password is no match');
        }
        Session::flash('info', 'Password Updated Successfully!');
        return redirect()->back();
    }
}
