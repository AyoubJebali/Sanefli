
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) === false){
    header("location: fronttest.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Home/Styles/style.css">
  <link href='https://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="Home/Styles/NavBar.css" >
  <link rel="stylesheet" href="Home/Styles/ResultStyle.css" >
  <link rel="stylesheet" href="Home/Styles/SearchMeal.css">
  <link rel="stylesheet" href="Home/Styles/Loader.css" >
</head>

<body>
  <!--navigation bar-->
  <nav class="nav">
    <label class="logo">Saneflii </label>
    <div class="right-container">
        <div class="item">
            <a href="aboutus.html" target="blank" id="aboutUs">About us</a>
        </div>
        <div class="item">
            <a class= "logout-button" href="logout.php">
               Log out 
            </a>
        </div>
    </div>
</nav>
  <!--end of navigation bar-->
  <!--Search-->
  <section class="SearchSelect">
    <div class="wrapper">
      <a href="#" class="meal active"><span>Meal</span></a>
      <a href="#" class="mealplan"><span>Meal Plan</span></a>
    </div>
    <div class="container">
      <form class="form">
        <div class="row" id="NameSearch">
          <div class="col-25">
            <label for="SearchByName">Search By Name </label>
          </div>
          <div class="col-75">
            <input type="text" name="Namesearch" id="Nsearch" placeholder="Search By Name">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="MaxCal">Max Calories</label>
          </div>
          <div class="col-75">
            <input type="number" min="0" max="20000" step="100"  name="Caloriessearch" value="2000" id="Csearch" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="AddDiet"> Diet </label>
          </div>
          <div class="col-75">
            <select class="DietSelect">
              <option value="" selected>None</option>
              <option value="gluten free">Gluten Free</option>
              <option value="ketogenic">Ketogenic</option>
              <option value="vegetarian">Vegetarian</option>
              <option value="vegan">Vegan</option>
              <option value="primal">Primal</option>
            </select>
          </div>
        </div>
          <div class="row type">
            <div class="col-25">
              <label for="AddType">Type</label>
            </div>
            <div class="col-75">
              <select class="TypeSelect">
                <option value="" selected>Random</option>
                <option value="main course">Main Course</option>
                <option value="side dish">Side Dish</option>
                <option value="breakfast">Breakfast</option>
                <option value="dessert">Dessert</option>
                <option value="salad">Salad</option>
                <option value="snack">Snack</option>
                <option value="drink">Drink</option>
              </select>
            </div>
          </div>
          <div class="row timeframe inactive">
            <div class="col-25">
              <label for="timeframe">Time Frame</label>
            </div>
            <div class="col-75">
              <select class="daySelect">
                <option value="day" selected>Day</option>
                <option value="week" >Week</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="Generatebtn">
              <button type="button" id="Generatebtn"  onclick="MealSearch()"> Generate </button>
            </div>
          </div>
      </form>
    </div>
  </section>
    <!--End of Search-->
<!-- Search Results -->
<div class="SearchResults">
    <div class="wrapper">
      <a href="#" class="mealday active Monday" onclick="GiveActive('Monday')" ><span>Monday</span></a>
      <a href="#" class="mealday Tuesday" onclick="GiveActive('Tuesday')"><span>Tuesday</span></a>
      <a href="#" class="mealday Wednesday" onclick="GiveActive('Wednesday')"><span>Wednesday</span></a>
      <a href="#" class="mealday Thursday" onclick="GiveActive('Thursday')"><span>Thursday</span></a>
      <a href="#" class="mealday Friday" onclick="GiveActive('Friday')"><span>Friday</span></a>
      <a href="#" class="mealday Saturday" onclick="GiveActive('Saturday')"><span>Saturday</span></a>
      <a href="#" class="mealday Sunday" onclick="GiveActive('Sunday')"><span>Sunday</span></a>
    </div>
    <div class="monday">

    </div>
    <div class="tuesday">

    </div>
    <div class="wednesday">

    </div>
    <div class="thursday">

    </div>
    <div class="friday">

    </div>
    <div class="saturday">

    </div>
    <div class="sunday">

    </div>
  </div>
  <!--end of Search Results-->
  <script src="Home/script.js"></script>
  <!--Loader-->
  
  <script>
  
    function loader() {
      document.querySelector('.loader').classList.add('fade-out');
    }
    function fadeOut() {
      setInterval(loader, 3000);
    }
    window.onload = fadeOut();
  </script>
  <div class="loader">
    <img src="Home/images/food.gif">
  </div>
<!--End of Loader-->
</body>

</html>