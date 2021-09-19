@extends('layout.profileLayout')
@section('body')

<div class="row p-4 rounded" style="background-color:white">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-2"> <img class="img-thumbnail " style="max-height:200px; max-width:100px" src="/img/findjob.jpg" alt="..."></div>
                                <div class="col-8" style="font-size:large; font-weight: bold;">{{$data[0]->fname." ".$data[0]->lname}}<p style="font-size:small; font-weight:normal">Dhaka, Bangladesh</p></div>
                                <div class="col-2 ml-auto"><a href="/postjob"><button type="button" class="btn btn-outline-primary rounded-pill"><b>Post A Job</b></button></a></div>
                            </div>
                        </div>
                
                        <div class="col-2">
                            <b>Education</b>
                                <p class="userEducation">
                                @if(isset($data[0]->education))         
                                  {{$data[0]->education}}
                                  @else
                                        Write your education     
                                  @endif
                                
                                </p>
                            <b>Language</b>
                                <p class="userLanguage">
                                  
                                  @if(isset($about[0]->language))         
                                  {{$about[0]->language}}
                                  @else
                                       Add Languages    
                                  @endif
                                </p>
                            <b>Overall Rating</b>
                                <p>4.8</p>
                        </div>
                        <div class="col-10">

                            <b>About Me</b><br>
                            <p class="userAbout">
                              @if(isset($about[0]->aboutme))         
                                    {{$about[0]->aboutme}}
                                    @else
                                        Write something about you!    
                                    @endif        
                      
                            </p>
                    
                </div>

            </div>
            <div class="row p-4 rounded mt-3" style="background-color:white">
                <div class="col-7">
                    <b>Job Post History</b><br>

                    @if(isset($jobpostHistory))
                    @foreach ($jobpostHistory as $value)
                              <div class="row border-bottom pt-2">
                                    <div class="col-10"><b><a href="/bidlist/{{$value->projectID}}">{{$value->title}}</a></b></div>
                                    <div class="col-2">$ {{$value->budgets}}</div>
                                    <div class="col-10 mt-1">{{$value->details}}</div>
                                    <div class="col-2">{{$value->startDate}}</div>
                                    
                                    <div class="col-12 mt-3">{{$value->keywords}}</div>
                                </div> 
                    @endforeach
                    @endif
                </div>
              </div>

@endsection  
