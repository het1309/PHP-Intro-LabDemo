<?php
// modules/control_structures.php
// This module covers control structures in PHP, such as conditionals and loops.
// It includes the header and footer to create a complete HTML page.
include '../includes/header.php';
?>

<div class="module-content">
    <h2>Control Structures</h2>
    <p>Control structures are essential for controlling the flow of execution in your PHP scripts. They allow you to make decisions, repeat actions, and more.</p>

    <h3>Conditional Statements (if, else if, else, switch)</h3>
    <p>Conditional statements execute different blocks of code based on whether a condition is true or false.</p>
    <h4>Example: `if-else`</h4>
    <p>This example demonstrates how an `if-else` statement works based on a variable's value.</p>
    <pre><code>&lt;?php
    $age = 20;
    if ($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are a minor.";
    }
?&gt;</code></pre>
    <?php
    // Demonstrating the output of the if-else example.
    $age = 20;
    echo "<p>Output: ";
    if ($age >= 18) {
        echo "<strong>You are an adult.</strong>";
    } else {
        echo "<strong>You are a minor.</strong>";
    }
    echo "</p>";
    ?>

    <h3>Looping Statements (for, while, do-while, foreach)</h3>
    <p>Looping statements allow you to execute a block of code repeatedly.</p>
    <h4>Example: `for` loop</h4>
    <p>This example shows a simple `for` loop that counts from 1 to 5.</p>
    <pre><code>&lt;?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Count: " . $i . "&lt;br&gt;";
    }
?&gt;</code></pre>
    <?php
    // Demonstrating the output of the for loop example.
    echo "<p>Output:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<strong>Count: " . $i . "</strong><br>";
    }
    echo "</p>";
    ?>
</div>

<div class="navigation-buttons mt-4">
    <a href="intro.php" class="btn">&laquo; Previous: Introduction to PHP</a>
    <span class="btn opacity-50 cursor-not-allowed ml-2">Next: Functions &raquo; (Coming Soon)</span>
</div>

<?php
// Include the footer to close the HTML document.
include '../includes/footer.php';
?>
