@extends('people.layout')
@section('peoplelayout')

<div>
    <form method="post" action="/storeSmartVaccine/{{$people -> id}}" >
    @csrf
        <table style=" margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <td>Passport/NIC:</td>
                <td><input type="text" name="nic"></td>
            </tr>
            <tr>
                <td>Fullname:</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Doxument:</td>
                <td><select  name="doc">
                        <option value="passport">Photocopy of the Passport</option>
                        <option value="nic">Photocopy of the NIC</option>
                        <option value="vaccinecard">Photocopy of the Vaccination Card</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button>Upload</button></td>
            </tr>
            <tr>
                <td><button>Submit</button></td>
                <td><a href="">clear</a></td>
            </tr>
        </table>
    </form>
</div>

@endsection