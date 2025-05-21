<?php
// index.php
// This file now serves as the welcome page for the PHP Learning Lab.
// It includes the header and footer to create a complete HTML page.
include 'includes/header.php';
?>

<div class="module-content">
    <h2>Welcome to the PHP Learning Lab!</h2>
    <p>This interactive lab is designed to help new developers learn the fundamentals of PHP programming.</p>
    <p>Explore various concepts from basic syntax to control structures, functions, and more, all with practical examples and explanations.</p>
    <p>Click the button below to start your journey into PHP development!</p>
</div>

<div class="navigation-buttons mt-4">
    <a href="modules/intro.php" class="btn">Start the Lab &raquo;</a>
</div>

<?php
// Include the footer to close the HTML document.
include 'includes/footer.php';
?>
