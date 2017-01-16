<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Destination;
use App\Model\State;
use App\Model\Destinationimage;

class DestinationController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->with('state_name','primary_image')	
							 ->orderBy('location_name','ASC')		
						  ->paginate(4);	
			//dd($destinations->toArray());				  
		//return view('front.destination')->with('destination'=>$destination);
		return View('front.destination', [ 'destinations' => $destinations]);
	}
	
	public function getDetails($id)
	{
		
		$destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->where('id',$id)
							->with('state_name','primary_image')								
							->get();	
							
		$destinationimage=Destinationimage::where('destination_id',$id)
							->where('status',1)
							->orderBy('id','DESC')
							->get();
		//dd($destinationimage->toArray());				  
		//return view('front.destination')->with('destination'=>$destination);
		return View('front.destinationdetails', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage]);
	}

}
