<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Amy Finley">

    <!-- Title -->
    <title>Register : Ace in the Hole Multisport Events</title>

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

</head>

<body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>

    <main>
        <h1>Registration</h1>
        <div class="forms">
            <p>If you are planning to register as both an athlete and a volunteer, please fill out two forms.
                One for each option.</p>
            <p>Splash n' Dash is open to children ages 4 to 15. It is a free event for kids, if an adult also registers for an event.
                Otherwise, it is $25.</p>
            <form method="post" action=" ">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent">

                <label for="myfname">*Full Name:</label>
                <input type="text" name="myfname" id="myfname" required>

                <label for="myemail">*Email:</label>
                <input type="email" name="myemail" id="myemail" required>

                <label for="myphone">Phone:</label>
                <input type="tel" name="myphone" id="myphone">

                <label for="myage">*Age:</label>
                <input type="text" name="myage" id="myage" required>

                <label for="mygender">*Gender</label>
                <select size="1" name="mygender" id="mygender">
                    <option>Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="nonbinary">Non-binary</option>
                    <option value="other">Other</option>
                </select>

                <label for="myrole">*Choose Your Role</label>
                <select size="1" name="myrole" id="myrole">
                    <option>Select</option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select>

                <label for="myecontact">*Emergency Contact Name</label>
                <input type="text" name="myecontact" id="myecontact" required>

                <label for="myeconphone">*Emergency Contact Number</label>
                <input type="text" name="myeconphone" id="myeconphone" required>

                <label for="mysaturday">*Saturday Events:</label>
                <select type size="1" name="mysaturday" id="mysaturday">
                    <option>Choose Your Event</option>
                    <option value="10k">10K - $50</option>
                    <option value="half">Half Marathon - $75 </option>
                    <option value="olympic">Olympic - $110</option>
                    <option value="long">Long Course Tri - $240</option>
                    <option value="none">None</option>
                </select>

                <label for="mysunday">*Sunday Events:</label>
                <select size="1" name="mysunday" id="mysunday">
                    <option>Choose Your Event</option>
                    <option value="try-a-tri">Try-a-Tri - $65</option>
                    <option value="sprint">Sprint - $90</option>
                    <option value="long">Splash 'n Dash - $25</option>
                    <option value="none">None</option>
                </select>
                <label for="myspecial">Any Special Accommodations?</label>
                <textarea name="myspecial" id="myspecial" rows="2" cols="20"></textarea>
                <input id="mysubmit" type="submit" value="Submit">
            </form>
        </div>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>