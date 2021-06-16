<html>
  <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style>
  video {
    background-color: #ddd;
    border-radius: 7px;
    margin: 10px 0px 0px 10px;
    width: 500px;
    height: 500px;
    }
    button {
        margin: 5px 0px 0px 10px !important;
        width: 654px;
    }
</style>
  <body >
  <div id="app">
  <video-chat></video-chat>
    </div>
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>