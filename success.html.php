<!DOC TYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Amy Finley">

        <!-- Title -->
        <title>Contact Success Page</title>

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
            <h1>Thank you!</h1>

            <p>A member of our team will be in contact with you soon.<br>
                Here is what you sent us: <br>
                Name: <?php echo htmlspecialchars($_POST['myName']); ?><br>
                Role: <?php echo htmlspecialchars($_POST['myRole']); ?><br>
                Email: <?php echo htmlspecialchars($_POST['myEmail']); ?><br>
                Question: <?php echo htmlspecialchars($_POST['myComment']); ?>
            </p>

        </main>

        <?php include '../includes/footer.inc.html.php'; ?>
    </body>

    </html>