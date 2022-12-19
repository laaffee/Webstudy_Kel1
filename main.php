<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study Spaces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/ede70cc9f6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div>
      <span class="border"></span>
    </div>


    <img src="bg.gif" alt="">
    <div>
      <i class="fa-solid fa-image"></i><a href="#" class="fa-solid fa-image"></a>
      <i class="fa-solid fa-clock-rotate-left"></i><a href="#" class="fa-solid fa-clock-rotate-left"></a>
      <i class="fa-solid fa-volume-up"></i><a href="#" class="fa-solid fa-volume-up"></a>
      <i class="fa-solid fa-music"></i><a href="#" class="fa-solid fa-music"></a>
      <i class="fa-solid fa-pen-to-square"></i><a href="#" class="fa-solid fa-pen-to-square"></a>
    </div>

    <button type="" class="btn1"><i class="fa-regular fa-user"></i><a style ="color: inherit" href="" class="fa-regular fa-user"></a></button>
    <button type="" class="btn2"><i class="fa-brands fa-gratipay"><i class="fa-solid fa-1"></i></i></button>
    <button type="" class="btn3"><i class="fa-solid fa-share-nodes"></i><a style ="color: inherit" href="#share" class="fa-solid fa-share-nodes"></a></i></button>
    <button type="" class="btn4"><i class="fa-regular fa-comment"></i><a style ="color: inherit" href="#popup" class="fa-regular fa-comment"></a></button>
    <button type="" class="btn5"><i class="fa-solid fa-rocket"></i><a style ="color: inherit" href="signup.php">Sign Up</a></button>
 
    <div class="popup" id="popup">
      <div class="popup_inside">
        <a href="#" class="popup_close">&times;</a>
        <div class="popup_header">
          <h1>Contact Us</h1>
          <hr>
        </div>
        <div class="popup_text">
          <h2>Office Address:</h2>
          <p>Pakuan University, Faculty Mathematics and Natural Sciences Building</p>
          <br>
          <h2>Email:</h2>
          <p>study_spaces@unpak.ac.id</p>
          <br>
          <h2>Phone:</h2>
          <p>022-456-78900</p>
        </div>
      </div>
    </div>

    <div class="profile" id="profile">
      <div class="profile_inside">
        <a href="#" class="profile_close">&times;</a>
        <div class="profile_header">
          <h2>Profile</h2>
          <i class="fa-solid fa-user"></i>
          <br>
        </div>
      <div class="profile_detail">
        <button class="btn_profile">Profile</button>
      </div> 
      <div class="profile_text">
        <h3>Username</h3>
        <p>Alexnder Boutista</p>
        <h3>Email Address</h3>
        <p>alexander12@gmail.com</p>
      </div>
      </div>
    </div>
    
    <div class="share" id="share">
      <div class="share_inside">
        <a href="#" class="share_close">&times;</a>
        <div class="share_header">
          <h2>Share With Others</h2>
          <br>
        </div>
      <div class="share_text">
          <p>Copy the link to share with your friends!</p>
      </div>
      <div class="share_shape">
        <input id="text" class="text" value="Bit.ly/StudySpaces">
        <br><br>
        <button class="btn_copy" onclick="copyText()">share</button>
        <script>
          function copyText() {  
            var copyText = document.getElementById("text");  
            copyText.select();  
            document.execCommand("copy");
        }
        </script>

        
      </div>
    </div>
  </body>
</html>
