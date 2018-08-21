
<!doctype html>

<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
	<!--<link rel="stylesheet" href="/analisis/css/login.css">-->
</head>
<body>

<div class="container">
    <div class="logo"> Denuncias Gt </div>
    <div class="login-item">
      <div  class="form form-login">
        <div class="form-field">
          <label class="user" for="user"><span class="hidden">Username</span></label>
          <input id="user" type="text" class="form-input" placeholder="Username" required name="user">
        </div>

        <div class="form-field">
          <label class="lock" for="pass"><span class="hidden">Password</span></label>
          <input id="pass" type="password" class="form-input" placeholder="Password" required name="pass">
        </div>

        <div class="form-field">
          <button id="btlog" >Log in</button>
        </div>
      </div>
    </div>
</div>


<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="/analisis/js/login.js"></script>


</body>
</html>