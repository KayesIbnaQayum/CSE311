@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">
                        <div class="col-2">
                    
                            <h5>Project Details</h5>
                            <b>Budget</b>
                                <p>{{"$".$data[0]->budgets}}</p>
                            <b>Deadline</b>
                                <p>{{$data[0]->endDate}}</p>
                            <b>Total Bids</b>
                                <p>20</p>                              
                            </hr>
                            <h5>Employeer Details</h5>
                            <div> <img class="img-thumbnail " style="max-height:200px; max-width:100px" src="/img/findjob.jpg" alt="..."></div>
                            <b>Employeer Name</b>
                                <p>{{$data[0]->fname." ".$data[0]->lname}}</p>
                            <b>Ratings</b>
                                <p>4.9</p>
                                <hr/>

                        </div>
                        <div class="col-10">
                            <div class="ml-auto d-flex flex-row-reverse"><a href="/bid"><button type="button" class="mr-2 btn btn-primary rounded-pill"><b>Bid</b></button></a></div>
                            <!--image slider-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="/img/togather.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                              <!--End image slider-->

                              <h5>Project Description</h5>
                              <span >{{$data[0]->details}}</span>
                    
                </div>
                <!--Works history-->
                <div class="row p-4 rounded mt-3" style="background-color:white">
                    <b>Comments</b>
                </div>
@endsection