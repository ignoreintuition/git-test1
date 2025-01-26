const http = require("http");
const port = 3000;
http
  .createServer((req, res) => {
    res.write("Hello World from Brian T Greig!");
    res.end();
  })
  .listen(port, () => {
    console.log(`Server running on port ${port}`);
  });
