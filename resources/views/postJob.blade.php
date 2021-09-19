@extends('layout.profileLayout')
@section('body')
                <div class="row p-4 rounded" style="background-color:white">
                        <div class="col-12 mb-4">
                            <div class="row">
                              <form action="postjob" method="post">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="inputEmail4">Project Title</label>
                                    <input name="title" type="text" class="form-control" id="inputEmail4" placeholder="Project Title">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">Budget</label>
                                    <input name="budget" type="int" class="form-control" id="inputPassword4" placeholder="Budget">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Keywords</label>
                                  <input name="keyword" type="text" class="form-control" id="inputAddress" placeholder="Keywords">
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="inputEmail4">details</label>
                                    <textarea name="details"  class="form-control" id="inputEmail4" placeholder="projectDetails"></textarea>
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="inputEmail4">Deadline Date</label>
                                    <input type="date" id="birthday" name="endDate">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">Upload Image</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                  </div>
                                </div>
     
                                <button type="submit" class="btn btn-primary">Post Job</button>
                              </form>
                          </div>
</div>
@endsection