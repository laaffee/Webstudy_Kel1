<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/ede70cc9f6.js" crossorigin="anonymous"></script>
  </head>
    <body>
    
    <div class="bg">
    <img src="image.png" alt="">
        </div>
        <button type="" class="btn6"><i class="fa-solid fa-chevron-left"></i><a href="home.php" class="fa-solid fa-chevron-left"></a></button>
        <div class="text">
            <h2>🔥 Daily Feedback </h2>
            <br>
            <div class="fb4">
            <h4>Terimakasih telah menggunakan study spaces untuk menemani belajar anda setiap umpan balik, kritik, saran dan lain lain. akan membantu kami menjadikan website ini lebih baik untuk anda</h4>
            </div>
            <form action="feedback2.php" method="post">
           
            <div class="text2">
            <label for="fname">Apa yang anda sukai dari study spaces?😍</label>
            <input type="text" id="fname" name="value1">

            <label for="lname">Apa yang kalian kurang sukai dari study spaces?😤</label>
            <input type="text" id="lname" name="value2">

            <label for="lname">Hal apakah yang harus kami perbaiki untuk anda?</label>
            <input type="text" id="lname" name="value3">
            </div>

            <input type="submit" name="submit" style="float: right; background-color: brown;color: white;" value="Submit">
            </form>
        </div>
    
            
    </body>

</html>