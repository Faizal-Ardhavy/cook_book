<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" type="image/jpg" href="assets/image/logo.png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
       <div class="imgBx">
           <img src="../img/bg.jpg" alt="image login">
       </div>
       <div class="contentBx">
           <div class="formBx">
               <h2>Sign Up</h2>
               <form action="registerAction" METHOD="post">
                   <div class="inputBx">
                       <span>Username</span>
                       <label>
                           <input type="text" name="username" required autocomplete="off">
                       </label>
                   </div>
                   <div class="inputBx">
                       <span>Password</span>
                       <label>
                           <input type="password" name="password" required autocomplete="off">
                       </label>
                   </div>
                   <div class="inputBx">
                       <span>Nama</span>
                       <label>
                           <input type="text" name="name" required autocomplete="off">
                       </label>
                   </div>
                   <div class="inputBx">
                       <input type="submit" value="sign up" name="sign up">
                   </div>
               </form>
           </div>
       </div>
    </section>
</body>
</html>