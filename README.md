# Realtime-Chat-With-Laravel5.6-and-Socket.io
This is a Realtime Chat Application made with Laravel5.6,Socket.io and redis
<h3>Procedure to Install the repo</h3>
1. Clone the repo: git clone https://github.com/biswassampad/Realtime-Chat-With-Laravel5.6-and-Socket.io.git Realtime<br/>
2.Enter to the destination folder : cd/Realtime<br/>
3.Install the composer : $composer install<br/>
4.Copy the .env.example to .env and configure the Database credentials for windows: copy .env.example .env  for unix: cp .env.example .env<br/>
5.Generate the key : php artisan key:generate<br/>
6.Run the App by Starting development server :php artisan serve <br/>
7.Install the reqruired dependencies in series respectivly <br/>
       <b> NPM</b>:npm install<br/>
        <b>Redis</b>: npm install redis --save-dev<br/>
        <b>ioRedis</b>: npm install ioredis --save-dev<br/>
        <b>VueSocket.io</b> :npm install vue-socket.io --save-dev<br/>
        <b>PRedis</b>:composer require Predis/Predis<br/>
       <b> Socket.io</b>:npm install socket.io --save-dev<br/>
 8.Run NPM development : npm run dev<br/>
 9.Start the redis Server :node server.js<br/>
 10.Enjoy the APP<br/>
 
 <h2>If you liked my effort dont forget to star the repo</h2>
