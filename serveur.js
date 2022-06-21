const http = require ('http');
const express = require('express');
const PORT = 3000;
const serveur =  http. createServer((req, res) => {
res. end('Voilà la réponse du serveur !' );
});
console.log("Seveur lancée sur le port 3000");
alert('Serveur lancée sur le port ||3000');

