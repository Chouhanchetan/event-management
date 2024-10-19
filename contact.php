`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Contact | Enchanted Events</title>  
    <link rel="icon" href="icon.png" sizes="32x32">
<style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
body{
  background:rgb(240, 234, 223);
}

.container {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background:rgb(240, 234, 223);

}

.container {
  width: 100%;
  margin: 0 auto;
  position: relative;
  width: 80%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  font-size:large;
}

#contact h3 {
  font-family: "Dancing Script", cursive;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    color:#564332 ;
    font-size: xxx-large;
    text-align: center;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
    border: none;
    background: #4CAF50;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
    align-items: center;
    border-radius: 10%;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
.hr{
  width: 80%;
  opacity: 0.3;
}
    </style>
</head>
<body>
    <?php
    include('nav.html');
    ?>

<div class="container">  
  <form id="contact" action="query.php" method="post">
    <h3>Contact </h3>
    <fieldset>
        <b>First & Last Name</b><br>
      <input type="text" tabindex="1" name="fullname" required autofocus>
    </fieldset>
    <fieldset>
        <b>Email Address</b><br>
      <input  type="email" tabindex="2" name="mail" required>
    </fieldset>
    <fieldset>
        <b>Phone Number</b><br>
      <input type="tel" tabindex="3" required name="contact">
    </fieldset>
    <fieldset>
        <b>Wedding or Special Event Date</b><br>
      <input type="date" tabindex="3" required autofocus name="date">
    </fieldset>
    <fieldset>
        <b>Event Location (or considering)</b><br>
        <input type="text" tabindex="1" required autofocus name="location">
        </fieldset>
        <fieldset>
        <b>How many guests are you anticipating?</b><br>
        <input type="text" tabindex="1" required autofocus name="guests">
        </fieldset>
        <input type="radio" id="vehicle1" name="planning" value="EP">
  <label for="vehicle1"><b>Engagement Party</b></label><br>
  <input type="radio" id="vehicle2" name="planning" value="DW">
  <label for="vehicle2"><b>Destination Wedding</b></label><br>
  <input type="radio" id="vehicle3" name="planning" value="CE">
  <label for="vehicle3"><b>Corporate event</b></label><br>
  <input type="radio" id="vehicle3" name="planning" value="OE">
  <label for="vehicle3"><b>Other Events</b></label><br>
  <input type="radio" id="vehicle3" name="planning" value="NS">
  <label for="vehicle3"><b>Not sure, let's talk</b></label>
  <fieldset><br>
        <b>More Details the Better - Tell us more of how we can help, your vision, and any details you know now</b><br>
        <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required name="details"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p>This form is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
  </form>
</div>
<center><hr class="hr"></center>

<?php
include('footer.html');
?>
</body>
</html>`
