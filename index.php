<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variety</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
</head>
<body>

<header class="bgParallax" data-speed="10">
<nav>
    <div class="bt-logo">
        <a href="/" title="START" >LOGO</a>
    </div>
    <div class="menu">
        <li>
            <ul><a href="/" title="START" class="active" >START</a></ul>
            <ul><a href="/" title="ABOUT ME" >ABOUT ME</a></ul>
            <ul><a href="/" title="WORK" >WORK</a></ul>
            <ul><a href="/" title="CONTACT" >CONTACT</a></ul>
        </li>
    </div>
</nav>
<div class="header-int">
    <h1>May I introduce myself?</h1>
    <div class="div"></div>
    <h2>Frontend Design | UI/UX Design</h2>
    
    <div id="header-bt">
        <a href="/" title="GO AHEAD" >GO AHEAD</a>
    </div>
</div>
</header>

<script>
$('div.bgParallax').each(function(){
    var $obj = $(this);

    $(window).scroll(function() {
        var yPos = -($(window).scrollTop() / $obj.data('speed')); 

        var bgpos = '50% '+ yPos + 'px';

        $obj.css('background-position', bgpos );

    }); 
});
</script>
</body>
</html>