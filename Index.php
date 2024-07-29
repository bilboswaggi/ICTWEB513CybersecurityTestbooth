<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Computer Force</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Welcome to Computer Force</h1>
        <p>Computer Force is your online expert in all things computing.</p>
        
        <!-- Contact Form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
        
        <section>
            <h2><a href="products.html#computers">Computers</a></h2>
            <a href="products.html#computers"><img src="images/computers.jpg" alt="Computers"></a>
        </section>
        
        <!-- Other product sections... -->
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
