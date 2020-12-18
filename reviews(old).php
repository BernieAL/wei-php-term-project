<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content = "ie=edge"/>
  <link rel ="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Find a Tutor</title>

    <!--CSS-->

    <style>

    body{
      margin: 0;
      padding: 0;
      background: white;
    }

    .rating{
      position:absolute;
      left: 50%;
      top: 20%;
      transform: translate (-50%, -50%);
      direction:  rtl;
    }

    /*.rating input{
      display: none;
    }*/

    .rating a{
      
      font-size: 40px;
      color: #313131;
      transition: 0.3s all;
    }

    .rating a:hover{
      color: #f1c40f;
    }

    .b1:hover ~ a{
      color: #f1c40f;
    }

    .b2:hover ~ a{
      color: #f1c40f;
    }

    .b3:hover ~ a{
      color: #f1c40f;
    }

    .b4:hover ~ a{
      color: #f1c40f;
    }

    .b5:hover ~ a{
      color: #f1c40f;
    }

.box{
  position: absolute;
  top: 25%;
  left: 46%;
}

.header{
  position: absolute;
  left: 45%;
  top: 5%;
}
    

    </style>
  </head>

  
  <body>

  <h1 class = "header"> Please leave a review! </h1>

  <div class = "rating"> 
      <a class = "ion-android-star b1"></a>
      <a class = "ion-android-star b2"></a>
      <a class = "ion-android-star b3"></a>
      <a class = "ion-android-star b4"></a>
      <a class = "ion-android-star b5"></a>

      
      </div>

    <div class = "box">
      <form action="" id="usrform">
      Name: <input type="text" name="usrname">
      </form>
      <br>
      <textarea rows="4" cols="50" name="comment" form="usrform"> Enter text here...</textarea> 
      <input type="submit">

      </div>



  


</body>
</html>