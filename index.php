<?php
    $bgcolor = "#572b85";
    $hostname = $_SERVER['HTTP_HOST']
?>

<!DOCTYPE html >
<html>
    <head>
        <title><?php echo $hostname ?></title>
        <meta http-equiv="content-type" content="text/html; charset='UTF-8'" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Togald Nilsson" />
        <meta name="robots" content="index, follow" />
        <link rel="icon" href="favicon.png" type="image/png">
        
        <style type="text/css">
            html {
                margin: 0;
                padding: 0;
                background: black url('img/bg.jpg') fixed;
                font-family: 'Liberation Sans',liberation-sans;
                font-size: 11pt;
            }
            body {
                margin: 0;
                padding: 0;
            }
            header {
                width: 100%;
                height: 15mm;
                position: fixed;
                margin: 0;
                padding: 0;
                background-color: <?php echo $bgcolor ?>;
            }
            header h1 {
                font: 13mm 'League Gothic',league-gothic;
                margin: 0;
                padding: 0.5mm 3mm 1.5mm;
                color: white;
                display: block;
                float: left;
            }
            .anchor {
                display: block;
                height: 15mm; /*same height as header*/
                margin-top: -15mm; /*same height as header*/
                visibility: hidden;
            }
            aside {
                width: 100%-1mm;
                margin: 1mm 0 0;
                background: white;
            }
            aside h1 {
                color: white;
                background-color: <?php echo $bgcolor ?>;
                font: 7mm 'League Gothic',league-gothic;
                padding: 0 2mm;
                margin: 0 0 1mm;
            }
            /*aside * {
                padding-right: 7px;
                padding-left: 7px;
            }*/
            aside p {
                text-align: left;
            }
            aside ul {
                margin: 0 0 0 12px;
                padding: 3px 0 7px;
                list-style: square;
            }
            aside li {
                margin: 0 7px 0 17px;
                padding: 3px 0;
            }
            aside li a {
                margin: 0;
                padding: 0;
            }
            a:link, a:visited {
                color: navy;
                text-decoration: none;
            }
            a:hover, a:active {
                color: green;
            }
            pre {
                font-family: 'Droid Sans Mono',droid-sans-mono;
                font-size: 10pt;
                margin: 0 8mm;
                padding: 2px 7px 7px;
            }
            #content section {
                margin: 1mm 1mm 0;
                background: white;
            }
            h1,h2 {
                margin: 0 7mm;
                padding: 2.8mm 0 5mm;
            }
            h3 {
                font: 9mm 'League Gothic',league-gothic;
                padding: 0 7px;
                margin: 0 0 1mm;
                color: white;
                background-color: <?php echo $bgcolor ?>;
            }
            p {
                margin: 0 8mm 0 12mm;
                padding: 0 0 5mm;
                text-align: justify;
            }
            footer {
                width: 100%-1mm;
                background: #e9e9e9;
                margin: 1mm 1mm 3mm;
            }
            footer img {
                display: block;
                margin: 0 auto;
                padding: 4mm 0 2mm;
            }
            footer p {
                text-align: center;
                margin: 0;
                padding: 2mm 0 4mm;
                color: #555;
            }
            @media screen and ( max-width:799px ) {
                #body {
                    width: 100%;
                    background: white;
                    margin: auto;
                }
                .sidebar {
                    display: none;
                }
                #content {
                    float: left;
                    margin: 15mm 0 0;
                }
                p,h1,h2,pre {
                    margin: 0 2mm;
                }
            }
            @media screen and ( max-width:1149px ) and ( min-width:800px ) {
                #body {
                    width: 100%;
                    background: white;
                    margin: auto;
                }
                .sidebar {
                    float: left;
                    width: 200px;
                    margin-top: 15mm;
                }
                #content {
                    float: left;
                    width: calc(100% - 200px);
                    margin: 15mm 0 0;
                }
            }
            @media screen and ( min-width:275mm ) {
                #body {
                    width: 275mm;
                    background: white;
                    margin: auto;
                }
                .sidebar {
                    float: left;
                    width: 65mm;
                    margin-top: 15mm;
                }
                #content {
                    float:left;
                    width: 210mm;
                    margin: 15mm 0 0;
                }
            }
            @font-face {
                font-family: league-gothic;
                src: url('font/LeagueGothic-Regular.otf') format('opentype');
            }
            @font-face {
                font-family: liberation-sans;
                src: url('font/LiberationSans-Regular.ttf') format('truetype');
            }
            @font-face {
                font-family: droid-sans-mono;
                src: url('font/DroidSansMono.ttf') format('truetype');
            }
        </style>
        <script type="text/javascript">
            visible = 0;
            function toggle(x) {
                if (visible == 0) {
                    document.getElementById(x).style.display = "block";
                    visible = 1;
                }
                else {
                    document.getElementById(x).style.display = "none";
                    visible = 0;
                }
            }
            function checkSize() {
                if ( window.innerWidth >= 1600 ) {
                    toggle("navigation");
                }
            }
        </script>
    </head>
    <body onload="checkSize()">
        <header>
            <h1><?php echo $hostname ?></h1>
        </header>
        <div id=body>
            <div id=content>
                <span class="anchor" id="home"></span>
                <section>
                    <a name="top"><h1>Welcome to <?php echo $hostname ?>!</h1></a>
                    <p><strong>You've ventured here by IP address, impressive! </strong>
                    
                    <p>If you found this place, this means you're either stalking me, or you're trying to get to my server via the backdoor. This place doesn't really contain anything useful, but I gotta give you something as a reward for finding my IP, don't I? 
                    
                    <p>So below's a list of my hardware. Enjoy! 
                </section>
                <span class="anchor" id="abisko"></span>
                <section>
                    <h3>Servers</h3>
                    <p>
                    <pre>Lisbeth
        OS:         Debian 10.2 'buster' amd64
        System:     Lenovo Thinkpad W530
        CPU:        Intel Core i7 3610QM
        Graphics:   nVidia Quadro K1000M
        Mem:        20 GB SO-DDR3
        Disk:       240 GB SATA SSD
                    3 TB USB HDD
        Role:       Home server/primary server
        Services:   Web server
                    Media center
                    Primary syncthing node
                    Torrent seedbox
        Location:   A

