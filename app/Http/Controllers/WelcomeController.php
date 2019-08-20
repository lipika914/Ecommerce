<?php

namespace App\Http\Controllers;

use App\Book_Bank;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome()
    {
        $data['books'] = Book_Bank::all();
        return view('main.welcome',$data);
    }
	 public function admin()
    {
        //$data['info'] = Book_Bank::all();
        return view('main.admin_panel');
    }
    public function login(){
        return view('layout.user_login');
    }
    public function register(){
        return view('auth.register');
    }
    public function add_book()
    {
        return view('main.Add');
    }
    public function book_list()
    {
        $data['info'] = Book_Bank::all();
        return view('main.book_list',$data);
    }

    public function edit(Request $request){
        $data['info'] = Book_Bank::find($request->id);
        return view('main.Add',$data);
    }


    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        $data = new Book_Bank();

        if (isset($request->id) && !empty($request->id))
            $data = Book_Bank::find($request->id);


        $data->name = $request->name;

        if (!empty($request->file('image')))
            $data->image = $this->uploadimage($request->file('image'), 'admin/uploads/', '', '', '');


        $data->description = $request->description;
        $data->price = $request->price;
        $data->status = $request->status;
        $data->save();
        return redirect('book_list')->with('message', 'yes');

    }





    //  image upload function


    function uploadimage($img, $path, $user_file_name = null, $width = null, $height = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists(path_image_thumb() . $user_file_name)) {
            unlink(path_image_thumb() . $user_file_name);
        }
// saving image in target path
        $imgName = uniqid() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);


        $img_main = \Intervention\Image\Facades\Image::make($img);
        $img_main->orientate();
        $img_main->save($path . $imgName);


        if (file_exists($path . $imgName)) {

            return $imgName;
        }
        return false;

    }


    public function search(Request $request)
    {
        $name = $request->name;
        if(isset($name) && !empty($name)){
            $data['info'] = Book_Bank::where('name','LIKE','%'. $name.'%')
                ->orWhere('image','LIKE','%'. $name.'%')

                ->orWhere('description','LIKE','%'. $name.'%')
                ->orWhere('price','LIKE','%'. $name.'%')
                ->orWhere('status','LIKE','%'. $name.'%')
                ->get();


        }
       

        return view('main.search',$data);
    }




    public function delete(Request $request)
    {
        Book_Bank::find($request->id)->delete();
        return redirect()->back();
    }


}
