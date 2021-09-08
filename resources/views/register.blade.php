@extends('reg')
@section('content')
        <div class="card"><br>
                <div class="card-title text-center"><h4>Create account</h4><p><hr class="my-4"></p></div>
            <div class="cad-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <p class="text-center">Already signed up? Log in <a href="{{url('/login')}}">here</a>.</p>
                        <button class="btn btn-block text-white" style="background-color: #FA897B ; width: 100%;">Sign up</button>
                    </div>
                <br>
                </form>
            </div>
        </div>
@stop