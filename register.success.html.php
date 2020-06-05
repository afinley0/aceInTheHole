<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Amy Finley">

    <!-- Title -->
    <title>Registration Success Page</title>

    <!-- Stylesheet -->
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/072aa1ce93.js" crossorigin="anonymous"></script>
    <!-- Javascript -->

</head>

<body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <div>
            <h1>Thank you for registering!</h1>
            <div class="forms">
                <p>Our records show you submitted the following:<br>
                    Name: <?php echo htmlspecialchars($myfname); ?><br>
                    Email: <?php echo htmlspecialchars($myemail); ?><br>
                    Phone: <?php echo htmlspecialchars($myphone); ?><br>
                    Age: <?php echo htmlspecialchars($myage); ?> <br>
                    Roll: <?php echo htmlspecialchars($myrole); ?> <br>
                    Emergency Contact: <?php echo htmlspecialchars($myecontact); ?> <br>
                    Emergency Contact Number: <?php echo htmlspecialchars($myeconphone); ?> <br>
                    Saturday Events: <?php echo htmlspecialchars($mysaturday); ?> <br>
                    Sunday Events: <?php echo htmlspecialchars($mysunday); ?> <br>
                    Special Accomodations: <?php echo htmlspecialchars($myspecial); ?> <br>

                    <h2>Packet Pick Up</h2>
                    <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.
                        Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>
    <!-- JavaScript -->
    <script src="../scripts/ace_java.js"></script>
</body>

</html>
