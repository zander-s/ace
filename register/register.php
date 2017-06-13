<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration | Ace in the Hole | Multisport Event | Portland, OR</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800i,900i" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon_ace.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<?php require_once '../includes/header.php'; ?>
    
<section class="parallax"></section>

<main class="body-content">
    <section class="container">
        <section class="col-md-12 page-content">
            <h1>Register for an Event</h1>
            <section class="row">
                <section class="col-md-3 race-register">
                    <h5>Long Course</h5>
                    <p>Saturday, July 16 - 7am</p>
                    <p>$240</p>
                </section>
                <section class="col-md-3 race-register">
                    <h5>Half Marathon</h5>
                    <p>Saturday, July 16 - 7:15am</p>
                    <p>$75</p>
                </section>
                <section class="col-md-3 race-register">
                    <h5>10K</h5>
                    <p>Saturday, July 16 - 7:15am</p>
                    <p>$50</p>
                </section>
                <section class="col-md-3 race-register">
                    <h5>Olympic</h5>
                    <p>Saturday, July 16 - 7:30am</p>
                    <p>$110</p>
                </section>
            </section>
                
            <section class="row">
                <section class="col-md-4 race-register">
                    <h5>Sprint</h5>
                    <p>Sunday, July 17 - 8am</p>
                    <p>$90</p>
                </section>
                <section class="col-md-4 race-register">
                    <h5>Try-a-Tri</h5>
                    <p>Sunday, July 17 - 8:20am</p>
                    <p>$65</p>
                </section>
                <section class="col-md-4 race-register">
                    <h5>Splash n Dash</h5>
                    <p>Sunday, July 17 - 12pm</p>
                    <p>Free</p>
                </section>
            </section>
            
            <section class="register-cost">
                <p>Cost Includes:</p>
                <ul>
                    <li>&#10097; Food and beer</li>
                    <li>&#10097; Access to the weekend's live entertainment and Fitness Expo</li>
                    <li>&#10097; Commemorative Finisher Medal</li>
                    <li>&#10097; Accurate chip timing for competetive races</li>
                    <li>&#10097; Ace in the Hole MultiSport Weekend Tech Shirt</li>
                    <li>&#10097; Post-event party and entertainment.</li>
                </ul>
                
                <p><strong>Note:</strong> Tech Shirts guaranteed to pre-registered participants only.</p>
            </section>

            <section class="register-form col-md-12">
                <h5>Register</h5>
                <form method="post" action="index.php">
                    <section class="form-left form-first">
                        <section class="form-group">
                            <label for="myfname">First Name</label>
                              <input type="text" name="myfname" id="myfname" placeholder="First Name" class="form-control" required>
                        </section>
                        <section class="form-group">
                        <label for="mylname">Last Name</label>
                          <input type="text" name="mylname" id="mylname" placeholder="Last Name" class="form-control" required>
                        </section>
                        <section class="form-group">
                        <label for="myemail">Email</label>
                          <input type="email" name="myemail" id="myemail" placeholder="Email" class="form-control" required>
                        </section>
                        <section class="form-group">
                        <label for="myrace">Pick a Race</label>
                        <select size="1" name="myrace" id="myrace" class="form-control" required>
                            <option>Pick a Race</option>
                            <option value="Long Course">Long Course</option>
                            <option value="Half Marathon">Half Marathon</option>
                            <option value="10K">10K</option>
                            <option value="Olympic">Olympic</option>
                            <option value="Sprint">Sprint</option>
                            <option value="Try-a-Tri">Try-a-Tri</option>
                            <option value="Splash n Dash">Splash n Dash</option>
                        </select>
                        </section>
                    </section>
                    <section class="form-left form-last">
                        <section class="form-group">
                        <label for="mycomments">Comments</label>
                          <textarea name="mycomments" id="mycomments" rows="8" class="form-control" placeholder="Comments"></textarea>
                        </section>
                        <section class="form-group">
                            <button id="mysubmit" type="submit" class="btn btn-default">Submit</button>
                        </section>
                    </section>
                  </form>
                </section>
        </section>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<!-- Custom JS -->
<script src="../js/scripts.js"></script>
    
<!-- FontAwesome -->
<script src="https://use.fontawesome.com/09c029033f.js"></script>
</body>
</html>
