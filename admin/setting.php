<?php
include("header.php");
include("nav/sidebar.php");


$getid = 10;
$collect = mysqli_query($con, "SELECT * FROM site_info where site_id='$getid' ");
$site = mysqli_fetch_array($collect);


if (isset($_POST['change1'])) {

  $webname = stripslashes($_POST["webname"]);
  $phone_no = stripslashes($_POST["phone_no"]);
  $email = stripslashes($_POST["email"]);
  $address = stripslashes($_POST["address"]);

  $webname = mysqli_real_escape_string($con, $webname);
  $phone_no = mysqli_real_escape_string($con, $phone_no);
  $email = mysqli_real_escape_string($con, $email);
  $address = mysqli_real_escape_string($con, $address);

  $change1 = mysqli_query($con, "UPDATE site_info SET webname='$webname', phone_no= '$phone_no', email='$email', address='$address' where site_id='$getid' ");

  if ($change1) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

if (isset($_POST['change2'])) {

  $welcome_note = stripslashes($_POST["welcome_note"]);
  $work_hours = stripslashes($_POST["work_hours"]);
  $work_days = stripslashes($_POST["work_days"]);
  $facebook_link = stripslashes($_POST["facebook_link"]);
  $whatsapp_link = stripslashes($_POST["whatsapp_link"]);
  $instagram_link = stripslashes($_POST["instagram_link"]);
  $youtube_link = stripslashes($_POST["youtube_link"]);
  $twitter_link = stripslashes($_POST["twitter_link"]);
  $github_link = stripslashes($_POST["github_link"]);
  $web_link = stripslashes($_POST["web_link"]);

  $welcome_note = mysqli_real_escape_string($con, $welcome_note);
  $work_hours = mysqli_real_escape_string($con, $work_hours);
  $work_days = mysqli_real_escape_string($con, $work_days);
  $facebook_link = mysqli_real_escape_string($con, $facebook_link);
  $whatsapp_link = mysqli_real_escape_string($con, $whatsapp_link);
  $instagram_link = mysqli_real_escape_string($con, $instagram_link);
  $youtube_link = mysqli_real_escape_string($con, $youtube_link);
  $twitter_link = mysqli_real_escape_string($con, $twitter_link);
  $github_link = mysqli_real_escape_string($con, $github_link);
  $web_link = mysqli_real_escape_string($con, $web_link);

  $change2 = mysqli_query($con, "UPDATE site_info SET welcome_note='$welcome_note', work_hours= '$work_hours', work_days='$work_days', facebook_link='$facebook_link', whatsapp_link='$whatsapp_link', instagram_link='$instagram_link', youtube_link='$youtube_link', github_link='$github_link', twitter_link='$twitter_link', web_link='$web_link' where site_id='$getid' ");

  if ($change2) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

if (isset($_POST['change3'])) {

  $about_heading = stripslashes($_POST["about_heading"]);
  $about_content = stripslashes($_POST["about_content"]);

  $about_heading = mysqli_real_escape_string($con, $about_heading);
  $about_content = mysqli_real_escape_string($con, $about_content);

  $change3 = mysqli_query($con, "UPDATE site_info SET about_heading='$about_heading', about_content= '$about_content' where site_id='$getid' ");

  if ($change3) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="container">
                <h3>Website Settings</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        
      <!-- <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button class="btn btn-primary" onclick="window.history.back();">
                <span class="fa fa-arrow-left"> </span> Back
              </button>
            </div>
          </div>
      </div>         -->
        
        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header">
              <span class="fa fa-plus"></span> &nbsp; Edit Website Info
            </div>
            <div class="card-body">
              <form method="POST" class="form-group" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Website Name</label>
                  <input type="text" class="form-control" value="<?php echo $site['webname']; ?>" name="webname" required>
                </div>

                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" class="form-control" value="<?php echo $site['phone_no']; ?>" name="phone_no" required>
                </div>

                <div class="form-group">
                  <label>Contact Email</label>
                  <input type="text" class="form-control" value="<?php echo $site['email']; ?>" name="email" required>
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <textarea class="summernote-simple" name="address" required><?php echo $site['address']; ?></textarea>
                </div>

                <div class="form-group form-button">
                  <button type="submit" name="change1" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                </div>
                
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header">
              <span class="fa fa-plus"></span> &nbsp; Edit Website Info
            </div>
            <div class="card-body">
              <form method="POST">

              <div class="form-group">
                <label>Welcome Note</label>
                <textarea class="summernote-simple" name="welcome_note" required><?php echo $site['welcome_note']; ?></textarea>
              </div>

              <div class="form-group">
                <label>Working Hours</label>
                <input type="text" class="form-control" value="<?php echo $site['work_hours']; ?>" name="work_hours" required>
              </div>

              <div class="form-group">
                <label>Working Days</label>
                <input type="text" class="form-control" value="<?php echo $site['work_days']; ?>" name="work_days" required>
              </div>

              <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" class="form-control" value="<?php echo $site['facebook_link']; ?>" name="facebook_link" required>
              </div>

              <div class="form-group">
                <label>Whatsapp Link</label>
                <input type="text" class="form-control" value="<?php echo $site['whatsapp_link']; ?>" name="whatsapp_link" required>
              </div>

              <div class="form-group">
                <label>Instagram Link</label>
                <input type="text" class="form-control" value="<?php echo $site['instagram_link']; ?>" name="instagram_link" required>
              </div>

              <div class="form-group">
                <label>Twitter Link</label>
                <input type="text" class="form-control" value="<?php echo $site['twitter_link']; ?>" name="twitter_link" required>
              </div>

              <div class="form-group">
                <label>YouTube Link</label>
                <input type="text" class="form-control" value="<?php echo $site['youtube_link']; ?>" name="youtube_link" required>
              </div>

              <div class="form-group">
                <label>GitHub Link</label>
                <input type="text" class="form-control" value="<?php echo $site['github_link']; ?>" name="github_link" required>
              </div>

              <div class="form-group">
                <label>Website Link</label>
                <input type="text" class="form-control" value="<?php echo $site['web_link']; ?>" name="web_link" required>
              </div>

              <div class="form-group form-button">
                <button type="submit" name="change2" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header">
              <span class="fa fa-plus"></span> &nbsp; Edit Website Info
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-group">
                  <label>About Heading</label>
                  <textarea class="summernote-simple" name="about_heading" required><?php echo $site['about_heading']; ?></textarea>

                </div>

                <div class="form-group">
                  <label>About Content</label>
                  <textarea class="summernote-simple" name="about_content" required><?php echo $site['about_content']; ?></textarea>
                </div>

                <div class="form-group form-button">
                  <button type="submit" name="change3" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card">
            <div class="card-header">
              <span class="fa fa-plus"></span> &nbsp; Edit Website Info
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-group">
                  <label>About Heading</label>
                  <textarea class="summernote-simple" name="about_heading" required><?php echo $site['about_heading']; ?></textarea>

                </div>

                <div class="form-group form-button">
                  <button type="submit" name="change3" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                </div>

                <div class="form-group">
                  <label>Thumbnail</label>
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="image-upload" />
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>


      </div>
  </section>
  <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>HTML5 Form Basic</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST" class="form-group" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Website Name</label>
                      <input type="text" class="form-control" value="<?php echo $site['webname']; ?>" name="webname" required>
                    </div>

                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="text" class="form-control" value="<?php echo $site['phone_no']; ?>" name="phone_no" required>
                    </div>

                    <div class="form-group">
                      <label>Contact Email</label>
                      <input type="text" class="form-control" value="<?php echo $site['email']; ?>" name="email" required>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="summernote-simple" name="address" required><?php echo $site['address']; ?></textarea>
                    </div>

                    <div class="form-group form-button">
                      <button type="submit" name="change1" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                    </div>
                    
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </form>
                </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Inline Forms</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                        placeholder="Jane Doe">
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                          placeholder="Username">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Help Text</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputPassword5">Password</label>
                      <input type="password" id="inputPassword5" class="form-control"
                        aria-describedby="passwordHelpBlock">
                      <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                        spaces, special characters, or emoji.
                      </small>
                    </div>
                    <div class="form-inline">
                      <div class="form-group">
                        <label for="inputPassword6">Password</label>
                        <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                          aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                          Must be 8-20 characters long.
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Custom Forms #2</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Select</div>
                    <div class="form-group">
                      <label>Choose One</label>
                      <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="section-title">File Browser</div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Input Group Text</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <input type="text" class="form-control text-right" id="inlineFormInputGroup2"
                          placeholder="Your URL">
                        <div class="input-group-append">
                          <div class="input-group-text">.com</div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Input Group #2</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Multiple Addons</div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">First and last name</span>
                        </div>
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="section-title">Button</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>
                    <div class="section-title">Select With Button</div>
                    <div class="form-group">
                      <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>
                    <div class="section-title">Select, Button &amp; Input</div>
                    <div class="form-group">
                      <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect05">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Sizing</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>
                    <div class="form-group">
                      <label>Text <code>.form-control-sm</code></label>
                      <input type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Text <code>.form-control-lg</code></label>
                      <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="section-title">Select</div>
                    <div class="form-group">
                      <label>Select <code>.form-control-sm</code></label>
                      <select class="form-control form-control-sm">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select <code>.form-control-lg</code></label>
                      <select class="form-control form-control-lg">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Disabled &amp; Read Only</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>
                    <div class="form-group">
                      <label>Readonly</label>
                      <input type="text" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                      <label>Readonly Plain Text</label>
                      <input type="text" class="form-control-plaintext" readonly="" value="Hello!">
                    </div>
                    <div class="section-title">Select</div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled="">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="section-title">Checkbox</div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                        <label class="form-check-label" for="defaultCheck2">
                          Disabled checkbox
                        </label>
                      </div>
                    </div>
                    <div class="section-title">Radio</div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="" id="radioDisabled" disabled>
                        <label class="form-check-label" for="radioDisabled">
                          Disabled radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Inline</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label class="d-block">Inline Checkbox</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="d-block">Inline Radio</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio1" value="option1">
                        <label class="form-check-label" for="inlineradio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio2" value="option2">
                        <label class="form-check-label" for="inlineradio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineradio3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Horizontal Form</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Horizontal Form</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <fieldset class="form-group">
                      <div class="row">
                        <div class="col-form-label col-sm-3 pt-0">Radios</div>
                        <div class="col-sm-9">
                          <div class="form-check">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio3">First Radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Second Radio</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                      <div class="col-sm-3">Checkbox</div>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Example Checkbox</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Custom Forms</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Checkbox</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                    <div class="section-title">Radio</div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                    </div>
                    <div class="section-title">Inline</div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1"
                        class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1"
                        class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom
                        radio</label>
                    </div>
                    <div class="section-title">Disabled</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                      <label class="custom-control-label" for="customCheckDisabled">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="radioDisabled" class="custom-control-input" disabled>
                      <label class="custom-control-label">Toggle this custom radio</label>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Learn More</h4>
                  </div>
                  <div class="card-body">
                    <div class="jumbotron text-center">
                      <h2>Learn More</h2>
                      <p class="lead text-muted mt-3">All the above form elements are the default of bootstrap and you
                        can learn them on the official documentation provided by Bootstrap.</p>
                      <a class="btn btn-primary mt-3" href="https://getbootstrap.com/docs/4.0/components/forms/"
                        target="_blank" role="button">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

</div>



<?php
include "footer.php";
?>