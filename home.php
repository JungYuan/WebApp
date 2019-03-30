<!doctype html>
<html lang="en">
  <script src="W3include.js"></script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Home</title>
  </head>
  <body>
    <!--h1 class="fixed-top" style="text-align:center;background-color:DodgerBlue;color:white">Bootstrap Practices</h1-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <header class="fixed-top">
      <div w3-include-html="main_manu.html"></div>
      <script>
        includeHTML();
      </script>
    </header>
    <article class="container-fluid" style="padding-top: 150px; padding-bottom: 80px;
                                            background:#eeeeee";>
      <div class="container mx-auto font-weight-bolder">
        <div class="bg-info text-white text-center p-1"><h4>郵遞區號資料庫</h4></div>
  		  <?php
          include ('home_php.php')
        ?>
      </div>
    </article>
    <footer class="fixed-bottom btn-primary">
      <div w3-include-html="footer.html"></div>
      <script>
        includeHTML();
      </script>
    </footer>
  </body>
</html>
