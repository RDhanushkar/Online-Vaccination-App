@extends('people.layout')
@section('peoplelayout')


    <table style="width:30%; margin-left:5%; margin-top:2%;">
        <tr>
            <td>Fullname:</td>
            <td>{{$people -> fstname}}  {{$people -> lstname}}</td>
            
        </tr>
        <tr>
            <td>Address:</td>
            <td>{{$people -> address}}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{$people -> gender}}</td>
        </tr>
        <tr>
            <td>NIC/PASSPORT:</td>
            <td>{{$people -> nic}}</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>{{$people -> dob}}</td>
        </tr>
    </table>

    <br>
    <br>

    <div class="card-body">
        <table class="table table-bordered" style="width:50%; margin-left: auto; margin-right: auto; margin-top:5%;">
        @foreach ($history as $people)
            <tr>
                <td></td>
                <td>Vaccine Doses</td>
            </tr>
            <tr>
                <td >date</td>
                <td >{{$people -> date}}</td>
            </tr>
            <tr>
                <td>Vaccine Product</td>
                <td>{{$people ->  vaccine_product}}</td>
            </tr>
            <tr>
                <td>Batch Number</td>
                <td>{{$people -> batch_number}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    
@endsection