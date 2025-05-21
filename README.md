PHP Intro Lab Demo Setup Guide
This guide provides a comprehensive overview of the requirements and step-by-step installation procedures necessary to set up your environment for the PHP Intro Lab Demo. Please follow these instructions carefully to ensure all prerequisites are met before you begin development.

🛠 Requirements & Setup
Before you begin, ensure you have the following installed and configured on your system:

**1. PHP Installation**

    a) Download PHP version 7.4 or higher from the official PHP website: php.net.
   
    b) Run the following command to confirm PHP is installed and accessible:
        php -v

**2. Composer Installation**

    a) Composer is a dependency manager for PHP.

    b) Create a new folder named "Composer" in your C: drive (e.g., C:\Composer).
    
    c) Download the Composer-Setup.exe installer from: getcomposer.org. && move the file into this newly created folder. 
        Then run the Installer.
        
    d) During Installation: When prompted for the path to php.exe, browse to your PHP installation directory (e.g., C:\php\php.exe).
                            Ensure the "Add Composer to PATH" option is selected.

**3. Adding PHP & Composer to System PATH (Verification/Manual Steps)**

    a) Open Environment Variables:
        -> Type "environment variables" and select "Edit the system environment variables."
        -> Access Environment Variables Dialog: In the System Properties window, click the Environment Variables... button.
        -> Edit System Path Variable: Under the "System variables" section, locate and select the Path variable. Click the Edit... button.
        -> Add PHP Directory: In the "Edit environment variable" dialog, click New. Add the full path to your PHP installation folder                                     (e.g., C:\php).
        -> Click OK to close all open dialogs (Edit environment variable, Environment Variables, System Properties).

**4. Node.js & npm Installation** 

    a) Download the recommended version of Node.js from: nodejs.org.
    
    b) Run the following commands to confirm Node.js and npm are installed:
            node -v OR npm -v

**5. VS Code Installation**

    -> Download and install VS Code from: code.visualstudio.com.

**6. Recommended VS Code Extensions**

    a) These extensions will significantly enhance your PHP development experience within VS Code:
        -> "PHP Intelephense" by Ben Mewburn Provides intelligent code completion, linting, and other advanced language features for PHP.

    b) Quick Start Procedure (Important for Intelephense):
        1. After installing the "PHP Intelephense" extension, you must disable VS Code's built-in PHP Language Features to avoid conflicts.
        2. Go to the Extensions view in VS Code (you can use the shortcut Ctrl+Shift+X or Cmd+Shift+X).
        3. In the Extensions search bar, type @builtin PHP.    
        4. Locate "PHP Language Features" and click the Disable button next to it.
        5. Crucially, leave "PHP Language Basics" enabled, as this provides essential syntax highlighting.

**7. File Associations for Non-Standard PHP Extensions**

    -> Open VS Code Settings (File > Preferences > Settings or Ctrl+,). And then, 
        Search for "files.associations".
        Click "Edit in settings.json" if prompted, or directly add/modify the JSON object.

        "files.associations": {
        "*.module": "php",
        "*.inc": "php", // Example for .inc files
        }

**8. Running the Server**

    -> Option A: 
        Use the following command in the terminal to start a server and to launch localhost on Chrome automatically.
            node server.js

    -> Option B:
        Use the following command in the terminal to start a server: php -S localhost:8000
        Then click on the link that shows in the terminal as (http://localhost:8000)
