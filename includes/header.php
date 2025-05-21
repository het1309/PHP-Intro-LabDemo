<?php
// includes/header.php
// This file contains the opening HTML tags, head section,
// basic styling, and the main title for the PHP Learning Lab.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning Lab</title>
    <style>
        /* Basic styling for the body to ensure readability */
        body {
            font-family: 'Inter', Arial, sans-serif; /* Using Inter font as per instructions */
            margin: 20px;
            background-color: #f4f7f6; /* Light background */
            color: #333; /* Darker text for contrast */
            line-height: 1.6;
        }

        /* Styling for the main heading */
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Horizontal rule for separation */
        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            margin: 20px 0;
        }

        /* Styling for module content area */
        .module-content {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            max-width: 800px;
            margin: 20px auto;
        }

        /* Styling for subheadings within modules */
        h2, h3, h4 {
            color: #34495e;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        /* Paragraph styling */
        p {
            margin-bottom: 15px;
        }

        /* List styling */
        ul {
            list-style-type: disc;
            margin-left: 20px;
            margin-bottom: 15px;
        }

        /* Code block styling */
        pre {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto; /* Allows horizontal scrolling for long code lines */
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9em;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
        }

        /* Inline code styling */
        code {
            background-color: #e0e6e7;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: 'Courier New', Courier, monospace;
        }

        /* Strong/bold text for emphasis */
        strong {
            color: #2980b9;
        }

        /* Navigation buttons container */
        .navigation-buttons {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        /* Button styling */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(145deg, #007bff, #0056b3); /* Gradient background */
            color: white;
            text-decoration: none;
            border-radius: 8px; /* Rounded corners */
            font-weight: bold;
            transition: all 0.3s ease; /* Smooth transition for hover effects */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            border: none; /* No default border */
            cursor: pointer;
            margin: 0 10px; /* Spacing between buttons */
        }

        .btn:hover {
            background: linear-gradient(145deg, #0056b3, #003f7f); /* Darker gradient on hover */
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Styling for disabled/coming soon buttons */
        .btn.opacity-50 {
            opacity: 0.5;
            cursor: not-allowed;
            background: #cccccc; /* Gray background for disabled */
            box-shadow: none;
            transform: none;
        }

        /* Utility classes for margin top */
        .mt-4 {
            margin-top: 1.5rem; /* Equivalent to 24px */
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            body {
                margin: 10px;
            }
            .module-content {
                padding: 20px;
                margin: 10px auto;
            }
            .btn {
                padding: 10px 20px;
                margin: 5px;
                display: block; /* Stack buttons on small screens */
                width: calc(100% - 20px); /* Full width with margin */
            }
            .navigation-buttons {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <h1>PHP Learning Lab</h1>
    <hr>
