<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<!-- <section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

   </div>

</section> -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        how to cancel booking?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                  <strong>To cancel a booking on our real estate website, navigate to your account dashboard and locate the 'My Bookings' section. Find the specific reservation you wish to cancel, click on it, and follow the cancellation instructions provided. Please be aware of any cancellation policies and fees that may apply. If you encounter any difficulties, feel free to reach out to our customer support for assistance.
                  </strong>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingtwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                        when will I get the possession?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordion">
                  <div class="card-body">
                  <strong>Anticipate the joy of possession soon! Our efficient processes and commitment to timelines ensure a swift handover of your dream property. Experience the thrill of owning your new home sooner than you think. Your possession date is just around the corner—welcome to a future filled with comfort and happiness.
                  </strong>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingthree">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                        where can I pay the rent?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                  <div class="card-body">
                  <strong>Discover hassle-free rent payments at our real estate hub! Our user-friendly platform ensures a seamless experience. Easily pay your rent online, saving time and ensuring timely transactions. Join our community for convenient, secure, and efficient rent management. Your home, your convenience, our priority!
                  </strong>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingfour">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                        how to contact with the buyers?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                  <div class="card-body">
                  <strong>Connect with potential buyers effortlessly on our real estate website. Utilize our user-friendly interface to initiate direct communication. Seamlessly share property details, address inquiries, and schedule viewings. Your dream property is just a message away. Start engaging with buyers today!
                  </strong>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingfive">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                        why my listing not showing up?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                  <div class="card-body">
                  <strong>If your real estate listing is not appearing, ensure accurate and detailed information. Check for any incomplete fields or errors. Optimize property descriptions and use high-quality images. Confirm listing approval and visibility settings. Consider refreshing or updating the listing. If issues persist, contact customer support for assistance.
                  </strong>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="card">
                <div class="card-header" id="headingsix">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                        how to promote my listing?
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                  <div class="card-body">
                  <strong>To enhance the visibility of your real estate listing, employ a strategic marketing approach. Leverage social media platforms, emphasizing high-quality visuals and compelling descriptions. Utilize targeted online advertising to reach potential buyers. Collaborate with local real estate websites and agencies to cross-promote your listing. Optimize your listing with relevant keywords for search engine visibility.
                  </strong>
                  </div>
                </div>
              </div>
        </div>
    </div>

</div>

<div class="container-fluid p-0">
   <div class="row">
      <div class="col">
      <div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=LDA%20Raiwind%20road%20lahore+(MyHome)&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population mapping</a></iframe></div>
      </div>
   </div>
</div>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php include 'components/message.php'; ?>

</body>
</html>