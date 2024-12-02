<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <div class="container mt-5">
        <div class="col-lg-8 offset-lg-2 card">
            <form action="submit-form1" method="post">
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
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



        </div>
    </div>

</div>
