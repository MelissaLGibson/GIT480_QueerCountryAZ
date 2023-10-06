<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Queer Country AZ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
        </script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
        </script>
        <!--[if lt IE 9 ]><script src="http://html5shim.googlecode.com/svn/trunk/html.js">
        </script><![end if]-->
    </head>
    <body>
        <header>
            <h1>Queer Country AZ | Form Recipt </h1>
        </header>
        <main>
            <h2>Your message has been received!</h2>
            <h2>Your form receipt: Thank You!</h2>
            <p>First Name: <?php echo $_POST['firstname']; ?></p>
            <p>Last Name: <?php echo $_POST['lastname']; ?></p>
            <p>Email Address: <?php echo $_POST['email']; ?></p>
            <p>Comments: <?php echo $_POST['textarea']; ?></p>
        </main>
        <footer>
            <small>Copyright © QueerCountryAZ 2023</small>
        </footer>
    </body>
</html>
