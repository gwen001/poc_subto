const http = require('http');

const hostname = '127.0.0.1';
const port = 443;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Silence is golden and subdomain takeover still an issue ​🤖​​');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});
