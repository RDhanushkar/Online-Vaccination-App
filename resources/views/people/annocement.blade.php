@extends('people.layout')
@section('peoplelayout')
<div class="card-body" >
            <table class="table table-bordered" style="width:80%;  margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <th>Date</th>
                <th>Vaccine</th>
                <th>Venue</th>
                <th>Age Group</th>
                <th>No of Dosage</th>
            </tr>
            @foreach ($annocement as $annocement)
            <tr>
                
                <td>{{$annocement -> date}}</td>
                <td>{{$annocement -> vaccine}}</td>
                <td>{{$annocement -> venue}}</td>
                <td>{{$annocement -> age_group}}</td>
                <td>{{$annocement -> no_of_dosage}}</td>
            </tr>
            @endforeach

            </table>
        </div>
@endsection