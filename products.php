<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Computer Force</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Products we sell</h1>
        <p>Computer Force sells products in the following categories:</p>
        
        <!-- Search Form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <label for="search">Search Products:</label>
            <input type="text" id="search" name="search" required>
            <input type="submit" value="Search">
        </form>
        
        <section id="audio">
            <h2>Audio</h2>
            <img src="images/audio.jpg" alt="Audio">
        </section>
        
        <!-- Other product sections... -->
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
