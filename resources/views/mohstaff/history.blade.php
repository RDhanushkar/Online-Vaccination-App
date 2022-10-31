@extends('mohstaff.layout')
@section('mohstafflayout')
<div>
    <form method="post" action="/storeHistory" >
    @csrf
        <table style=" margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <td>Date:</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>NIC:</td>
                <td><input type="text" name="nic"></td>
            </tr>
            <tr>
                <td>Vaccine Product:</td>
                <td><input type="text" name="vaccine_product"></td>
            </tr>
            <tr>
                <td>Batch Number:</td>
                <td><input type="text" name="batch_number"></td>
            </tr>
            <tr>
                <td>vaccination Status:</td>
                <td><input type="text" name="vaccination_status"></td>
            </tr>
            <tr>
                <td><button>Submit</button></td>
                <td><a href="">clear</a></td>
            </tr>
        </table>
    </form>
</div>
@endsection