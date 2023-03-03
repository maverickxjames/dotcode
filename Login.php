<?php 
session_start();
if($_SESSION['isAdminLoggedIn'] == "true"){
  header('Location:./dotcode_admin/');
}

// hjhj

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      * {
        padding: 0px;
        margin: 0px;
      }
      .a {
        background-image: url("./includes/img/a3.jpg");
        background-repeat: no-repeat;
        background-size: 100% 780px;
        height: 780px;
        width: 100%;
        display: inline-block;
      }
      .b {
        height: 500px;
        width: 400px;
        box-shadow: 0 0 20px black;
        margin-top: 150px;
        margin-left: 270px;
        font-family: cursive;
        text-align: center;
        display: inline-block;
      }
      .b1 {
        background-image: url("./includes/img/a2 (1).jpg");
        height: 100px;
        width: 150px;
        background-repeat: no-repeat;
        background-size: 150px 100px;
        margin-top: 30px;
        margin-left: 130px;
        rotate: -3deg;
      }
      .c {
        font-size: xx-large;
        margin-top: 40px;
      }
      .b2 {
        margin-top: 40px;
        font-size: x-large;
      }
      input {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid black;
        border-right: 2px solid black;
      }
      button {
        background-color: transparent;
        height: 40px;
        width: 100px;
        font-family: cursive;
        font-size: x-large;
        border-color: rgb(253, 41, 83);
      }
      button:hover {
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="a">
      <div class="b">
        <div class="c">Login Page</div>
        <div class="b1"></div>
        <div class="b2">
          <form action="checklogin.php" method="post">
            Username:-
            <input type="text" name="name" placeholder="Name" /><br /><br />
            Password:-
            <input
              type="password"
              name="password"
              placeholder="Password"
            /><br /><br />
            <button name="login" value="login">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
