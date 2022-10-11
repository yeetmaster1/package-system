   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<title>esri package system</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, .form, input, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 13px;
      color: #666;
      line-height: 22px;
      }
      legend { 
      color: #fff;
      background-color: #095484;
      padding: 3px 5px;
      font-size: 20px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 36px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0  #095484; 
      }
      .banner {
      position: relative;
      height: 320px;  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:#095484;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color:#095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #095484;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #4286f4;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input,.name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
      .error {
      color: red
    }
    </style>




<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand">
        <img src="/images/logo.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
        esri package system
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    <button class="btn mr-sm-2" id="view_packages" >view packages</button>
    <button id="logout" class="btn btn-outline-success my-2 my-sm-0" >Logout</button>
    </div>
  </nav>
  
  
 
    <div class="testbox">
    <div class="form">
      <div class="banner">
        <h1>Package profile Creator</h1>
      </div>
      <hr/>
      <fieldset>
        <legend>Package information</legend>
        <div class="item">
          <label for="name">Company Name<span>*</span></label>
          <div>
                <select name="company" class="company_id">
                  <option selected value="" disabled selected>Company</option>
                  <option value="fedex">FedEx</option>
                  <option value="ups">UPS</option>
                </select>
              </div>
        </div>
        <div class="item">
          <label for="address">Company Service<span>*</span></label>
          <div>
                <select name="service" class="service_id">
                </select>
            </div>
        </div>
        <div class="item">
          <div class="name-item">
            <div>
              <input type="text" name="width" class="width" placeholder="width [cm]" />
            </div>
            <div>
              <input type="text" name="height"  class="height" placeholder="height [cm]" />
            </div>
          </div>
          <div class="item">
            <div class="name-item">
              <div>
                <input type="text" name="length" class="length" placeholder="length [cm]" />
              </div>
              <div>
                <input type="text" name="weight" class="weight" placeholder="weight [gram]" />
              </div>
            </div>
          </div>
      </fieldset>
      </br>
      <div class="btn-block">
      <button type='button' class='Create-packages'>Create Package</button>
      </div>
    </div>
    </div>


<script>

$(document).ready(function () {

    $('.company_id').on('change', function () {
    //this functions allows us to select the company and service dynamically
       var opt =  $('.company_id option:selected').val();
       console.log(opt);

       if (opt == 'fedex') {
        $('.service_id').html('')
        $('.service_id').append(
            '     <option selected value="" disabled selected>Service</option>\
                  <option value="fedexAIR">FedexAIR</option>\
                  <option value="fedexGroud">FedexGroud</option>'
        );
       }else{
        $('.service_id').html('')
        $('.service_id').append(
            '     <option selected value="" disabled selected>Service</option>\
                  <option value="UPSExpress">UPSExpress</option>\
                  <option value="UPS2DAY">UPS2DAY</option>'
        );
       };
    });

    $(document).on('click','#view_packages', function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/view-packages",
            success: function (response) {
                window.location = response.redirect_location
            }
        });

    });


    $(document).on('click','#logout', function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/logout",
            success: function (response) {
                window.location = 'login'
            }
        });

    });

    $(document).on('click', '.Create-packages',  function (e) {
        e.preventDefault();
        data = {
            'userID': {{$user = Auth::user()->id;}},
            'company': $('.company_id option:selected').val(),
            'service': $('.service_id option:selected').val(),
            'width' : $('.width').val(),
            'height' : $('.height').val(),
            'length' : $('.length').val(),
            'weight' : $('.weight').val(),
        };
        $.ajaxSetup({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        $.ajax({
            type: "POST",
            url: "/Add_package",
            data: data,
            dataType: "json",
            success: function (response) {
                console.log(response.status);
                alert('your package profile has been created succefully');
            },
            error: function (response) {  
                if (response.status == 422) {
                $(".alert").remove();
                var erroJson = JSON.parse(response.responseText);
                for (var err in erroJson) {
                    for (var errstr of erroJson[err])
                        console.log(err);
                        $("[name='" + err + "']").after("<div class='alert alert-danger'>" + errstr + "</div>");
                     }
            }
        }

    });
});


});


</script>