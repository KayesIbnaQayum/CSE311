@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">
                        <div class="col-12 mb-4">
                            <div class="row">
                              <form action="bid" method="post">
                                @csrf
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">Budget</label>
                                    <input name="bid" type="int" class="form-control" id="inputPassword4" placeholder="Budget">
                                  </div>
                                </div>     
                                <button type="submit" class="btn btn-primary">Bid</button>
                              </form>
                          </div>
@endsection       