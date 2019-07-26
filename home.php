<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <title>Simple CRUD | Home</title>
</head>
<?php
session_start();
//checks if user is logged in
if ($_SESSION['user']) { } else {
  header("location:index.php"); // redirects if user is not logged in
}
?>

<body style="background: linear-gradient(to bottom, #fad0c4 0%, #ffd1ff 100%) no-repeat;">
  <header>
    <div class=" greeting">
      Hello,
      <b> <?php echo $_SESSION['user']->username; ?></b>.
    </div>
    <nav>
      <input class="btn-home" onclick="gotoHome()" type="button" value="Home">
      <input class="btn-edit" onclick="gotoEdit()" type="button" value="Edit Account">
      <input class="btn-logout" onclick="logout()" type="button" value="Logout">
    </nav>
  </header>
  <section>
    <h1>List of all users</h1>
    <div class="filter">
      <h3>Order By:</h3>
      <div class="radio-btn">
        <div onclick="activate('username')">
          <input onclick="activate('username')" type="radio" name="filter" id="username" value="username" />
          <h5>Username</h5>
        </div>
        <div onclick="activate('datecreated')">
          <input onclick="activate('datecreated')" type="radio" name="filter" id="datecreated" value="datecreated" checked />
          <h5>Date Created </h5>
        </div>
        <div onclick="activate('state')">
          <input onclick="activate('state')" type="radio" name="filter" id="state" value="state" />
          <h5>State</h5>
        </div>
      </div>
    </div>
    <table id="users-list">
      <thead>
        <tr>
          <th>Username</th>
          <th>Date Created</th>
          <th>State</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once 'db.php';
        class Home extends DB
        {
          function __construct()
          {
            parent::__construct();
            $sql = 'SELECT * FROM users';
            $stmt = $this->conn->query($sql);
            while ($user = $stmt->fetch()) {
              if ($user->is_active == 1) {
                $state = 'Active';
              } else {
                $state = 'Not
        Active';
              }
              print '
        <tr>
          ';
              print '
          <td>' . $user->username . '</td>
          ';
              print '
          <td>' . $user->created_at . '</td>
          ';
              print '
          <td>' . $state . '</td>
          ';
              print '
        </tr>
        ';
            }
          }
        }
        $home = new Home(); ?>
      </tbody>
    </table>
  </section>
  <footer>
    <h1>Cidro Zeirwayne Yzaack</h1>
  </footer>
  <script src="home.js"></script>
</body>

</html>