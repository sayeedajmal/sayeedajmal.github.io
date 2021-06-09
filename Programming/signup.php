<!DOCTYPE html>
<html lang="en" class="root">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css" />
</head>
<body>
  <form method="POST" action="insert.php">
    <h1 class="signup">SingUp</h1>
    <div class="form">
      <label>FirstName</label>
      <br />
      <input class="input" type="text" name="firstname" required />
      <br />
      <label>LastName</label>
      <br />
      <input class="input" type="text" name="lastname" required />
      <br />
      <label>Date of Birth</label>
      <br />
      <input class="input" class="dob" type="date" name="dob" required />
      <br />
      <label>Area of Expertise</label>
      <br />
      <select class="input" name="expertise">
        <option>Software Enginner</option>
        <option>Data Scientist</option>
        <option>Database Admin</option>
        <option>Developer</option>
      </select>
      <br />
      <label>Email Address</label>
      <br />
      <input class="input" type="email" name="email" required />
      <br />
      <label>Password</label>
      <br />
      <input class="input" type="password" name="password" required />
      <br />
      <input class="submit" type="submit" name="submit" />
    </div>
  </form>
</body>

</html>