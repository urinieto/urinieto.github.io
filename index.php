<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Erasure
Description: A two-column, fixed-width design with a dark color scheme.
Version    : 1.0
Released   : 20120205
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>:::Oriol Nieto @ NYU:::</title>
<script src="jquery.js"></script>
<script>
$(function(){
    $("#header").load("header.html");
    $("#sidebar").load("sidebar.html");
    $("#footer").load("footer.php");
});
</script>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
    <div id="header"> </div>
    <div id="page">
        <div id="content">
            <div id="post1">
                <h2>Hola!</h2>
                <img class="alignleft" src="images/uri.jpeg" width="240" height="348" alt="" />
                <p>
                I am Oriol Nieto (Uri), a Senior Data Scientist at Pandora who previously pursued a Ph.D in Music Technology at the Music and Audio Research Lab (<a href="http://marl.smusic.nyu.edu/">MARL</a>) in <a href="http://www.nyu.edu">NYU</a>.</p>

                <p>
                My current research focuses on topics such as music information retrieval, large scale recommendation systems, and machine learning with especial emphasis on deep architectures.
                My Ph.D thesis is about trying to better teach computers at "understanding" the structure of music. You can find it <a href="http://marl.smusic.nyu.edu/nieto/publications/Nieto-Dissertation.pdf" target="_blank">here</a>.
                I develop open source Python packages (such as <a href="https://github.com/urinieto/msaf" target="_blank">msaf</a>), play guitar, violin, and sing (and scream) in my spare time.
                </p>
            </div>
        </div>
        <div id="sidebar"> </div>
        <br class="clearfix" />
    </div>
</div>
<div id="footer">
</div>
</body>
</html>
