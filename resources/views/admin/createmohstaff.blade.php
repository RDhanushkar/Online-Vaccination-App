@extends('admin.layout')
@section('adminlayout')
<div>
    <form method="post" action="/storeMoh" >
    @csrf
        <table style=" margin-left: auto; margin-right: auto; margin-top:10%;">
            <tr>
                <td>MOH id:</td>
                <td><input type="text" name="mohid"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><input type="text" name="district"></td>
            </tr>
            <tr>
                <td>Name of the MOH:</td>
                <td><input type="text" name="mname"></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Mobile No:</td>
                <td><input type="text" name="contactno"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td><button type="submit">Add</button></td>
                <td><a href="">clear</a><td>
            </tr>  
        </table>
    </form>
</div>


@endsection