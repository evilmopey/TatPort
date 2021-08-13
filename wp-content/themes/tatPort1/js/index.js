
// import '../node_modules/jquery';
// import '../node_modules/popper.js';
// import '../node_modules/bootstrap';
// import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
// import '../node_modules/bootstrap/scss/bootstrap.scss';

// making sure the copyright is up to date
var year = document.getElementById("year").innerHTML = new Date().getFullYear();

// Navbar styling control

var ronin = document.getElementById('ronin');
var lastClicked = 'ronin';
var selected = 'selected';
var list = document.getElementsByClassName('headerLink')
ronin.classList.add(selected);



for (let i = 0; i < list.length; i ++) {
  list[i].addEventListener('click',function(){
    
    var clicked = event.target.id;
    console.log(clicked)
  
    if(clicked != lastClicked){
      document.getElementById('mixed-loop').innerHTML = '';
      document.getElementById(lastClicked).classList.remove(selected);
      document.getElementById(clicked).classList.add(selected);
      ajaxButtonPass(clicked);
      lastClicked = clicked;
    }
    
});
};
function ajaxButtonPass(button){
  jQuery(document).ready(function($) {
    
    // This is the variable we are passing via AJAX
    
    console.log("sending");
    // This does the ajax request (The Call).
    $.ajax({
        url: siteURL.ajax, // Since WP 2.8 ajaxurl is always defined and points to admin-ajax.php
        type: "POST",
        crossDomain: true,
        data: {
            'action':'server_side_ajax', // This is our PHP function below
            'input' : button // This is the variable we are sending via AJAX
        },
        
        success: function(response){
          var res = JSON.parse(response);
          console.log(res);
          if(res.html) {
            document.getElementById('mixed-loop').innerHTML = html
          }
          
    
    
            window.alert('success');
            
        },  
        error: function(errorThrown){
            window.alert('failure');
        }
    });   


