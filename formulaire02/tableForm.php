<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styletabl.css" />
    <script  src="jqDOC.js"></script>
    <script  src="jquirypag.js"></script>
</head>
<body>
<div class="super_div">
<h2>Inscrire</h2>
   <div class="slide-controls">
    <button class="login">Login</button>
    <button class="signup">Signup</button>
   </div>
    <div class="mini_div1">
     <form action="" method="POST" >
        <legend>Login</legend>
        <input type="email" name="email" placeholder="E_amil" autocomplete="off"/>
        <input type="password" name="password" placeholder="PassWord" autocomplete/>
        <div class="checkinput"><input type="checkbox" />show passeword</div>
        <input type="submit" value="Login" />
     </form>
    </div>
    <div class="mini_div2">
     <form action="" method="GET" >
        <legend>signup</legend>
        <input type="email" name="email" placeholder="E_amil" autocomplete="off"/>
        <input type="text" name="username" placeholder="UserName" autocomplete="off"/>
        <input type="password" name="password" placeholder="PassWord" autocomplete/>
        <div class="checkinput"><input type="checkbox" />show passeword</div>
        <input type="submit" value="Login" />
     </form>
    </div>
</div>
</body>
</html>