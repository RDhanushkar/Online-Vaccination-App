@extends('mohstaff.layout')
@section('mohstafflayout')
<div class="card-body" >
            <table class="table table-bordered" style="width:80%;  margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <th>NIC</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($smart as $people)
            <tr>
                
                <td>{{$people -> nic}}</td>
                <td>{{$people -> fstname}}</td>
                <td>{{$people -> lstname}}</td>
                <td>{{$people -> address}}</td>
                <td>{{$people -> mobilenumber}}</td>
                <td><button type="submit" class="btn btn-primary">view</button></td>
                <td><button type="submit" class="btn btn-success">Aprove</button></td>
                <td><button type="submit" class="btn btn-danger">Reject</button></td>
            
            </tr>
            @endforeach
            </table>
        </div>
@endsection