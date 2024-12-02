@extends('layouts.webmaster')
@section('web_content')


<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <div class="container mt-5">
        <div class="col-lg-8 offset-lg-2 card">
            <form action="basic-form" method="post">
              <h3>User Contact Form</h3>
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" name="name" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                  <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Phone</label>
                  <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="phone">
                  <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
                </div>


                <div class="mb-3">
                  <div class="row">
                      <div class="col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Select your Skill</label> 
                      <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="skil[]" id="inlineCheckbox1" value="html">
                          <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="skil[]" id="inlineCheckbox2" value="css">
                          <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="skil[]" id="inlineCheckbox3" value="javascript" >
                          <label class="form-check-label" for="inlineCheckbox3">Javascript</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="skil[]" id="inlineCheckbox3" value="python" >
                          <label class="form-check-label" for="inlineCheckbox3">Python</label>
                        </div>
                        <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      <!-- rpw emd  -->
                      <div class="col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Select your Gender</label> 
                      <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" name="gender" type="radio" id="male" value="male">
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                          <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                          <label class="form-check-label" for="other">other</label>
                        </div>
                       
                        <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                  </div>
                </div>
                <!-- end  -->
                

                <div class="mb-3">
                  <div class="row">
                      <div class="col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Select your Country </label> 
                      <br>
                      <select class="form-select" aria-label="Default select example" name="country">
                        <option selected>Select your country </option>
                        <option value="Bangladesh">Bangladesh </option>
                        <option value="USA">USA</option>
                        <option value="Uk">Uk</option>
                      </select>
                        <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      <!-- rpw emd  -->
                      <div class="col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Select your Age</label> 
                      <br>
                        <div class="form-check form-check-inline">
                        <input type="range" name="age" class="form-range" min="0" max="100" id="customRange2">
                        </div>
                       
                        <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                  </div>
                </div>
                <!-- end  -->
                
              <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="condition" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Accept our Trems & Condition </label>
              </div>
              </div>
                <!-- end  -->
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



        </div>
    </div>

</div>
@endsection
