<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/zih0gfq.css">
    <link rel="stylesheet" href="nav.css">
</head>
<script>
    function myFunction() {
        var x = document.getElementById("links");
            if (x.style.display === "grid") {
                x.style.display = "none";
            } else {
                x.style.display = "grid";
            }
        } 
</script>
<div id="navBar">

        <a class="icon" href="index.php">Home</a>

        <a class="fullScreenLinks" href="index.php">Home</a>
        <a class="fullScreenLinks" href="#about">About Me </a>
        <a class="fullScreenLinks" href="#portfolio">Portfolio</a>
        <a class="fullScreenLinks" href="https://stackoverflow.com/users/17403432/tom-burrows">Stack Overflow</a>
        <a class="fullScreenLinks" href="https://github.com/TomBurrows101">GitHub</a>
        

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
</div>
<div id="links">
            <a href="#about">About Me </a>
            <a href="#portfolio">Portfolio</a>
            <a href="https://stackoverflow.com/users/17403432/tom-burrows">Stack Overflow</a>
            <a href="https://github.com/TomBurrows101">GitHub</a>
</div>