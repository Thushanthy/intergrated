<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    $pri: #FD2549;
$sec: #E5E6F1;

body {
background-color: $pri;
box-sizing: border-box;
font-family: 'Raleway', sans-serif;
}

.container {
width: 800px;
height: 250px;

position: absolute;
top: 0; left: 0; right: 0; bottom: 0;
margin: auto;
box-sizing: border-box;

display: grid;
grid-template-columns: repeat( auto-fit, minmax(250px, 1fr) );
grid-template-rows: 1fr;
grid-gap: 15px;
}

.items {
border-radius: 5px;
display: grid;
grid-template-rows: 2fr 1fr;
grid-gap: 10px;
cursor: pointer;
border: 3px dotted black;
transition: all 0.6s;
}


.icon-wrapper, .project-name {
display: flex;
align-items: center;
justify-content: center;
}

.icon-wrapper i {
font-size: 100px;
color: $sec;
transform: translateY(0px);
transition: all 0.6s;
}

.icon-wrapper {
align-self: end;
}

.project-name {
align-self: start;
}
.project-name p {
font-size: 24px;
font-weight: bold;
letter-spacing: 2px;
color: $sec;
transform: translateY(0px);
transition: all 0.5s;
}

.items:hover {
border: 3px solid $sec;

& .project-name p {
  transform: translateY(-10px);
}
& .icon-wrapper i {
  transform: translateY(5px);
}
}
    </style>
  </head>
  <body>
    <div class="container">
  <div class="items">
    <div class="icon-wrapper">
      <i class="fa fa-file-text-o"></i>
    </div>
    <div class="project-name">
      <p>POSTS</p>
    </div>
  </div>
  <div class="items">
    <div class="icon-wrapper">
      <i class="fa fa-th-list"></i>
    </div>
    <div class="project-name">
      <p>PROJECTS</p>
    </div>
  </div>
  <div class="items">
    <div class="icon-wrapper">
      <i class="fa fa-th-large"></i>
    </div>
    <div class="project-name">
      <p>COLLECTIONS</p>
    </div>
  </div>
</div>
  </body>
</html>
