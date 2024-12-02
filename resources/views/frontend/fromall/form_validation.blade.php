@extends('layouts.webmaster')
@section('web_content')

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8 card">
            <form action="from_validation" method="post">
              <h3>Validation form </h3>
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" name="name" class="form-control {{$errors->first('name')? 'input_error':''}} " id="exampleInputEmail1" aria-describedby="name" value="{{old('name')}}"
                  >
                  <div id="name" class="form-text text-danger">@error('name'){{$message}} @enderror</div>
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Email</label>
                  <input type="email" name="email" class="form-control {{$errors->first('email')? 'input_error':''}}" id="exampleInputEmail1"  value="{{old('email')}}">
                  <div id="name" class="form-text text-danger">@error('email'){{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Phone</label>
                  <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="phone" value="{{old('phone')}}" >
                  <div id="name" class="form-text text-danger">@error('phone'){{$message}} @enderror</div>
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
                        <div id="name" class="form-text text-danger">@error('skil'){{$message}} @enderror</div>
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
                       
                        <div id="name" class="form-text text-danger">@error('gender'){{$message}} @enderror</div>
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
                      <div id="name" class="form-text text-danger">@error('country'){{$message}} @enderror</div>
                      </div>
                      <!-- rpw emd  -->
                      <div class="col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Select your Age</label> 
                      <br>
                        <div class="form-check form-check-inline">
                        <input type="range" name="age" class="form-range" min="0" max="100" id="customRange2">
                        </div>
                       
                        <div id="name" class="form-text text-danger">@error('age'){{$message}} @enderror</div>
                      </div>
                  </div>
                </div>
                <!-- end  -->
                
              <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="condition" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Accept our Trems & Condition </label>
                <div id="name" class="form-text text-danger">@error('condition'){{$message}} @enderror</div>
              </div>
              </div>
                <!-- end  -->
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



        </div>

        {{-- errors  --}}
        <div class="col-lg-4 card">
            {{-- all errors showing is here s --}}
            @if($errors->any())
            @foreach ($errors->all() as $error)
              <div class="mt-2">
                <p class="text-danger">{{$error}}</p>
              </div>
            @endforeach
            @endif 
            {{-- erroes end here  --}}

            {{-- showing form data  --}}
              @if(Session::has('info'))
                @php
                    $info = Session::get('info');
                @endphp

                <ul>
                  <h3>User Information </h3>
                  <li>Name: {{ $info['name'] }}</li>
                  <li>Email: {{ $info['email'] }}</li>
                  <li>Phone : {{ $info['phone'] }}</li>
                  <li>Gender: {{ $info['gender'] }}</li>
                  <li>Country : {{ $info['country'] }}</li>
                  <li>Age : {{ $info['age'] }}</li>
                  <li>Condition : {{ $info['condition'] }}</li>
                </ul>

                <ul>
                  your skilled: 
                  @foreach($info['skil'] as $skill)
                      <li>{{ $skill }}</li>
                  @endforeach
              </ul>
              


              @endif




        </div>
    </div>
    </div>

</div>
@endsection
