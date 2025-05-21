<?php
// modules/intro.php
// This module introduces the basics of PHP.
// It includes the header and footer to create a complete HTML page.
include '../includes/header.php';
?>

<div class="module-content">
    <h2>Introduction to PHP</h2>
    <p>Welcome to the PHP Learning Lab! This module covers the basics of PHP.</p>
    <p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
    <p>Let's get started with some fundamental concepts:</p>
    <ul>
        <li>What is PHP?</li>
        <li>Basic syntax (tags, comments, statements)</li>
        <li>Variables and data types</li>
        <li>Echo and Print statements</li>
    </ul>
    <h3>Example: Hello World!</h3>
    <p>Below is a simple PHP code snippet that prints "Hello, World!" to the browser.</p>
    <pre><code>&lt;?php
    echo "Hello, World!";
?&gt;</code></pre>
    <?php
    // The PHP code below demonstrates the output of the example above.
    echo "<p>Output: <strong>Hello, World!</strong></p>";
    ?>
</div>

<div class="navigation-buttons mt-4">
    <a href="../index.php" class="btn">&laquo; Previous: Home</a>
    <a href="control_structures.php" class="btn">Next: Control Structures &raquo;</a>
</div>

<?php
// Include the footer to close the HTML document.
include '../includes/footer.php';
?>
