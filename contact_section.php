  <!-- ================================================
  contact section
  ================================================== -->
    <!-- contact php -->
    <?php
        if(isset($_POST['submit'])) {
          $fullname = $_POST['fullname'];
          $phone_no = $_POST['phone_no'];
          $email =$_POST['email'];
          $message =$_POST['message'];

        $submit = mysqli_query($dbcon, "INSERT INTO contact (fullname, phone_no, email, message) VALUES('$fullname', '$phone_no', '$email', '$message') ");

        if($submit) {
          echo "<script>window.alert('message sent successfully'); window.location= 'index.php'</script>";
        }else{
          echo "<script>window.alert('message not sent, something went wrong'); window.location= 'index.php'</script>";
        }
      }
      ?>
  
    <!--end contact php -->

    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
          <p>
            Feel free to contact us any time. <b><?php echo $site['webname']; ?></b> always there to help you.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form_container">
              <form method="POST">
                <div>
                  <input type="text" placeholder="Your Name" name="fullname" required/>
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" name="phone_no" required/>
                </div>
                <div>
                  <input type="email" placeholder="Email" name="email" required/>
                </div>
                <div>
                  <textarea placeholder="Message" name="message" required></textarea>
                </div>
                <div class="btn_box">
                  <button type="submit" name="submit">
                    SEND
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="img-box">
              <img src="./assets/images/contact-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- ================================================
  end contact section
  ================================================== -->