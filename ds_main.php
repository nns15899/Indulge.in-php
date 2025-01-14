<?php
include 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
    <title>Operating Systems</title>
    <style>
    body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://cdn-media-1.freecodecamp.org/images/1*s6hhrgR5_tXpO_j7uKaHMw.png");
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
  left: 80%;
  transform: translate(-50%, -50%);
  color: white;
}
.heading1 {
    font-size:40px;
    font-family: 'Kiwi Maru', serif;
    position: absolute;
    left: 10%; 
    color: black;
}
.content_1 {
    position:relative;
    top:50px;
    width: 75%;
    margin-left: 10%; 
    /* margin:0 10 0 10; */
    font-size: 20px;
}
.img1 {
    position:relative;
    top:50px;
    width:75%;
    margin-left: 10%;
}
.article_list {

    position:relative;
    top:10%;
    bottom:5%;
    width:50%;
    left:10%;
}
    </style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:70px">OPERATING SYSTEMS</h1>
  </div>
</div>
<!-- content -->
<h2 class = "heading1"><b>Introduction To Operating Systems</b></h2>
<div class = "content_1">
<p><hr>-> An operating system acts as an intermediary between the user of a computer and computer hardware.
The purpose of an operating system is to provide an environment in which a user can execute programs in a
convenient and efficient manner.</p>
<p>-> An operating system is a software that manages the computer hardware. The hardware must provide appropriate
mechanisms to ensure the correct operation of the computer system and to prevent user programs from interfering
with the proper operation of the system.</p><br>
Operating System – Definition:
<ul>
    <li>An operating system is a program that controls the execution of application programs and acts as an interface
        between the user of a computer and the computer hardware.</li>
    <li>A more common definition is that the operating system is the one program running at all times on the computer
        (usually called the kernel), with all else being application programs.</li>
    <li>An operating system is concerned with the allocation of resources and services, such as memory, processors,
        devices, and information. The operating system correspondingly includes programs to manage these resources,
        such as a traffic controller, a scheduler, memory management module, I/O programs, and a file system. </li>
</ul>
<p><b>Functions of Operating system </b>– Operating system performs three functions:<br>

<b>Convenience</b>: An OS makes a computer more convenient to use.<br>
<b>Efficiency</b>: An OS allows the computer system resources to be used in an efficient manner.<br>
<b>Ability to Evolve</b>: An OS should be constructed in such a way as to permit the effective development, testing and introduction
of new system functions at the same time without interfering with service.</p>
</div>
<div class = "img1">
<img src = "images/os1.png">
</div>

<div class = "article_list">
<h2>Recommended Articles</h2><hr>
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action">
    The current button
  </button>
  <button type="button" class="list-group-item list-group-item-action">A second item</button>
  <button type="button" class="list-group-item list-group-item-action">A third button item</button>
  <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
  <button type="button" class="list-group-item list-group-item-action">A disabled button item</button>
</div>
</div>
</body>
<br><br>
</html>

<?php
include 'footer.php';
?>