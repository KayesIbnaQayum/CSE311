@extends('layout.indexMasterLayout')
@section('body')
<div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="/img/login.jpg" alt="">
                    </div>
                    <div class="col-6 p-4" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 7px 0 rgba(0, 0, 0, 0.19);">
                        <h2>Login</h2>
                        <form method="post" action="login">
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                    </div>
                </div>
@endsection