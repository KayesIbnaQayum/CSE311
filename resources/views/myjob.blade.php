@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">

                        <div class="col-10">
                            <div class="ps-2"><b>My Assignmed Job</b><br>
                            @if(isset($data))
                            @foreach ($data as $value)
                                <div class="row border-bottom pt-2">
                                    <div class="col-10"><b><a href="/project/{{$value->projectID}}">{{$value->title}}</a></b></div>
                                    <div class="col-2">$ {{$value->budgets}}</div>
                                    <div class="col-10 mt-1">{{$value->details}}</div>
                                    <div class="col-2">{{$value->startDate}}</div>
                                    
                                    <div class="col-12 mt-3">{{$value->keywords}}</div>
                                </div>                                 
                            @endforeach
                            @endif
                           
   
                            </div>
                        </div>
                    
                </div>
@endsection