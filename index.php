 <?php include("register.php");?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Login Page</title>


 </head>

 <body>
     <div class="login-box">
         <h2>Login</h2>
         <form action="login.php" method="POST">
             <label for="username">Username:</label>
             <input type="text" name="username" required /><br>
             <label for="password">Password:</label>
             <input type="password" name="password" required /><br>
             <label for="user-type">Select User Type:</label>
             <select name="user-type">
                 <option value="admin">Admin</option>
                 <option value="librarian">Librarian</option>
                 <option value="user">User</option>
             </select><br><br>
             <input type="submit" name="submit" />
         </form>

     </div>
 </body>

 </html>