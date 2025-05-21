# PHP-Intro-LabDemo
🛠 Requirements :- Before you begin, ensure you have the following installed on your system:
    -> PHP Install: Download php from php.net of Version 7.4 or higher.
    -> Verify your PHP installation by running php -v in your terminal.

    -> Install Composer from https://getcomposer.org/Composer-Setup.exe
    -> Make new folder name "Composer" in C drive and move downloaded setup over in that folder then run the installer.
    ✅ During Installation:
        -> It will ask you for the path to php.exe — browse to where PHP is installed (e.g., C:\php\php.exe)
        -> Make sure the "Add Composer to PATH" option is selected

    -> Steps to Add PHP & Composer to System PATH are as follows: -
        -> Press Win + S, type environment variables, and select Edit the system environment variables
        -> Click Environment Variables
        -> Under System variables, select Path and click Edit
        -> Click New and add the path to your PHP folder (e.g., C:\php)
        -> Click OK to close all dialogs

    -> Node.js & npm: Node.js (which includes npm) is required to run the server.js script that automatically 
       starts the PHP server and opens your browser. Download Node.js from nodejs.org.
    -> Verify your Node.js and npm installations by running node -v and npm -v in your terminal.

    -> VS Code: Download VS Code from code.visualstudio.com.

    -> Recommended VS Code Extensions:
        -> "PHP Intelephense" by Ben Mewburn (for intelligent code completion and linting)
        -> Quick Start Procedure after PHP Intelesphense extension installed in VScode. We need to disable the 
           built-in VSCode PHP Language Features. Follow below steps: -
                1. Go to Extensions.
                2. Search for @builtin php
                3. Disable PHP Language Features. Leave PHP Language Basics enabled for syntax highlighting.

    -> Add glob patterns for non standard php file extensions to the files.associations setting.
        For example: "files.associations": { "*.module": "php" }.