<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
Use Visitor ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Banner;
use Illuminate\Support\Facades\Input;

class BannerController extends Controller {

	//protected $dashboard;
	
	//public function __construct( DashboardRepository $dashboard )
	//{
		//$this->dashboard = $dashboard;
	//}	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getIndex()
	{
		//dd("as");
		$banner=Banner::where('deleted',0)					
					->get();		
		return View('admin.banner.index', [		
					'banners' => $banner,
				]);
		
	}
	
	public function getCreate()
	{		
		return View('admin.banner.create');
	}
	
	public function postStore(Request $request)
	{
		
		$display_order=$request->get('display_order');
		$input = Input::all();
		$file = array_get($input,'banners_name');
		
		$destinationPath = env('UPLOADS')."banners/";
		// GET THE FILE EXTENSION
		$image_ext = $file->getClientOriginalExtension();
		// RENAME THE UPLOAD WITH RANDOM NUMBER
		$image_only_name=time().rand(1,11111);
		//$image_ext = $request->file('banners_name')->getClientOriginalExtension();
		$final_image_name=$image_only_name.".".$image_ext;
		// MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
		$upload_success = $file->move($destinationPath, $final_image_name);
		
		
		$banner = new Banner();
		$banner->display_order = $display_order;
		$banner->banners_name = $final_image_name;			
		$banner->save();
		
		return redirect('admin/banner');
		
	}
	
	/*public function getCreate()
	{
		$state=State::where('status',1)
					->orderBy('name','ASC')
					->get();	
		return View('admin.destination.create', [		
					'states' => $state,
				]);
	}
	
	public function postStore(Request $request)
	{
		$state_id=$request->get('state_id');
		$location_name=$request->get('location_name');
		$description=$request->get('description');
		$how_to_reach=$request->get('how_to_reach');
		$when_to_visit=$request->get('when_to_visit');
		$status=$request->get('status');
		
		$destination = new Destination();
		$destination->state_id = $state_id;
		$destination->location_name = $location_name;
		$destination->description = $description;
		$destination->how_to_reach = $how_to_reach;
		$destination->when_to_visit = $when_to_visit;
		$destination->status = $status;		
		$destination->save();
		
		return redirect('admin/destination');
		
	}

	public function getEdit($id)
	{
		$destination=Destination::where('id',$id)->first();
		
		$state=State::where('status',1)
					->orderBy('name','ASC')
					->get();
		
		return View('admin.destination.edit', [		
					'destination' => $destination,
					'states' => $state,
					'id' => $id,
				]);
	}
	
	public function postUpdate(Request $request)
	{
		$id=$request->get('id');
		$state_id=$request->get('state_id');
		$location_name=$request->get('location_name');
		$description=$request->get('description');
		$how_to_reach=$request->get('how_to_reach');
		$when_to_visit=$request->get('when_to_visit');
		$visibility=$request->get('visibility');
		
		$destination = Destination::find($id);
		$destination->state_id = $state_id;
		$destination->location_name = $location_name;
		$destination->description = $description;
		$destination->how_to_reach = $how_to_reach;
		$destination->when_to_visit = $when_to_visit;
		$destination->visibility = $visibility;		
		$destination->save();
		
		return redirect('admin/destination');
	}
	
	public function getDelete($id)
	{		
		$destination = Destination::find($id);
		$destination->deleted = 1;		
		$destination->save();
		
		return redirect('admin/destination');
	}*/
	
}
