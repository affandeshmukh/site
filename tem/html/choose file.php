
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="new.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
   <style>

</style> 
</head>
<body>

<div class="header"><a>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span></a>
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="inde.php">Home</a>
    <a href="/tem/html.php">Html Example</a>
    <a href="/tem/css.php">Css Example</a>
    <a href="/tem/js.php">Javascript Example</a>
    <a href="/tem/php/php.php">Php Example</a>
    <a href="/#">About</a>
  </div>
</div>
<div class="he">
  <div class="topnav">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="simple form.php">Simple form</a>
  <a href="sign in and sign up.php">Sign in Sign up</a>
  <a href="Click color name.php">Click color name</a>
  <a href="image link.php">Image link to second html page</a>
  <a href="marquee tag.php">Marquee tag</a>
  <a href="textarea.php">Textarea tag</a>
  <a href="tab tag.php">Tab tag</a>
  <a href="scroll the page.php">Scroll page</a>
  <a href="Input Button.php">Input button</a>
  <a class="active" href="choose file.php">choose file</a>
</div>

<div id="main">
  
 </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>    
<img src="/tem/images/scoll.png">
<center>
<a href="scroll the page.php" class="button button2">&larr; preview </a>    
<a href="/tem/zip/scroll.zip" class="button button5">click me for download code</a>
<a href="/tem/demo/scroll.php" class="button button5">Demo</a>

<a href="choose file.php" class="button button2">next &rarr;</a>


</div>




</body>
</html>