Saga
        OS:         Ubuntu 19.10 amd64
        System:     Acer M3400
        CPU:        AMD Phenom 2 X6 1035T
        Graphics:   -
        Mem:        8 GB
        Disk:       60 GB SATA SSD
                    5x500 GB SATA HDD RAID
        Role:       Offsite backup
        Services:   Syncthing
        Location:   KK
                    </pre>
                </section>
                <footer>
                    <img src="img/licenses-copyleft.png" width=47 height=47 alt="Colyleft">
                    <p>Copyleft: Togald Nilsson <?php echo date("Y") ?>
                </footer>
            </div>
            <div id=rightbar class=sidebar>
                <aside>
                    <h1>Check out my websites!</h1>
                    <ul>
                        <li><a href="gerf/">Gimo episka rollspelsförening</a>
                        <li>My other coding stuff on <a href="https://github.com/togald">GitHub</a>
                    </ul>
                </aside>
                <aside>
                    <h1>Check out my photography!</h1>
                    <div style="text-align:center;">
                        <img src="img/photobytogald.png" width=145mm style="margin:0 auto;">
                    </div>
                    <p>My handle is <code>@photobytogald</code>.
                    <div style="text-align:center;padding: 0 0 2.5mm;">
                        <a href="https://facebook.com/photobytogald" style="display:inline-block;"><img src="img/icons/fb.svg" width=50mm></a>
                        <a href="https://instagram.com/photobytogald" style="display:inline-block;"><img src="img/icons/ig.svg" width=50mm></a>
                        <a href="https://deviantart.com/photobytogald" style="display:inline-block;"><img src="img/icons/da.svg" width=50mm></a>
                        <a href="https://flickr.com/photos/photobytogald" style="display:inline-block;"><img src="img/icons/flickr.svg" width=50mm></a>
                    </div>
                </aside>
                <aside>
                    <h1>Operating systems</h1>
                    <p>This is an open source-only site
                    
                    <div style="text-align:center;">
                        <a href="http://archlinux.org" style="display:inline-block;"><img src="img/powered_by_gnu_linux_by_deviantdark/archlinux.png" width=60></a>
                        <a href="http://debian.org" style="display:inline-block;"><img src="img/powered_by_gnu_linux_by_deviantdark/debian.png" width=60></a>
                        <a href="http://ubuntu.com" style="display:inline-block;"><img src="img/powered_by_gnu_linux_by_deviantdark/ubuntu.png" width=60></a>
                    </div>
                </aside>
            </div>
        </div>
    </body>
</html>
