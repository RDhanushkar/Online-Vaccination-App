@extends('mohstaff.layout')
@section('mohstafflayout')
<div>
    <form method="post" action="/storeAnno" >
    @csrf
        <table style=" margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <td>Date:</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Vaccine:</td>
                <td><input type="text" name="vaccine"></td>
            </tr>
            <tr>
                <td>Venue:</td>
                <td><input type="text" name="venue"></td>
            </tr>
            <tr>
                <td>Age group:</td>
                <td><input type="text" name="age_group"></td>
            </tr>
            <tr>
                <td>No.of dosage :</td>
                <td><input type="text" name="no_of_dosage"></td>
            </tr>
            <tr>
                <td><button>Submit</button></td>
                <td><a href="">clear</a></td>
            </tr>
        </table>
    </form>
</div>
@endsection