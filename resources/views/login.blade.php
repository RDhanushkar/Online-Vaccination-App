
@extends('layout')
    @section('font')

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="card border-success mb-3 " style="max-width: 18rem; text-align:center; margin-left: auto; margin-right: auto; margin-top:10%;">
            <div class="card-header bg-transparent border-success">
                Online Vaccination
            </div>
            <div class="card-body text-success">
                <form method="post" action="/check">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
            <div class="card-footer bg-transparent border-success"><a href="/register">Register</a></div>
        </div>
    @endsection