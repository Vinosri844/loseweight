<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages as Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\CommonHelper;
use CommonLib, CommonHelper, Image, File,  Validator;
 class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth');
    }
    public function index()
    {
		
		$pages = Pages::all();
		
        return view('admin.pages', ['pages' => $pages]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages_form');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
                'name' => 'required',
				'content' => 'required',
                'image' => 'required',
				'meta_title' => 'required',
                'meta_keywords' => 'required',
				'meta_description' => 'required',
				'status' => 'required',
				
            ], [
                'name.required' => 'Name is required',
                'content.required' => 'content is required',
				'image.required' => 'image is required',
				'meta_title.required' => 'meta_title is required',
				'meta_keywords.required' => 'meta_keywords is required',
				'meta_description.required' => 'meta_description is required',
				'status.required' => 'status is required'
				
				
            ]);
   
        $input = $request->all();
        
		$input['slug'] = \Illuminate\Support\Str::slug($input['name'], "-");
		 // $image = time().'.'.$request->image ;  
   
        // $request->image->move(public_path('public/images/admin/eximage'), $image);
		
		
		
		// if ($files = $request->image) {
// $destinationPath = public_path('public/images/admin/eximage'); // upload path
// $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
// $files->move($destinationPath, $profileImage);
// $input['image'] = "$profileImage";
// }

// if($file = $request->hasFile('image')) {
            
            // $file = $request->$input['image'] ;
            
            // $fileName = $file->getClientOriginalName() ;
            // $destinationPath = public_path().'public/images/admin/eximage' ;
            // $file->move($destinationPath,$fileName);
            // $input->image = $fileName ;

		 // }
		 // $input['slug'] = \Illuminate\Support\Str::slug($input['name'], "-");
		 if($request->hasFile('image')) {
                    $photo = $request->file('image');

                    if(isset($photo) && !empty($photo) && $photo->isValid()) {
                        $rules = array('photo' => 'required|mimes:png,jpg,jpeg'); 
                        $validator = Validator::make(array('photo'=> $photo), $rules);
                        if($validator->passes()) {
							
                            $file_name =$input['slug'].'_'.time().'.'.$photo->getClientOriginalExtension();
                            $file_path = public_path(('/uploads/pages/').$file_name);
                             
                                // Resize Image
                                $save_photo = Image::make($photo->getRealPath())->resize(250,250)->save($file_path);
							
                            $input['image'] = $file_name;
							
							// Delete Old File
                            if(!empty($request->input('old_image'))) {
                                $old_file_path = public_path(('/uploads/pages/').$request->input('old_image'));
                                File::Delete($old_file_path);
                            }
                        }
                    }
                }



        $pages = Pages::create($input);
    
		 // return redirect()->action(
    // 'Admin\PageController@index', ['pages' => $pages]
// );
	return redirect()
        ->route('admin.page')
        ->with('status','Admin has been created page!');	
    }
	// return view('admin.pages', ['pages' => $pages]);
		
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
		$page = Pages::find($id);
		
		// print_r($page);
		// echo $id;
		// exit;
		if(is_null($page)){
			return redirect()
        ->route('admin.page')
        ->with('status','Admin has been created page!');
			// return redirect()->action(
    // 'Admin\PageController@index', ['pages' => $pages]
// );
			 
		}

		return view('admin.pages_form_edit',['input'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
                'name' => 'required',
				'content' => 'required',
                'image' => 'required',
				'meta_title' => 'required',
                'meta_keywords' => 'required',
				'meta_description' => 'required',
				'status' => 'required',
				
            ], [
                'name.required' => 'Name is required',
                'content.required' => 'content is required',
				'image.required' => 'image is required',
				'meta_title.required' => 'meta_title is required',
				'meta_keywords.required' => 'meta_keywords is required',
				'meta_description.required' => 'meta_description is required',
				'status.required' => 'status is required'
				
				
            ]);
       // $page = Pages::find($id);
        $input = $request->all();
        
		$input['slug'] = \Illuminate\Support\Str::slug($input['name'], "-");
		
		if($request->hasFile('image')) {
                    $photo = $request->file('image');

                    if(isset($photo) && !empty($photo) && $photo->isValid()) {
                        $rules = array('photo' => 'required|mimes:png,jpg,jpeg'); 
                        $validator = Validator::make(array('photo'=> $photo), $rules);
                        if($validator->passes()) {
							
                            $file_name =$input['slug'].'_'.time().'.'.$photo->getClientOriginalExtension();
                            $file_path = public_path(('/uploads/pages/').$file_name);
                             // echo $file_path;
							 // exit;
                                // Resize Image
                                $save_photo = Image::make($photo->getRealPath())->resize(250,250)->save($file_path);
							
                            $input['image'] = $file_name;
							// Delete Old File
                            if(!empty($request->input('old_image'))) {
                                $old_file_path = public_path(('/uploads/pages/').$request->input('old_image'));
                                File::Delete($old_file_path);
                            }
                        }
                    }
                }
		
		
		
		
		
		unset($input['_method']);
		unset($input['_token']);
		unset($input['status1']);
        $pages = Pages::where('id', $id)->update($input);
		// $pages=$page->update();
		return redirect()
        ->route('admin.page')
        ->with('status','Admin has been created page!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // DB::delete('delete from lw_pages where id = ?',[$id]);
// echo "Record deleted successfully.";
// return redirect()->action(
    // 'Admin\PageController@index'
// );

Pages::destroy([$id]);
return redirect()
        ->route('admin.page')
        ->with('status','Admin has been created page!');

    }
}
