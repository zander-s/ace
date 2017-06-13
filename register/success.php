<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ace in the Hole | Multisport Event | Portland, OR</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800i,900i" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/ace/images/favicon_ace.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/ace/css/style.css">

</head>
<body>

<?php require_once '../includes/header.php'; ?>
    
<section class="parallax"></section>

<main class="body-content">
    <section class="container">
        <section class="col-md-9 page-content">
            <h1>Congratulations!</h1>

            <h5>You have successfully registered for an Ace in the Hole MultiSport event. Please review your submission:</h5>
            
            <p>
              <strong>First Name:</strong> <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?><br>
              <strong>Last Name:</strong> <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?><br>
              <strong>Email:</strong> <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
              <strong>Event:</strong> <?php echo htmlspecialchars($myrace, ENT_QUOTES, 'UTF-8'); ?><br>
              <strong>Comments:</strong> <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            
            <p>All packet pick-up will occur at Why Worry Racing, <a href="https://www.google.com/maps/place/123+NW+Everett+St,+Portland,+OR+97209/@45.5252874,-122.6737733,17z/data=!3m1!4b1!4m5!3m4!1s0x5495a0aa0d4232d9:0x55d9e7f5819ce02!8m2!3d45.5252874!4d-122.6715846" target="_blank">123 NW Everett, Portland OR</a>. Packet pick-up hours: Thursday 8-5, Friday 9-noon. No day-of-event packet pick up.</p>
            
            <p>Please review your <a href="/ace/courses.php">course details</a> and <a href="/ace/bring.php">what you should bring</a>. Make sure to come prepared, and we'll see you on race day!</p>
        </section>

        <section class="col-md-3 sidebar">
            <h4>Review</h4>

            <ul>
                <li>&#10097; <a href="/ace/courses.php">Course Details</a></li>
                <li>&#10097; <a href="/ace/bring.php">What to Bring</a></li>
                <li>&#10097; <a href="/ace/faqs.php">FAQs</a></li>
            </ul>
        </section>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<!-- Custom JS -->
<script src="/ace/js/scripts.js"></script>
    
<!-- FontAwesome -->
<script src="https://use.fontawesome.com/09c029033f.js"></script>
</body>
</html>
