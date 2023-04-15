<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('Navbar.navbar')
    <div class="container">

    <form class="mt-5" method="post" action="{{ url('update/'.$edit->id) }}" enctype="multipart/form-data">
      @csrf
     

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="validationServer01">First name</label>
            <input type="text"  name="firstname" class="form-control" id="validationServer01" value="{{$edit->firstname}}"  required>
         
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer02">Last name</label>
            <input type="text"  value="{{$edit->lastname}}" name="lastname" class="form-control" id="validationServer02"  required>
       
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <!--<span class="input-group-text" id="inputGroupPrepend3">@</span>-->
              <input type="text"  value="{{$edit->username}}" name="username" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>

              </div>
            
            </div>
          </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-5 mb-3">
              <img style="height:100px;width:100px;border-radius:50%;" src="{{ asset('images/'.$edit->image) }}">
              <label for="validationServer01" class="ms-3">Image</label>
              <input type="file"   name="image" class="form-control mt-4" id="validationServer01"  value="Choosefile" required>
           </div>
            <div class="col-md-7 mb-3">
              <label for="validationServer02">Email</label>
              <input type="email"  value="{{$edit->email}}" name="email" class="form-control" id="validationServer02"   required>
            </div>
        </div>
          



        <div class="row">
            <div class="col-md-12 mb-3">
              <label for="validationServer01">Address</label>
              <input type="text"  value="{{$edit->address}}" name="address" class="form-control" id="validationServer01"  required>
           </div>
            
        </div>


        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="validationServer03">City</label>
            <input type="text"  value="{{$edit->city}}" name="city" class="form-control" id="validationServer03"  required>
          
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer04">State</label>
            <input type="text"  value="{{$edit->state}}" name="state" class="form-control" id="validationServer04"  required>
        
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer05">Zip</label>
            <input type="text"  value="{{$edit->zip}}" name="zip" class="form-control" id="validationServer05" required>
        
          </div>
        </div>
 
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" name="checkbox" type="checkbox" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
    
      
    
    </form>
    </div>
    @include('Footer.footer')
</body>
</html>