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
  top: 15%;
}

.rating2{

      position:absolute;
      top: 55%;
     
}

.rating2 a{
      
      font-size: 20px;
      color: #f1c40f;
    }

.reviewer{
position: absolute;
top: 50%;
}

.review-box{
position: absolute;
top: 60%;
border: 1px solid;
}

.reviewer2{
position: absolute;
top: 70%;
}

.rating3{

      position:absolute;
      top: 75%;
     
}

.rating3 a{
      
      font-size: 20px;
      color: #f1c40f;
    }

.review-box2{
position: absolute;
top: 80%;
border: 1px solid;
}

.b14 ~ a{
      color: black;
    }



    

    </style>
  </head>

  
  <body>
  <?php
  include('docs/includes/header.php');
?>

<div id="review-input-section">
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
</div>

<div id = "reviews">
    <h4 class = "reviewer">By: JT</h3>
    <div class = "rating2">
          <a class = "ion-android-star b6"></a>
          <a class = "ion-android-star b7"></a>
          <a class = "ion-android-star b8"></a>
          <a class = "ion-android-star b9"></a>
          <a class = "ion-android-star b10"></a>
    </div>

    <p class = "review-box">One of the best tutors on campus! They explained everything
    thoroughly and I would highly recommend them if you need help with any subject related
    to computer science. Now I feel a lot more confident going into my next test.
    I will definiely book with them again!</p>

    <h4 class = "reviewer2">By: Jane Doe</h3>
    <div class = "rating3">
          <a class = "ion-android-star b11"></a>
          <a class = "ion-android-star b12"></a>
          <a class = "ion-android-star b13"></a>
          <a class = "ion-android-star b14"></a>
          <a class = "ion-android-star b15"></a>
    </div>
</div>
<p class = "review-box2">I think they are a great tutor and would recommend them.
However, the reason why I gave them a four star and not a five star is because they 
were running behind a bit on schedule so they showed up a little late. However, that was
overlooked by their very helpful ways of teaching. They did a great job of explaining
any confusion I had and now I have a better understanding of the material. This site
really helped in choosing the best tutors.</p>



  


</body>
</html>