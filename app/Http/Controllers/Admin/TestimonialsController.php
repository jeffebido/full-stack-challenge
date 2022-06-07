<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){

        $data = [
            'testimonials' => Testimonials::orderByDesc('created_at')->get()
        ];

        return view("admin.pages.testimonials", $data);
    }

    public function add(Request $request){
    
        return view("admin.pages.testimonials.add");
    }

    public function addPost(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('img/testimonials'), $imageName);
        
        Testimonials::create([
            'name' => $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'img' => $imageName
        ]);

        return redirect()->route('admin.testimonials');
    }

    public function update(Request $request){
        
        $data = [
            'testimonial' => Testimonials::where('id', $request->id)->first()
        ];


        if( empty($data['testimonial']['id']) ){

            return redirect()->route('admin.testimonials');
        }else{
            return view("admin.pages.testimonials.update", $data);
        }
        
    }

    public function updatePost(Request $request){

        $testimonial = Testimonials::find($request->id);

        
        if(!empty($request->image) ){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('img/testimonials'), $imageName);

            $testimonial->img = $imageName;
        }

        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->description = $request->description;
        
        $testimonial->save();

        return redirect()->route('admin.testimonials');

    }

    public function delete(Request $request){
        
        $testimonial = Testimonials::find($request->id);

        $testimonial->delete();

        return redirect()->route('admin.testimonials');
    }
}
