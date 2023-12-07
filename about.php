<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Choose MyHome for your real estate needs and experience unparalleled excellence. With a commitment to personalized service, a vast portfolio of premium properties, and a team of dedicated professionals, we ensure your journey to finding the perfect home is seamless. Trust MyHome for a trusted partner in your real estate endeavors.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Search Property</h3>
         <p>Discover your dream home with MyHome! Our comprehensive property search makes finding the perfect real estate a breeze. Explore a wide range of listings, from cozy apartments to spacious houses. Your ideal home is just a click away at MyHome – where your property search begins and ends.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contact Agents</h3>
         <p>Discover your dream home with MyHome! Our dedicated team of experienced real estate agents is ready to guide you through the process of buying or selling your property. Contact MyHome agents today for personalized service and expert advice. Your perfect home awaits!</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Property</h3>
         <p>Welcome to MyHome, where we redefine the art of living through our exquisite properties. Discover the epitome of comfort and luxury as you explore our meticulously curated real estate offerings. Immerse yourself in the joy of finding your perfect home,to reflect your unique lifestyle. 
         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Ahmad Raza</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Discover the excellence of MyHome through Ahmad Raza's glowing reviews. As a satisfied client, Ahmad emphasizes the seamless real estate experience, highlighting the professionalism, transparency, and personalized service. Join the ranks of delighted homeowners who entrusted their dreams to MyHome and witnessed them come to life.</p>
         <br><br>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>M Taha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Discover the unparalleled satisfaction of our MyHome services through the lens of our esteemed client, M Taha. His glowing review reflects the seamless real estate journey we provided, turning dreams into addresses. Join the ranks of satisfied homeowners with MyHome – where your aspirations find their perfect dwelling.</p>
         <br><br>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Jawwad Munir</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Jawwad Munir, our valued client, shares his experience with MyHome – a seamless journey from dream to home. The team's dedication and expertise ensured a smooth real estate transaction. Jawwad commends MyHome for their professionalism and commitment to client satisfaction. Discover your dream home with MyHome – where client satisfaction is our priority!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>M Bilal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>
Explore the seamless blend of comfort and luxury at MyHome, where satisfaction is our priority. M Bilal shares, "Exceptional service and attention to detail. MyHome made my property journey smooth and enjoyable. Trustworthy partners for your real estate dreams!" Join our satisfied clients in making MyHome your key to a remarkable real estate experience.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>M Khalid</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Discover the exceptional experiences of our valued clients at MyHome. M Khalid, one of our esteemed clients, shares, 'MyHome exceeded my expectations in every aspect of real estate. The professionalism and dedication showcased by the team ensured a seamless home-buying journey. Truly grateful for their expertise!' Join a community of satisfied homeowners with MyHome.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>M Ahmed</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Explore the transformative experience of MyHome through the lens of client M. Ahmed. Our real estate services exceeded expectations, delivering a seamless journey from search to settlement. Ahmed's glowing review reflects the commitment to excellence that defines us – your trusted partner in finding your dream home.</p>
         <br><br>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>