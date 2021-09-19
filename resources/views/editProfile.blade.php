@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-2"> <img class="img-thumbnail " style="max-height:200px; max-width:100px" src="/img/findjob.jpg" alt="..."></div>
                                <div class="col-8" style="font-size:large; font-weight: bold;" ><div class="UserName" contentEditable="true">{{$data[0]->fname." ".$data[0]->lname}}</div><p style="font-size:small; font-weight:normal"><span class="userLocation" contentEditable="true">Dhaka, Bangladesh</span></p></div>
                                <div class="col-2 ml-auto"><button type="button" class="mr-2 btn btn-success rounded-pill" onclick="updateprofile()"><b>Save</b></button>
                                <button type="button" class="btn btn-outline-danger rounded-pill" onClick="window.location.reload();"><b>Cancel</b></button>
                              </div>
                            </div>
                        </div>
                
                        <div class="col-2">
                            <b>Education</b>
                                <p class="userEducation" contentEditable="true">
                                @if(isset($data[0]->education))         
                                  {{$data[0]->education}}
                                  @else
                                        Write your education     
                                  @endif
                                
                                </p>
                            <b>Language</b>
                                <p class="userLanguage" contentEditable="true">
                                  
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
                            <p class="userSkills" contentEditable="true">
                            @if(isset($about[0]->skills))         
                                  {{$about[0]->skills}}
                                  @else
                                       Add skills    
                                  @endif

                            </p>

                            <b>About Me</b><br>
                            <p class="userAbout" contentEditable="true">
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

@section('script')
<script>
  function updateprofile(){
    var education = document.getElementsByClassName('userEducation')[0].innerHTML;
    var skills = document.getElementsByClassName('userSkills')[0].innerHTML;
    var about = document.getElementsByClassName('userAbout')[0].innerHTML;
    var userName = document.getElementsByClassName('UserName')[0].innerHTML;

   
    var fname= userName.substr(0,userName.indexOf(' '));
    var lname = userName.substr(userName.indexOf(' ')+1); 

    data = [education, skills, about, fname, lname];


    post(data);

  }


  function post(params) {
    document.body.innerHTML += '<form id="dynForm" action="edit" method="post">@csrf<input type="hidden" name="education" value="'+params[0]+'"><input type="hidden" name="skills" value="'+params[1]+'"><input type="hidden" name="about" value="'+params[2]+'"><input type="hidden" name="fname" value="'+params[3]+'"><input type="hidden" name="lname" value="'+params[4]+'"></form>';
    document.getElementById("dynForm").submit();
}


</script>
@endsection