// server.js
// This script starts the PHP built-in development server and then
// automatically opens the default web browser to the localhost URL.

const { spawn } = require('child_process'); // For running external commands (like PHP)
const open = require('open');
const openBrowser = open.default || open; // The URL to open
const phpPort = 8000; // The port for the PHP server
const phpServerUrl = `http://localhost:${phpPort}`; // The URL to open

// Define the PHP server command and its arguments
// -S specifies the host and port
// -t specifies the document root (where index.php is located)
const phpArgs = ['-S', `localhost:${phpPort}`, '-t', '.'];

// Spawn the PHP server process
const phpServer = spawn('php', phpArgs, {
    stdio: 'inherit', // This pipes the PHP server's output to the current console
    shell: true // Use shell to ensure command is found on Windows/Linux
});

console.log(`Starting PHP server on ${phpServerUrl}...`);

// Listen for the PHP server process to exit
phpServer.on('close', (code) => {
    console.log(`PHP server process exited with code ${code}`);
});

phpServer.on('error', (err) => {
    console.error('Failed to start PHP server:', err);
});

// Give the PHP server a moment to start up, then open the browser
// A small delay is crucial to ensure the server is ready before the browser tries to connect.
setTimeout(() => {
    // The 'open' variable should now correctly reference the function from the 'open' package.
    openBrowser(phpServerUrl)
        .then(() => {
            console.log(`Opened ${phpServerUrl} in your default browser.`);
        })
        .catch(err => {
            console.error('Failed to open browser:', err);
        });
}, 2000); // 2-second delay
