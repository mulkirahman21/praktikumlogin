@extends('template')
@section('content')
<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-4 ">
            <div class="card">
                <div class="card-header">
                    <h2>Login Dulu Yaa</h2>
                </div>
                <form method="post" action="auth">
        
                
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label"> E-mail</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label"> Password </label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <button class="btn btn-primary mt-3">Login</button>
                </div>
                       
                </form>
            </div>
        </div>
    </div>
</div>


@endsection