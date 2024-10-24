<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="FOTO/style.css" rel="stylesheet"> <!-- Link ke file CSS -->
</head>
<body>
  
  <form action="backend/login" method="POST">
    <input type="email" name="email" id="email" placeholder="Email"/>
    <input type="password" name="password" id="password" placeholder="password"/>
    <button type="submit">Login</button>
  </form>

</body>
</html>