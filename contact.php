<?php
    include 'connection.php';
    include 'header.php';
?>

        <!-- Inner Section Start -->
        <section class="inner-area parallax-bg" data-background="images/IMG_12.jpg" data-type="parallax" data-speed="3">
            <div class="container">
              <div class="section-content">
                <div class="row">
                  <div class="col-12">
                    <h4>contact</h4>
                    <p>Home <a href="contact.php">contact</a></p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- Inner Section End -->

        <section class="contact-details pb-0">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </section>

        <section class="contact-details pb-60">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                            <h3 class="title">Contact <span>us</span></h3>
                            <form id="contact-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="your_name" id="name" class="form-control"
                                            placeholder="First Name" required name="your_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" name="your_email" id="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="phone_number" id="email" class="form-control"
                                            placeholder="Your Contact No" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="your_subject" class="form-control" placeholder="Subject"
                                            id="subject" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="contact-textarea">
                                            <textarea class="form-control" name="message" rows="6" placeholder="write Message"
                                                id="body" required></textarea>
                                            <button  class="btn btn-theme mt-4" type="submit" onclick="handleButtonClick()"
                                                value="Send an Email">Submit</button>

                                        </div>
                                    </div>
                                    <div id="form-messages"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.8200292498586!2d72.75842457527983!3d24.45702857819488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395d262c4c85ea97%3A0xa99162ed5b771bf0!2sBlueveneret%20Granites%20pvt%20ltd!5e0!3m2!1sen!2sin!4v1728395471499!5m2!1sen!2sin" width="600" height="615" 
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <h2 class="sent-notification"></h2>

       

    <a href="#" class="scrollup"><i class="flaticon-long-arrow-pointing-up" aria-hidden="true"></i></a>
        <?php
            include 'footer.php';
        ?>

      <!------------------------------------------
        Main JavaScript
      <------------------------------------------>
      <script >
        // Optional button click handler
            function handleButtonClick() {
                console.log("Button clicked!"); // Logs when button is clicked
            }

            // Form submission handler
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                console.log("Form is being submitted...");

                // Send form data to EmailJS
                emailjs.sendForm('service_gutevyp', 'template_x70n70f', '#contact-form')
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    alert('Message sent successfully!');
                }, function(error) {
                    console.error('FAILED...', error); // Changed console log to console.error for better error display
                    alert('Failed to send the message. Please try again later.');
                  });
              });
      </script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <!-- Optional JavaScript -->
      <script src="js/bootstrap-dropdownhover.min.js"></script>
      <script src="js/bootstrap-slider.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/css3-animate-it.js"></script>
      <script src="js/magnific-popup.min.js"></script>
      <script src="js/jquery.fancybox.js"></script>
      <script src="js/player-min.js"></script>

      <!-- Custom JavaScript -->
      <script src="js/script.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type ="text/javascript">
              function sendEmail(){
                  var name = $("#name");
                  var email = $("#email");
                  var subject = $("#subject");
                  var body = $("#body");
  
                  if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                      $.ajax({
                          url: 'sendEmail.php',
                          method: 'POST',
                          datatype: 'json',
                          data:{
                              name: name.val(),
                              email: email.val(),
                              subject: subject.val(),
                              body: body.val()
                          }, success: function(response){
                              $('#myForm')[0].reset();
                              $('.sent-notification').text("Message sent successfully.")
  
                          }
                          
                      });
                  }
              }
              function isNotEmpty(caller) {
                  if(caller.val()==""){
                      caller.css('border','1px solid red');
                      return false;
  
                  }
                  else{
                      caller.css('border','');
                      return true;
                  }
              }
      </script>

</body>


<!-- contact-style-248:23  -->
</html>