<?php namespace App\Http\Controllers;
use App\Model\Banner;
use App\Model\Destination;

class WelcomeController extends Controller {

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
	public function index()
	{
        $banner=Banner::where('deleted',0)->orderBy('display_order','ASC')->get();
        
        $destinations=Destination::where('visibility',1)						 
							->where('deleted',0)
							->with('state_name','primary_image')	
							->orderBy('location_name','ASC')
                            ->paginate(4);
		//return view('welcome');
        return view('welcome', [ 
			//'destinations' => $destinations,
			'banners' => $banner,
			'data' => $destinations
		]);
	}

}
