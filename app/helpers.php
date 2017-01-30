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
    
    function get_location($destination_id,$include="all",$marker_size="2x")
    {
        $destination=Destination::find($destination_id);
        $state=State::find($destination->state_id);
        $country=Country::find($state->id);
       //dd($state->name);
        if($include=="all")
        {
            $create_html='<small><i class="fa fa-map-marker color-red fa-'.$marker_size.'"></i> '.ucwords(strtolower($state->name)).' ,'.ucwords(strtolower($country->name)).'</small>';
        }
        else
        {
            $create_html='<small><i class="fa fa-map-marker color-red fa-'.$marker_size.'"></i> '.ucwords(strtolower($destination->location_name)).', '.ucwords(strtolower($state->name)).', '.ucwords(strtolower($country->name)).'</small>';
        }
        return $create_html;
    }
    
    function get_state($state_id,$marker_size="2x")
    {
        $state=State::find($state_id);        
        
        $country=Country::find($state->country_id);
       
        $create_html='<small><i class="fa fa-map-marker color-red fa-'.$marker_size.'"></i> '.ucwords(strtolower($state->name)).' ,'.ucwords(strtolower($country->name)).'</small>';
       
        return $create_html;
    }
    
    function make_meta_tag($string)
    {
       dd($string);
    }
	?>