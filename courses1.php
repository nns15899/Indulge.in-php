<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1457276587196-a9d53d84c58b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80");
  height: 70%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.btn_section
{
  background: #DCDCDC;
  height: 200px;
}

h2 {
  text-align:center;
  margin-top:10px;
}

.button1 {
  border-radius: 4px;
  background-color: #FF7F50;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 80px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.button2 {
  border-radius: 4px;
  background-color: #FF7F50;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 150px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

.button3 {
  border-radius: 4px;
  background-color: #FF7F50;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 180px;
}

.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-right: 25px;
}

.button3:hover span:after {
  opacity: 1;
  right: 0;
}

.button4 {
  border-radius: 4px;
  background-color: #FF7F50;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 240px;
}

.button4 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button4 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button4:hover span {
  padding-right: 25px;
}

.button4:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>
</head>
<?php
include 'layout.php';
?>
<body>
<!-- background-image -->
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">The Learning continues untill the day you die.</h1>
  </div>
</div>

<!-- buttons -->
<div class="btn_section">
<h2>COURSES OFFERED</h2>
<button class="button1"><span>OS</span></button>
<button class="button2"><span>CN</span></button>
<button class="button3"><span>DS</span></button>
<button class="button4"><span>CC</span></button>
</div>
</body>
<?php
include 'footer.php';
?>
</html>