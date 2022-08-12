@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offest-4">
            <form action="{{ route('login') }}" method="POST">
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" >
                </div>
            <button type="submit" class="btn btn-primary">Se Connecter</button>
            </form>
        <div>
        </div>
        </div>
    </div>
</div>
@endsection