@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">
                     
              
                        <div class="col-12 m-3">
                        @if(isset($low))
                          <p>Lowest bid price - {{$low[0]->price}}<p>
                        @endif
                        @if(isset($totalbid))
                          <p>Total bid - {{$totalbid[0]->totalbid}}<p>
                        @endif
                          <hr>
                        </div>
                      

                        <div class="col-12 mb-4">
                          @foreach($data as $value)
                            <div class="row">
                              <form action="bidcon" method="post">
                                @csrf
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">{{$value->fname." ".$value->lname}}</label><br>
                                    <label for="inputPassword4">Bid Price - {{$value->price}}</label>
                                    <input type="hidden" name="id" value="{{$value->freelancerID}}">
                                  </div>
                                </div>     
                                <button type="submit" class="btn btn-primary">Select</button>
                              </form>
                          </div>
                          <hr>
                        @endforeach
@endsection