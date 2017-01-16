<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DashboardRepository;
Use Visitor ; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Settings;

class SettingsController extends Controller {

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
		$settings=Settings::orderBy('settings_key','ASC')
				  ->get();
		return View('admin.settings.index', [		
					'settings' => $settings,
				]);
		
	}
	
	public function getEdit($id)
	{

		$settings=Settings::where('id',$id)->first();	

		return View('admin.settings.edit', [		
					'settings' => $settings,					
					'id' => $id,					
				]);
	}
	
	public function postUpdate(Request $request)
	{		
		$id=$request->get('id');
		$settings_key=$request->get('settings_key');
		$settings_value=$request->get('settings_value');
		$status=$request->get('visibility');
		
		
		$settings = Settings::find($id);
		$settings->settings_key = $settings_key;
		$settings->settings_value = $settings_value;
		$settings->status = $status;
			
		$settings->save();
		
		return redirect('admin/settings');
	}

	
	
}
