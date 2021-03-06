@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">

                
                        <div class="col-2">
                            <b><h2>Filter</h2></b>
                            <h6>Project Type</h6>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Fixed Price</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">Hourly Price</label><br>
                        </div>
                        <div class="col-10">
                            <div class="ps-2"><b>Results</b><br>
                            @foreach ($data as $value)
                                <div class="row border-bottom pt-2">
                                    <div class="col-10"><b><a href="/project/{{$value->projectID}}">{{$value->title}}</a></b></div>
                                    <div class="col-2">$ {{$value->budgets}}</div>
                                    <div class="col-10 mt-1">{{$value->details}}</div>
                                    <div class="col-2">{{$value->startDate}}</div>
                                    
                                    <div class="col-12 mt-3">{{$value->keywords}}</div>
                                </div>                                 
                            @endforeach

                           
   
                            </div>
                        </div>
                    
                </div>
@endsection