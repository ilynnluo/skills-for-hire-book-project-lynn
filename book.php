<!DOCTYPE html>
<html>

<head>
  <title>BookaTrip</title>
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

  .header h1 {
    margin: 0;
  }

  .rowContainer {
    display: flex;
    padding: .5rem;
    width: 16rem;
    justify-content: space-between;
  }
</style>

<body>
  <div class="header">
    <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" />
    <h1>Halifax Canoe and Kayak</h1>
    <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" />
  </div>
  <h1>Book A Trip</h1>
  <h3>Just Some Quick Details</h3>
  <form action="thank-you.php" method="get">
    <div class="rowContainer">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" />
    </div>
    <div class="rowContainer">
      <label for="location">Location</label>
      <select id="location" name="location">
        <option value="Halifax">Halifax</option>
        <option value="Dartmouth">Dartmouth</option>
      </select>
    </div>
    <div class="rowContainer">
      <label for="date">Trip Date</label>
      <input type="date" id="date" name="date" />
    </div>
    <div class="rowContainer">
      <input type="submit" />
    </div>
  </form>
</body>
</body>

</html>