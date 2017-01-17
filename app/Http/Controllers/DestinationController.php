<?php namespace App\Http\Controllers;
use App\Model\Destination;
use App\Model\State;
use App\Model\Destinationimage;
class DestinationController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{ 
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->with('state_name','primary_image')	
							->orderBy('location_name','ASC')		
							->get();
                            //->paginate(4);
		return view('destination.list', [ 'destinations' => $destinations]);
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
        
       // dd($destinations->toArray());	        
		return view('destination.details', [ 'destinations' => $destinations, 'destinationimage' => $destinationimage]);
	}

}
