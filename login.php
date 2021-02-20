<html>
<head>
  <title>login and registration form </title>
  <link rel="stylesheet" href="style1.css">
</head>
<body background="sp.jpg" style="width:100%">>

  <div class="hero">
    <div class="form-box">
    <div class="button-box">
      <div id="btn"></div>
    <button type="button" class="toggle-btn" onclick="login()">log in</button>
    <button type="button" class="toggle-btn" onclick="register()">register</button>
  </div>
  <div class="social-icons">
  <img src="fb.png">
  <img src="tw.png">
</div>
<form id="login" class="input-group">
  <input type="text" class="input-field" placeholder="user id" required><br></br>
  <input type="text" class="input-field" placeholder="enter password" required><br></br>
  <input type="checkbox" class="check-box"><span>remember password</span>
  <button type="submit" class="submit-btn">log in</button>
</form>
<form id="register" class="input-group">
  <input type="text" class="input-field" placeholder="user id" required><br></br>
  <input type="text" class="input-field" placeholder="email id" required><br></br>
  <input type="text" class="input-field" placeholder="enter password" required><br></br>
  <input type="checkbox" class="check-box"><span>i agree to the terms and conditions</span>
  <button type="submit" class="submit-btn">register</button>
</form>
</div>
</div>
<script>
var x=document.getElementById('login');
var y=document.getElementById('register');
var z=document.getElementById('btn');
function register() {
  x.style.left="-400px"
    y.style.left="50px"
      z.style.left="110px"
}
function login() {
  x.style.left="50px"
    y.style.left="450px"
      z.style.left="0px"
}
</script>
</body>
</html>
