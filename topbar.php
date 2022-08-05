
    <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">  
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#locate">LOCATION</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>

            <h4 class="logo"> MechaBot</h4> 
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

    <script>
    var prevScrollpos = window.pageYOffset; 
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
    </script>
