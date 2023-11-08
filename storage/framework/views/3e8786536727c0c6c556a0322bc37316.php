<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/homepage.css" rel="stylesheet">
    <title img src="img/Logo.jpg">Cropmate | About</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>

* {
  box-sizing: border-box;
}
.column {
  float: left;
  padding: 20px;
  height: 300px;
}
.left {
  width: 50%;
  text-align: right;
}
.right {
  width: 50%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
  margin: 20px;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.team {
  background-color: white;
  width: 100%;
  padding: 20px;
  margin: 10px;
  box-shadow: 2px 2px 8px black;
}

</style>

</head>
<body>

    

    <section class="menu" id="menu">
      <div class="row">
        <div class="column left">
          <h1 class="titleText" style="text-align: right; text-shadow: 2px 2px 4px white";><span>CROPMATE</span></h1>
          <p style="text-align: right;"><i>Welcome to Cropmate.
            Cropmate Modernizing Agriculture is a project focused on revilutionizing the agriculture sector
            in Malaysiathrough IoT-based monitoring solutions.
            Our team aims to offer sustainable and efficient methods to modernize farming practices.
          </i></p>
        </div>
        <div class="column right">
          <img class="mySlides" src="img/1.jpg" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/2.jpg" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/3.jpg" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
          <img class="mySlides" src="img/4.jpg" style="border-radius: 10px; box-shadow: 2px 2px 8px black; width:100%">
        </div>
      </div><br>

       <h2 class="titleText2" style="text-align: left; text-shadow: 2px 2px 4px black";><span>SUPERVISED BY</span></h2>
       <div class="team">
         <p>Dr. Noor Azizah Bt Mohamadali</p>

       </div>
       <h2 class="titleText2" style="text-align: left; text-shadow: 2px 2px 4px black";><span>OUR TEAM</span></h2>
       <div class="team">
         <p>Muhammad Afiq Bin Abdul Patah</p>
         <p>1917837</p>
       </div>
       <div class="team">
         <p>Muhammad Haikal Bin Md Shariff</p>
         <p>1928873</p>
       </div>


  </section>

    <script type="text/javascript">

        <!--Slide-->
        var myIndex = 0;
        carousel();
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
}
    </script>
  </body>
  </html>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FYP-Project\resources\views/about.blade.php ENDPATH**/ ?>