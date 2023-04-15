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
    <form class="mt-5" method="post" action="{{ route('store') }}" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="validationServer01">First name</label>
            <input type="text" name="firstname" class="form-control @if ($errors->has('firstname')) is-invalid @endif"  id="validationServer01" placeholder="First name">
            @if ($errors->has('firstname'))
            <div class="" style="color:red;">{{  $errors->first('firstname') }}</div>
            @endif
          </div>
         
          <div class="col-md-4 mb-3">
            <label for="validationServer02">Last name</label>
            <input type="text" name="lastname" class="form-control @if ($errors->has('lastname')) is-invalid @endif" id="validationServer02" placeholder="Last name">
            @if ($errors->has('lastname'))
            <div class="" style="color:red;">{{  $errors->first('lastname') }}</div>
            @endif
          </div>
         
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <!--<span class="input-group-text" id="inputGroupPrepend3">@</span>-->
              <input type="text" name="username" class="form-control @if ($errors->has('username')) is-invalid @endif" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3">
              @if ($errors->has('username'))
          <div class="" style="color:red;">{{  $errors->first('username') }}</div>
          @endif
              </div>
            
            </div>
          </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-5 mb-3">
              <label for="validationServer01">Image</label>
              <input type="file" name="image" class="form-control @if ($errors->has('image')) is-invalid @endif"  id="validationServer01" placeholder="First name" value="Choosefile">
              @if ($errors->has('image'))
              <div class="" style="color:red;">{{  $errors->first('image') }}</div>
              @endif
            </div>
           
            <div class="col-md-7 mb-3">
              <label for="validationServer02">Email</label>
              <input type="email" name="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="validationServer02" placeholder="Last name">
              @if ($errors->has('email'))
              <div class="" style="color:red;">{{  $errors->first('email') }}</div>
              @endif
            </div>
        </div>
       

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="validationServer01">Password</label>
              <input type="password" name="password" class="form-control @if ($errors->has('password')) is-invalid @endif"  id="validationServer01" placeholder="password">
              @if ($errors->has('password'))
              <div class="" style="color:red;">{{  $errors->first('password') }}</div>
              @endif
            </div>
           
            <div class="col-md-6 mb-3">
              <label for="validationServer02">Conformed</label>
              <input type="password" name="conformed_password" class="form-control" id="validationServer02" placeholder="password">
               
            </div>
        </div>
      

        <div class="row">
            <div class="col-md-12 mb-3">
              <label for="validationServer01">Address</label>
              <input type="text" name="address" placeholder="address" class="form-control @if ($errors->has('address')) is-invalid @endif" id="validationServer01">
              @if ($errors->has('address'))
              <div class="" style="color:red;">{{  $errors->first('address') }}</div>
              @endif
            </div>
            
        </div>
        

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="validationServer03">City</label>
            <input type="text" name="city" class="form-control @if ($errors->has('city')) is-invalid @endif"  id="validationServer03" placeholder="City">
            @if ($errors->has('city'))
            <div class="" style="color:red;">{{  $errors->first('city') }}</div>
            @endif 
          </div>
             
          <div class="col-md-3 mb-3">
            <label for="validationServer04">State</label>
            <input type="text" name="state" class="form-control @if ($errors->has('state')) is-invalid @endif"  id="validationServer04" placeholder="State">
            @if ($errors->has('state'))
            <div class="" style="color:red;">{{  $errors->first('state') }}</div>
            @endif
          </div>
         
          <div class="col-md-3 mb-3">
            <label for="validationServer05">Zip</label>
            <input type="text" name="zip" class="form-control @if ($errors->has('zip')) is-invalid @endif" id="validationServer05" placeholder="Zip">
            @if ($errors->has('zip'))
            <div class="" style="color:red;">{{  $errors->first('zip') }}</div>
            @endif
          </div>
         
        </div>
 
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" name="checkbox" type="checkbox" value="" id="invalidCheck3">
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
       
        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
     
        <a href="{{ url('/read')}}" class="btn btn-success mt-3 ms-4">All Records</a>
         
      </form>
    </div>
    @include('Footer.footer')
</body>
</html>