@extends('layout.profileLayout')
@section('body')

                <div class="row p-4 rounded" style="background-color:white">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-2"> <img class="img-thumbnail " style="max-height:200px; max-width:100px" src="/img/findjob.jpg" alt="..."></div>
                                <div class="col-8" style="font-size:large; font-weight: bold;">{{$data[0]->fname." ".$data[0]->lname}}<p style="font-size:small; font-weight:normal">Dhaka, Bangladesh</p></div>
                                <div class="col-2 ml-auto"><a href="/edit"><button type="button" class="btn btn-outline-success rounded-pill"><b>Edit Profile</b></button></a></div>
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
                            <b>Skills</b><br>
                            <p class="userSkills">
                            @if(isset($about[0]->skills))         
                                  {{$about[0]->skills}}
                                  @else
                                       Add skills    
                                  @endif

                            </p>

                            <b>About Me</b><br>
                            <p class="userAbout">
                              @if(isset($about[0]->aboutme))         
                                    {{$about[0]->aboutme}}
                                    @else
                                        Write something about you!    
                                    @endif        
                      
                            </p>
                            <div class="pt-4"><b>Protfolio</b><br>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKRTKaZNWcdS34sKwWOEufSaBTG313pP71KQ&usqp=CAU" class="rounded img-thumbnail" style="max-height:200px; max-width:200px" alt="...">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKRTKaZNWcdS34sKwWOEufSaBTG313pP71KQ&usqp=CAU" class="rounded img-thumbnail" style="max-height:200px; max-width:200px" alt="...">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKRTKaZNWcdS34sKwWOEufSaBTG313pP71KQ&usqp=CAU" class="rounded img-thumbnail" style="max-height:200px; max-width:200px" alt="...">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKRTKaZNWcdS34sKwWOEufSaBTG313pP71KQ&usqp=CAU" class="rounded img-thumbnail" style="max-height:200px; max-width:200px" alt="...">
                            </div>
                    
                     </div>
                </div>
                <!--Works history-->
                <div class="row p-4 rounded mt-3" style="background-color:white">
                    <b>Work History</b>
                </div>
                <!--Certifications-->
                <div class="row p-4 rounded mt-3" style="background-color:white">
                    <b>Certifications</b>
                </div>
  @endsection          