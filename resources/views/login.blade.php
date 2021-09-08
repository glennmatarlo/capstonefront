@extends('reg')
@section('content')
        <div class="card"><br>
                <div class="card-title text-center"><h4>Sign in</h4><p><hr class="my-4"></p></div>            
            <div class="cad-body">
                <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button class="btn btn-block text-white" style="background-color: #FA897B ;width: 100%;">Sign in</button>
                        <hr class="my-4">
                        <a class="btn btn-block text-white" style="background-color: #957DAD; width: 100%;" href="{{url('/register')}}">Create New Account</a>
                    </div>
                    
                <br>
                </form>
            </div>
        </div><br>
@stop