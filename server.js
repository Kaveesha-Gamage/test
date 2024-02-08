/*const http = require('http');

// Create a simple HTTP server that returns a "Hello, World!" response
const server = http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello, World!\n');
});

// Listen on port 8000
const port = 8000;
server.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}/`);
});*/


const http = require('http');
const fs = require('fs');
const path = require('path');

const server = http.createServer((req, res) => {
  let filePath = '.' + req.url;
  if (filePath === './') {
    filePath = './test.html'; // Serve index.php if no specific file is requested
  }

  const contentType = {
    '.html': 'text/html',
    '.css': 'text/css',
    '.js': 'text/javascript',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.gif': 'image/gif'
  };

  const extname = String(path.extname(filePath)).toLowerCase();

  const contentTypeHeader = contentType[extname] || 'application/octet-stream';

  fs.readFile(filePath, (err, content) => {
    if (err) {
      if (err.code === 'ENOENT') {
        res.writeHead(404, { 'Content-Type': 'text/html' });
        res.end('404 Not Found');
      } else {
        res.writeHead(500);
        res.end(`Server Error: ${err.code}`);
      }
    } else {
      res.writeHead(200, { 'Content-Type': contentTypeHeader });
      res.end(content, 'utf-8');
    }
  });
});

const port = process.env.PORT || 8000; // Use the provided port or default to 8000
server.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}/`);
});