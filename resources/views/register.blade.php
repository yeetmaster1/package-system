<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>registration </title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script type="text/javascript" src="index.js"></script>
  <style>
    .error {
      color: red
    }
  </style>
</head>
<body class="antialiased">
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h3>Registration process</h3>

            
            <form method="post" id="handleRegisterAjax" action="{{url('do-register')}}" name="postform">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" />
                @csrf
              </div>
              <div class="form-group">
                <label>Telephone</label>
                <input type="tel" name="telephone" value="{{old('telephone')}}" class="form-control" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" />
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" />
              </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">REGISTER</button>
                <br></br>
                <h6>if your already a user <a href="http://127.0.0.1:8000/login">click here</a></h6>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(function(){
     
      $(document).on("submit","#handleRegisterAjax",function(){
            var e=this;
       
            $(this).find("[type='submit']").html("REGISTER...");
            $.post($(this).attr('action'),$(this).serialize(),function(data){
              
              $(e).find("[type='submit']").html("REGISTER");
              if(data.status){
                alert(data.msg)
                window.location=data.redirect_location;
              }
              

            }).fail(function(response) {
             
              $(e).find("[type='submit']").html("LOGIN");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);
              for (var err in erroJson) {
                for (var errstr of erroJson[err])
                $("[name='" + err + "']").after("<div class='alert alert-danger'>" + errstr + "</div>");
              }

            });
        return false;
      });

    });
  </script>
</body>

</html>