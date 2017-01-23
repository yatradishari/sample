<div class="container">
    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Overview</li>
        <li class="tab-link" data-tab="tab-2">How to Reach</li>
        <li class="tab-link" data-tab="tab-3">When to Visit</li>
        <li class="tab-link" data-tab="tab-4">Accommodation</li>
        <li class="tab-link" data-tab="tab-5">Food</li>
        <li class="tab-link" data-tab="tab-6">Photo</li>
        
    </ul>

    <div id="tab-1" class="tab-content current">
        {{ $destinations[0]->description }}
    </div>
    <div id="tab-2" class="tab-content">
         {{ $destinations[0]->how_to_reach }}
    </div>
    <div id="tab-3" class="tab-content">
        {{ $destinations[0]->when_to_visit }}
    </div>
    <div id="tab-4" class="tab-content">
        Accommodation
    </div>
    <div id="tab-5" class="tab-content">
        Food
    </div>
    <div id="tab-6" class="tab-content">
        Photo
    </div>

</div><!-- container -->

<script>    
    $(document).ready(function(){
        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })
    })
</script>

<style>
    
		.container{
			margin: 0 auto;
		}
		ul.tabs{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tabs li.current{
			background: #ededed;
			color: #222;
		}

		.tab-content{
			display: none;
			background: #ededed;
			padding: 15px;
		}

		.tab-content.current{
			display: inherit;
		}
</style>
