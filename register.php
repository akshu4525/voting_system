<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration | Voting System </title>
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../bg.jpg">
        <div class="text">
          <span class="text-1">Online Voting System</span>
          <span class="text-2">Let's start Voting</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="../bg.jpg">
        <div class="text">
          <span class="text-1"></span>
          <span class="text-2"></span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title"><b>Now Online Voting is EASY !</b></div>
          <form action="#">
            <div class="input-boxes">
              <p>The <a>“Online Voting System”</a> is an online   voting system technique. In which can give his/her vote. This system will surely consume less time as whole the day of work. The motto behind the system is to provide a system for office, schools and as well as individual persons to register and sign in into the <a>“Online Voting System”</a>. We are providing many features with best voting technology. This voting system is not age restricted so anyone can use at free of costs.</p>
              <div class="text sign-up-text">Register yourself  - <label for="flip">Signup now</label></div>
            </div>
        </form>
      </div>

      <!---signup-form--->
      <div class="signup-form">
        <div class="title">Signup</div>
      <form action="../api/register.php" method="POST" enctype="multipart/form-data">
          <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
              <i class="fas fa-user"></i>
              <input type="number" name="mob" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Enter your password" required>
            </div>
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpass" placeholder="Confirm your password" required>
            </div>
            <div class="input-box">
              <i class="fas fa-envelope"></i>
              <input type="text" name="add" placeholder="Enter your address" required>
            </div>
            <select name="role" style="width: 50%; border: 1px solid gray">
              <option value="1">Voter</option>
              <option value="2">Group</option>
            </select>
            <br>
            Upload img: <input type="file" id="profile" name="image" required>      

            <div class="button input-box">
              <input type="submit" value="Sumbit">
            </div>
            <div class="text sign-up-text">Already have an account? <a href="../index.php">Login now</a>
                <br><br>
                <label for="flip">Flip</label></div>
              </div>
    </form>
  </div>
  </div>
  </div>
</div>
</body>
</html>