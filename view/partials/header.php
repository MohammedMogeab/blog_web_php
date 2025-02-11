<!DOCTYPE html>
<html lang="en"  class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-full">


<div class="min-h-full">
    <!-- this is the style of profile -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
    body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa; /* Light background for better contrast */
}

.card-container {
  background-color: #231e39;
  border-radius: 10px;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  color: #b3b8cd;
  padding: 30px;
  width: 350px;
  text-align: center;
  position: relative;
}

.card-container .profile-photo {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 5px solid #03bfcb;
  margin: 0 auto; /* Centers horizontally */
  display: block; /* Allows margin auto to work */
  margin-top: -75px; /* Pull the image slightly up to overlap the card */
  background-color: #2d2747;
}

.card-container .pro {
  background-color: #febd0b;
  border-radius: 3px;
  color: #231e39;
  font-size: 14px;
  font-weight: bold;
  padding: 5px 10px;
  position: absolute;
  top: -20px; /* Adjust based on design */
  left: 10px;
}
.profile-photo {
  width: 150px;   /* Adjust the size of the photo */
  height: 150px;  /* Adjust the size of the photo */
  border-radius: 50%;  /* Makes the image circular */
  object-fit: cover;  /* Ensures the image is properly scaled inside the circle */
}

.card-container h3 {
  margin-top: 20px; /* Adds space below the image */
  color: white;
  font-size: 20px;
}

.card-container h6 {
  margin: 10px 0;
  color: #b3b8cd;
  font-size: 14px;
}

.card-container button.primary {
  background-color: #03bfcb;
  border: none;
  border-radius: 5px;
  color: #231e39;
  font-weight: bold;
  margin: 10px 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.card-container button.primary.ghost {
  background: none;
  color: #03bfcb;
  border: 1px solid #03bfcb;
}

.card-container .skills {
  background-color: #1f1a36;
  border-radius: 5px;
  padding: 15px;
  margin-top: 20px;
}

.card-container .skills ul {
  list-style: none;
  padding: 0;
}

.card-container .skills ul li {
  background-color: #2d2747;
  border-radius: 5px;
  display: inline-block;
  margin: 5px;
  padding: 5px 10px;
  font-size: 12px;
  color: white;
}

/* end of style of profile */


</style>







