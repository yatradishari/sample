<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
Use App\Model\State ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DestinationController extends Controller {

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
	 
	//public function getIndex()
	//{
	//	return View('admin.dashboard.index');		
	//}
    
    public function getState()
	{
        $state=State::where('deleted',0)
               ->orderBy('name','ASC')
               ->get();
        // dd("X");

        return View('admin.destination.state.list',['data'=>$state]);		
	}

	
	
}
