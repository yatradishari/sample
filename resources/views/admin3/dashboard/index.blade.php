@extends('admin.master')

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="box-name">
                <i class="fa fa-usd"></i>
                <span>The World's billionaries</span>
            </div>
            <div class="box-icons">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="expand-link">
                    <i class="fa fa-expand"></i>
                </a>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <div class="no-move"></div>
        </div>
        <div class="box-content no-padding">
            <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Net Worth</th>
                        <th>Age</th>
                        <th>Source</th>
                        <th>Country of Citizenship</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Start: list_row -->
                    <tr>
                        <td>1</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/carlos-slim-helu_50x50.jpg" alt="">Carlos Slim Helu & family</td>
                        <td>$73 B</td>
                        <td>74</td>
                        <td>telecom</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/bill-gates_50x50.jpg" alt="">Bill Gates</td>
                        <td>$67 B</td>
                        <td>58</td>
                        <td>Microsoft</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/amancio-ortega_50x50.jpg" alt="">Amancio Ortega</td>
                        <td>$57 B</td>
                        <td>77</td>
                        <td>Zara</td>
                        <td>Spain</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/warren-buffett_50x50.jpg" alt="">Warren Buffett</td>
                        <td>$53.5 B</td>
                        <td>83</td>
                        <td>Berkshire Hathaway</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/larry-ellison_50x50.jpg" alt="">Larry Ellison</td>
                        <td>$43 B</td>
                        <td>69</td>
                        <td>Oracle</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/charles-koch_50x50.jpg" alt="">Charles Koch</td>
                        <td>$34 B</td>
                        <td>78</td>
                        <td>diversified</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/david-koch_50x50.jpg" alt="">David Koch</td>
                        <td>$34 B</td>
                        <td>73</td>
                        <td>diversified</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/li-ka-shing_50x50.jpg" alt="">Li Ka-shing</td>
                        <td>$31 B</td>
                        <td>85</td>
                        <td>diversified</td>
                        <td>Hong Kong</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/liliane-bettencourt_50x50.jpg" alt="">Liliane Bettencourt & family</td>
                        <td>$30 B</td>
                        <td>91</td>
                        <td>L'Oreal</td>
                        <td>France</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/bernard-arnault_50x50.jpg" alt="">Bernard Arnault & family</td>
                        <td>$29 B</td>
                        <td>64</td>
                        <td>LVMH</td>
                        <td>France</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/christy-walton_50x50.jpg" alt="">Christy Walton & family</td>
                        <td>$28.2 B</td>
                        <td>59</td>
                        <td>Wal-Mart</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/stefan-persson_50x50.jpg" alt="">Stefan Persson</td>
                        <td>$28 B</td>
                        <td>66</td>
                        <td>H&amp;M</td>
                        <td>Sweden</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/michael-bloomberg_50x50.jpg" alt="">Michael Bloomberg</td>
                        <td>$27 B</td>
                        <td>71</td>
                        <td>Bloomberg LP</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/jim-walton_50x50.jpg" alt="">Jim Walton</td>
                        <td>$26.7 B</td>
                        <td>66</td>
                        <td>Wal-Mart</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td><img class="img-rounded" src="http://i.forbesimg.com/media/lists/people/sheldon-adelson_50x50.jpg" alt="">Sheldon Adelson</td>
                        <td>$26.5 B</td>
                        <td>80</td>
                        <td>casinos</td>
                        <td>United States</td>
                    </tr>											
                <!-- End: list_row -->
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Net Worth</th>
                        <th>Age</th>
                        <th>Source</th>
                        <th>Country of Citizenship</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
@endsection
