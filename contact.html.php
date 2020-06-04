<!DOC TYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Amy Finley">

        <!-- Title -->
        <title>Contact : Ace in the Hole Multisport Events</title>

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
            <h1>Contact</h1>
            <div class="forms">
            <p>Feel free to contact us with any questions. We would love to hear from you!</p>
            <br>
            <form method="POST" action="success.html.php" id="inquiryForm">
                <label for="myName">*Name:</label>
                <input type="text" name="myName" id="myName" required>
                <label for="myRole">*Choose Your Roll</label>
                <select size="1" name="myRole" id="myRole" required>
                    <option>Select</option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="interested">Interested Party</option>
                </select>
                <label for="myEmail">*E-mail:</label>
                <input type="text" name="myEmail" id="myEmail" required>
                <label for="myComment">*Comments:</label>
                <textarea form="inquiryForm" rows="10" cols="50" name="myComment" id="myComment" required></textarea>
                <input id="mySubmit" type="submit" value="Submit">
            </form>
            </div>
        </main>

        <?php include '../includes/footer.inc.html.php'; ?>
    </body>

    </html>