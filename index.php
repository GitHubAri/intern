<!DOCTYPE html>
<html>
<title>View Peoples</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}

div.polaroid {
    
  box-shadow: 10px 10px 5px #aaaaaa;
}

</style>
<body>


<?php 

require('connect.php');

if(isset($_POST) & !empty($_POST)){
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $subject = mysqli_real_escape_string($connection, $_POST['subject']);

  $isql = "INSERT INTO comments (name, email, subject, status) VALUES ('$name', '$email', '$subject', 'draft')";
  $ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
  if($ires){
    $smsg = "Your Comment Submitted Successfully";
  }else{
    $fmsg = "Failed to Submit Your Comment";
  }

 }
?>


<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Peoples</a>
  <a href="login\login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login Here</a>
  <a href="viewcomments.php" onclick="w3_close()" class="w3-bar-item w3-button">View Comments</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Peoples</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-20 w3-center" id="food">
    <a href="rabi.php">
      <div class="w3-quarter polaroid" onmouseover="bigImg(this)">
        <img src="rabi.jpg" style="width:100% border-top-left-radius: 30px; border-top-right-radius: 30px;">
        <h3>Rabindranath Tagore, A Real Hero</h3>
        <p>Rabindranath Tagore FRAS (/rəˈbɪndrənɑːt tæˈɡɔːr/ (About this soundlisten); born Robindronath Thakur,[1] 7 May 1861 – 7 August 1941),[a] and also known by his sobriquets Gurudev,[b] Kabiguru, and Biswakabi, was a Bengali polymath, poet, musician, and artist from the Indian subcontinent.</p>
      </div>
    </a>
    
    <a href="modi.php">
      <div class="w3-quarter polaroid" id="show">
        <img src="modi.jpg" style="width:100% border-top-left-radius: 30px; border-top-right-radius: 30px;">
        <h3>Narendra Damodardas Modi</h3>
        <p>Narendra Damodardas Modi (pronounced [ˈnəɾendrə dɑmodəɾˈdɑs ˈmodiː] (About this soundlisten); born 17 September 1950) is an Indian politician serving as the 14th and current Prime Minister of India since 2014. He was the Chief Minister of Gujarat from 2001 to 2014, and is the Member of Parliament for Varanasi. .</p>
      </div>
    </a>
    
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    
    
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">


<!-- Comment -->
<div class="panel panel-default">
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
    <form action="" method="POST" name="comments">
      <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Subject</label>
      <textarea name="subject" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>

<br>

  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Hello! this is test Footer.</p>
      <p>Developed by <a href="http://aritraghosh.orgfree.com" target="_blank">Aritra Ghosh</a></p>
    </div>
  </footer>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}


</script>

</body>
</html>
