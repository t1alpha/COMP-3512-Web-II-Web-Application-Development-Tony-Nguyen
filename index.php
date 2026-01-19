<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
</head>
<body>

<h1>Registration Form</h1>

<form action="process.php" method="POST">

  <label>First Name</label><br>
  <input type="text" name="firstName" required><br><br>

  <label>Last Name</label><br>
  <input type="text" name="lastName" required><br><br>

  <label>Email</label><br>
  <input type="email" name="email" required><br><br>

  <label>Password</label><br>
  <input type="password" name="password" required><br><br>

  <label>Program</label><br>
  <select name="program" required>
    <option value="">Select</option>
    <option value="CIS">CIS</option>
    <option value="CS">CS</option>
    <option value="Web">Web</option>
  </select><br><br>

  <label>Study Mode</label><br>
  <input type="radio" name="studyMode" value="Full-time" required> Full-time<br>
  <input type="radio" name="studyMode" value="Part-time"> Part-time<br><br>

  <button type="submit">Register</button>

</form>

</body>
</html>
