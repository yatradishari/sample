<?php 
use App\Model\Settings;
use App\Model\Destination;
use App\Model\State;
use App\Model\Country;
    function short($text,$limit=100)
	{
		$length=strlen($text);
		if($length >$limit)
		{
			$new_text=substr($text,0,$limit)."...";
		}
		else
		{
			$new_text=$text;
		}
		return $new_text;
	}
	
	function settings($setting_key)
	{
		$settings=Settings::where('settings_key','=',$setting_key)
				  ->first();
		//		  dd($settings);
		$val=$settings['settings_value'];
		return $val;
		
	}
    
    function get_location($destination_id,$include="all")
    {
        $destination=Destination::find($destination_id);
        $state=State::find($destination->state_id);
        $country=Country::find($state->id);
       //dd($state->name);
        if($include=="all")
        {
            $create_html='<small><i class="fa fa-map-marker"></i> '.$state->name.' ,'.$country->name.'</small>';
        }
        else
        {
            $create_html='<small><i class="fa fa-map-marker"></i> '.$destination->location_name.', '.$state->name.', '.$country->name.'</small>';
        }
        return $create_html;
    }
	?>