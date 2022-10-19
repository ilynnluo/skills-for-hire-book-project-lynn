<!DOCTYPE html>
<html>

<head>
  <title>Thank You</title>
</head>
<style>
  .header {
    display: inline-flex;
    margin: 0;
    width: 100%;
    height: 4rem;
    color: white;
    line-height: 4rem;
    background-color: rgb(42, 81, 150);
    justify-content: space-between;
  }
  .header img {
    width: 3rem;
    margin: 0.5rem;
  }
  .header h1{
    margin: 0;
  }
</style>
<body>
<div class="header">
    <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" />
    <h1>Halifax Canoe and Kayak</h1>
    <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" />
  </div>
  <h1>Thank You</h1>
  Thank you:
  <?php echo $_GET["email"] ?>
  <br />
  We will contact you about the:
  <?php echo $_GET["location"] ?> trip on the
  <?php echo $_GET["date"] ?>

</body>
</body>

</html>