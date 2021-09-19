@extends('layout.indexMasterLayout')
@section('body')
<div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="/img/registation.jpg" alt="">
                    </div>
                    <div class="col-6 p-4" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 7px 0 rgba(0, 0, 0, 0.19);">
                        <h2>Signup</h2>
                        <form action="reg" method="post">
                          @csrf
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">First Name</label>
                              <input name="fname" type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">LastName</label>
                              <input name="lname" type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">Email</label>
                            <input name="email" type="email" class="form-control" id="inputAddress" placeholder="example@gmail.com">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Password</label>
                              <input name="pass1" type="password" class="form-control" id="inputEmail4" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">password confirm</label>
                              <input name="pass2" type="password" class="form-control" id="inputPassword4" placeholder="Password confirm">
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Sign up</button>
                        </form>
                    </div>
                </div>
  @endsection
