@section('title') Holiday Homes @stop
@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12 wow fadeInLeft">

            <table id="example" class="display" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>State</th>
                        <th>Location</th>                        
                        <th>Address</th>                        
                        <th>Room Tariff</th>
                        <th>Phone</th>
                        <th>#</th>
                    </tr>
                </thead>               
                <tbody>
                    @foreach($data as $holidayhome)
                    <tr>
                        <td>{{ $holidayhome->state_name->name }}</td>
                        <td>{{ $holidayhome->location_id}}</td>                        
                        <td>{{ $holidayhome->address}}</td>                        
                        <td>{{ $holidayhome->tariff}}</td>
                        <td>{{ $holidayhome->phone}}</td>
                        <td>
                            <a href="http://localhost/sample/public/destinations/details/5" class="button">See details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>       
    </div> 
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('/front/datatable/jquery.dataTables.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection
@section('style')
<link href="{{ asset('/front/datatable/jquery.dataTables.min.css') }}" rel="stylesheet" />
@endsection