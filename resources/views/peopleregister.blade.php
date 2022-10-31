@extends('layout')
    @section('font')
    <div class="col-mb-6">
        <div class="p-5 mb-4 bg-light rounded-3">
          <h2>Registration</h2>
            <form action="/storePeople" method="post">
            @csrf
            
            <div class="mb-3">
                    <label  class="form-label">First name:</label>
                    <input type="text" class="form-control" name="fstname">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Last name:</label>
                    <input type="text" class="form-control" name="lstname">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Mobile number:</label>
                    <input type="number" class="form-control" name="mobilenumber">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Gender:</label>
                    <select class="form-select" aria-label="Default select example" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label  class="form-label">NIC:</label>
                    <input type="text" class="form-control" name="nic">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Date of birth</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="mb-3">
                    <label  class="form-label">District:</label>
                    <input type="text" class="form-control" name="district">
                </div>
                <div class="mb-3">
                    <label  class="form-label">MOH:</label>
                    <select class="form-select" aria-label="Default select example" name="moh">
                        @foreach($mohs as $moh)
                        <option value="{{$moh->mname}}">{{$moh->mname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email:</label>
                    <input type="text" class="form-control" name="uname">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Re Password:</label>
                    <input type="password" class="form-control" name="repassword">
                </div>
                <button class="btn btn-outline-secondary" type="submit">Update</button>
                  
            </form>
          
        </div>
      </div>
    @endsection