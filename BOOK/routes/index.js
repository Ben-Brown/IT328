var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

/* GET Booklist page. */
router.get('/booklist', function(req, res) {
 var db = req.db;
 var collection = db.get('books');
 collection.find({},{},function(e,docs){
 res.render('booklist', {
 "booklist" : docs
 });
 });
});

/* GET newbook page. */
router.get('/newbook', function(req, res, next) {
  res.render('newbook', { title: 'Add New Book' });
});

/* POST to Add User Service */
router.post('/addbook', function(req, res) {
var db = req.db;
 // Set our internal DB variable  var db = req.db;
 // Get our form values. These rely on the "name" attributes
 var title = req.body.booktitle;
 var first = req.body.authorfirst;
 var last = req.body.authorlast;
 var price = req.body.price;
 var url = req.body.url;
 // Set our collection
 var collection = db.get('books');
 // Submit to the DB
 collection.insert({
 "title" : title,
 "author" : { "first": first, "last": last},
 "price" : price,
 "url" : url
 }, function (err, doc) {
 if (err) {
 // If it failed, return error
 res.send("There was a problem adding the information to the database.");
 }
 else {
 // If it worked, set the header so the address bar doesn't say /adduser
 res.location("booklist");
 // And forward to success page
 res.redirect("booklist");
 }
 });
});

module.exports = router;
