<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tyno-chat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{asset('distlog/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
  .buttonload {
    background-color: #e8716d; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px /* Set a font size */
  }
</style>
<section class="user">
    
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
     

      @if($errors->any())
           <div id="error" class="alert alert-danger">{{$errors->first()}}</div>
        @endif

        <!-- <p class="user_unregistered-text">Sign up now to connect to your friend</p>
        <button class="user_unregistered-signup"  >Sign Up</button> -->
      </div>

      <div class="user_options-registered">
      <h2 class="user_unregistered-title">You back ?</h2>
        <p class="user_registered-text">login now to keep connect to you fiend</p>
        <button class="user_registered-login" onclick="window.location.href='/'" id="login-button">Log in</button>
      </div>
    </div>
    
    <div class="user_options-forms bounceLeft" id="user_options-forms">
      <div class="user_forms-signup">
        <h2 class="forms_title">ResetPassWord</h2>
        <form id="forgot" method="POST"  class="forms_form">
        @csrf
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Email" name="email" class="forms_field-input"  />
            </div>
            <div class="forms_field">
              <input  type="password" name="password" placeholder="New PassWord" class="forms_field-input"  />
            </div>
          </fieldset>
          <div id="send" class="forms_buttons">
            <input type="submit" value="SendMail" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <script>
        $("#forgot").submit(function() {
        event.preventDefault();
        var data = $("#forgot").serialize();
        $("#send").html('<button class="buttonload"><i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading</button>');
        
        $.ajax({
            url:"/forgot",
            type:"post",
            data: data,
            
            success : function (e){
            toastr.success("Mail sender,Please check your email");
            $("#send").html('<input type="button" onclick=\'window.location.href="/"\' value="Login" class="forms_buttons-action">');
            
            },
            error : function (e){    
            console.log(e)
            $("#send").html('<input type="submit" value="SendMail" class="forms_buttons-action">');
            var k=e.responseJSON;
            for(var j in k.errors)
                toastr.error(k.errors[j][0]);
            }
        });
        });
  </script>
</body>
</html>
