<?php

$conn=mysqli_connect('localhost','root','','dentist_db') or die ('connection failed');

if(isset($_POST['submit'])){
   $name =  mysqli_real_escape_string($conn, $_POST['name']);
   $email =  mysqli_real_escape_string($conn, $_POST['email']);
   $number=$_POST['number'];
   $date=$_POST['date'];

   $insert=mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,date)
    VALUES ('$name','$email','$number','$date')");
    
    if($insert){
      $message[]='Appointment made Successfully!';
    }else{
      $message[]='Appointment failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet"  href="style.css">


    <header class="header fixed-top">

   <div class="container">

<div class="row align-items-center justify-content-between">

  <a href="#home" class="logo">Dental<span>Care.</span></a>

     <nav class="nav">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#service">service</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        
     </nav>
     <a href="" class="link-btn">log in</a>     
      <a href="#contact" class="link-btn">make Appointment</a>


     <i class="fas fa-bars" id="menu-btn"></i>
</div>
   </div>

    </header>


<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Let us Brighten your smile</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores saepe omnis, 
               nostrum voluptas quis ipsa ipsnhil iure sunt mollitia autem, dolore porro!</p>
               <a href="#contact" class="link-btn">make Appointment</a>
         </div>
      </div>

   </div>
</section>

<section class="about" id="about">

 <div class="container">
     <div class="row align-items-center">

      <div class="col-md-6 image">
         <img src="about.jpg" class="w-100 mb-4 mb-md-0" alt="">
      </div>

      <div class="col-md-6 content">
         <span>About us</span>
         <h3>True Healthcare For Your Family</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius voluptate architecto nustias veroofficia enim n atque 
            Eius voluptate architecto nustias veroofficia enim n atque nobis provident distinctio!?</p>
            <a href="#contact" class="link-btn">make Appointment</a>
      </div>
     </div>

 </div>
</section>

<section class="services" id="services">

<h1 class="heading"> Our Services</h1>

   <div class="box-container container">

      <div class="box">

         <img src="protect.png" alt="">
         <h3>Alignment Specialist</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>

      <div class="box">

         <img src="cavity.png" alt="">
         <h3>Cavity Inspection</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>

      <div class="box">

         <img src="requirment.png" alt="">
         <h3>Cosmetic Dentistry</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>

      <div class="box">

         <img src="oral.png" alt="">
         <h3>Oral hygiene experts</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>

      <div class="box">

         <img src="canal.png" alt="">
         <h3>Root Canal Specialist</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>
      <div class="box">

         <img src="live.png" alt="">
         <h3>live Dentist Advisory</h3>
          <p>Lorem ipsum dolor nesciunt saepe nu sunt deleniti. Reiciendis.</p>
      </div>
   </div>
</section>

<section class="process" id="process">

   <h1 class="heading">Work Process</h1>

   <div class="box-container container">

  <div class="box">
  <img src="process-5.png" alt="">
  <h3>Cosmetic Dentistry</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia natus non ut consequuntur explicabo cumque.
    voluptas error? Voluptatum eaque cum fugiat.</p>
   </div>

   <div class="box">
      <img src="process-3.png" alt="">
      <h3>Pediatric Dentistry</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia natus non ut consequuntur explicabo cumque.
        voluptas error? Voluptatum eaque cum fugiat.</p>
       </div>

       <div class="box">
         <img src="process-4.png" alt="">
         <h3>Dental Implants</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia natus non ut consequuntur explicabo cumque.
           voluptas error? Voluptatum eaque cum fugiat.</p>
          </div>

</div>

</section>


<section class="review" id="review">

   <h1 class="heading">Satisfied Clients</h1>
   <div class="box-container container">

      <div class="box">
         <img src="review-1.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eos illum et il
             impedit debitis, quidem unde doloribus inventore id.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        <h3> Ayush kumar</h3>
       <span>Satisfied Clients</span>
      </div>

      <div class="box">
         <img src="review-2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eos illum et il
             impedit debitis, quidem unde doloribus inventore id.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        <h3> Abhishek kumar</h3>
       <span>Satisfied Clients</span>
      </div>

      <div class="box">
         <img src="review-3.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eos illum et il
             impedit debitis, quidem unde doloribus inventore id.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        <h3> Annu kumari</h3>
       <span>Satisfied Clients</span>
      </div>

   </div>
</section>

<section class="contact" id="contact">

   <h1 class="heading">make Appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <?php
  if(isset($message)){
   foreach($message as $message){
      echo '<p class="message">'. $message. '</p>';
   }
  }
  ?>
      <span>Your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box">
      <span>Your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box">
      <span>Your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box">
      <span>Appointment date :</span>
      <input type="datetime-local" name="date" class="box">
      <input type="submit" values="make Appointment" name="submit" class="link-btn">

   </form>
</section>

<section class="footer">

<div class="box-container container">

<div class="box">
   <i class="fas fa-phone"></i>
   <h3>phone Number</h3>
   <p>+123-456-7890</p>
   <p>+111-222-3456</p>
</div>

<div class="box">
<i class="fas fa-map-marker-alt"></i>
<h3>Our Address</h3>
<p>kherva, Gujarat-300801</p>
</div>

<div class="box">
<i class="fas fa-clock"></i>
<h3>Open Hours</h3>
<p>9:00am to 10:00pm</p>
</div>

<div class="box">
   <i class="fas fa-envelope"></i>
   <h3>Email-Address</h3>
   <p>dentistcare123@gmail.com</p>
   <p>abhikumar9466@gmail.com</p>
</div>
</div>

<div class="credit"> &copy; copyright @<?php echo date('Y');?> by <span>Aditya Kumar Sinha</span> </div>
</section>















<script src="script.js"></script>
</body>
</html>