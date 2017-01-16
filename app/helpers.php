<?php 
use App\Model\Settings;
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
	?>