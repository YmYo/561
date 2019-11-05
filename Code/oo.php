

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hpbootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet"  href="css/zzsc.css">
    <link rel="stylesheet" href="css/species-style.css">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <link rel="stylesheet" type="text/css" href="css/dragslot.css">
    <script src="Javascript/modernizr-custom.js"></script>

</head>


<body>

<?php session_start();
$people=$_SESSION['thepreson'];
?>

<div class="md-modal md-effect-12" id="modal-12">
    <div class="md-content">
        <h3>MENU</h3>
        <div>
            <p>JUMP TO</p>
            <ul>
                <li><a href="oo.php#twopage" style="color: #ffffff;">INTRODUCE</a> zzzz</li>
                <li><a href="oo.php#threepage" style="color: #ffffff;">NEWS</a></li>
                <li><a href="oo.php#fourpage" style="color: #ffffff;">INFO</a></li>
            </ul>
<!--            <button ><a href="login.html">Close me!</a></button>-->
            <button class="md-close">CLOSE!</button>
        </div>
    </div>
</div>
<div class="md-modal md-effect-15" id="modal-15">
    <div class="md-content">
        <h3>HEALTHCARE SYS</h3>
        <div>
            <p>Popup window</p>
            <ul>
                <li>Popup000</li>
                <li>Popup111</li>
                <li>Popup222！</li>
            </ul>
            <button class="md-close">CLOSE</button>
        </div>
    </div>
</div>


<div class="side-nav" role="navigation">
    <ul class="nav-side-nav">
        <li><a class="tooltip-side-nav" href="#onepage"></a> </li>
        <li><a class="tooltip-side-nav" href="#twopage"></a> </li>
        <li><a class="tooltip-side-nav" href="#threepage"></a> </li>
        <li><a class="tooltip-side-nav" href="#fourpage"></a> </li>
        <li><a class="tooltip-side-nav" href="#fivepage"></a> </li>
        <li><a class="tooltip-side-nav" href="#sixpage"></a> </li>
    </ul>
</div>



<div class="onepage">
    <div class="onepage-bg" id="onepage"></div>
    <div class="container">
        <div class="row">
            <div class="title-text">
                <div class="col-md-12 headfontsize">
                    <div class="menu" style="position: absolute">
                        <a class="md-trigger" data-modal="modal-12" style="position: relative;margin-right: 120px">菜单栏 </a>
                    </div>

                    <div class="login" >

                        <a href="personal-info/index.php" ><?php echo $people?></a>
                        <a href="login.php">EXIT</a>
                    </div>

                    <h1 class="headh1content">
                        HEALTHCARE SYS</br>
                        Cats Museum
                    </h1>
                    <p>JOINUS </p>
                    <p class="btn-personal-data">
                    <button class="md-trigger" data-modal="modal-15" >INTRO</button><br/><br/><br/>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="md-overlay"></div>


<script>
    var polyfilter_scriptpath = '/js/';
</script>





<div class="twopage" id="twopage">
    <div class="container" style="width: 70%">
        <div class="coursexingqing-text">
            <h1>Introduce</h1>
            <p>KINDS</p>
        </div>


        <div class="cd-svg-clipped-slider" data-selected="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400
c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z" data-lateral="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441
C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760
c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z">

            <div class="gallery-wrapper">
                <ul class="gallery">
                    <li class="left">
                        <div class="svg-wrapper">
                            <svg viewBox="0 0 800 800">
                                <defs>
                                    <clipPath id="cd-image-1">
                                    <path id="cd-morphing-path-1" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                                    </clipPath>
                                </defs>
                                <image height='800px' width="800px" clip-path="url(#cd-image-1)" xlink:href="image/intro1.png"></image>
                                <use xlink:href="#cd-morphing-path-1" class="cover-layer"/>
                            </svg>
                        </div>
                    </li>
                    <li class="selected">
                        <div class="svg-wrapper">
                            <svg viewBox="0 0 800 800">

                                <defs>
                                    <clipPath id="cd-image-2">
                                        <path id="cd-morphing-path-2" d="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400 c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z"/>
                                    </clipPath>
                                </defs>

                                <image height='800px' width="800px" clip-path="url(#cd-image-2)" xlink:href="image/intro2.png"></image>
                                <use xlink:href="#cd-morphing-path-2" class="cover-layer"/>
                            </svg>
                        </div>
                    </li>
                    <li class="right">
                        <div class="svg-wrapper">
                            <svg viewBox="0 0 800 800">

                                <defs>
                                    <clipPath id="cd-image-3">
                                        <path id="cd-morphing-path-3" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                                    </clipPath>
                                </defs>

                                <image height='800px'' width="800px" clip-path="url(#cd-image-3)"
                                       xlink:href="image/intro3.png"></image>
                                <use xlink:href="#cd-morphing-path-3" class="cover-layer"/>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="svg-wrapper">
                            <svg viewBox="0 0 800 800">

                                <defs>
                                    <clipPath id="cd-image-4">
                                        <path id="cd-morphing-path-4" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                                    </clipPath>
                                </defs>

                                <image height='800px' width="800px" clip-path="url(#cd-image-4)" xlink:href="image/intro4.png"></image>
                                <use xlink:href="#cd-morphing-path-4" class="cover-layer"/>
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="svg-wrapper">
                            <svg viewBox="0 0 800 800">

                                <defs>
                                    <clipPath id="cd-image-5">
                                        <path id="cd-morphing-path-5" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                                    </clipPath>

                                </defs>

                                <image height='800px' width="800px" clip-path="url(#cd-image-5)" xlink:href="image/intro5.png"></image>
                                <use xlink:href="#cd-morphing-path-5" class="cover-layer"/>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="threepagebtn">
                <a id="threepage-go" href="speciesintro/index.php" class="btn btn-success btn-lg">LEARN MORE</a>
            </div>
        </div>

        <script src="Javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="Javascript/snap.svg-min.js"></script>
        <script src="Javascript/main.js"></script>

    </div>
</div>


<div class="threepage" id="threepage">
    <div class="threepage-text">
        <h1 class="threepage-text-h1">
            <p>NEWs<img src="image/aaa.png"></p>
        <div class="row">
            <div class="threepage-news col-md-4">
                <a href="news/bb.php">
                    <img src="image/blog1.jpg" style="width: 100%">
                    <div class="click">
                        <h3> CLICK</h3>
                    </div>
                </a>
            </div>

            <div class="threepage-news col-md-4">
                <a href="news/bb.php">
                    <img src="image/blog2.png" style="width: 100%">
                    <div class="click">
                        <h3> CLICK</h3>
                    </div>
                </a>
            </div>

            <div class="threepage-news col-md-4">
                <a href="news/bb.php">
                    <img src="image/blog3.png" style="width: 100%">
                    <div class="click">
                        <h3> CLICK</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="threepagebtn">
            <a id="threepage-go" href="news/bb.php" class="btn btn-success btn-lg">GO</a>
        </div>
    </div>
</div>

<div class="fourpage" id="fourpage">
    <div class="fourpage-bg" id="fourpage">
        <div class="q">
            <div class="footertext" style="margin-top: 40px;margin-left: 40px">
                <h1>INFO</h1>
            </div>
            <div class="footerbtncenter">
                <div class="row">
                    <a href="Friends/wodemaa.php">
                        <div class="col-md-4">
                            <img src="image/friend1.png" class="footerbtn queyeicon">
                        </div>
                    </a>
                    <a href="Friends/wodemaa.php">
                        <div class="col-md-4">
                            <img src="image/friend2.png" class="footerbtn queyeicon">
                        </div>
                    </a>
                    <a href="Friends/wodemaa.php">
                        <div class="col-md-4">
                            <img src="image/friend3.png" class="footerbtn queyeicon">
                        </div>
                    </a>
                </div>
            </div>
            <div class="footertextbtn">
                <a href="Friends/wodemaa.php" button type="button" class="btn btn-success btn-lg" style="font-size: 25px">
                    CLICK
                    </button>
                </a>
                <p class="footertextbtn-text" style="color: #dff0d8">
                   FINDMORE
                </p>
            </div>
        </div>
    </div>
    <script src="Javascript/jquery-2.1.1.min.js"></script>
    <script src="Javascript/bootstrap.min.js"></script>
    <script src="Javascript/index.js"></script>
</div>>

<div class="fivepage" id="fivepage">
    <div class="fivepage-bg" id="fivepage">
        <div class="page-text">
            <div class="coursexingqing-text">
<!--                <p><a id="sixpage-go" href="subscribe/index.php">网上预约-->
<!--                    </a></p>-->
                <div class="threepagebtn" style="margin-top: -120px">
                    <a id="threepage-go" href="subscribe/index.php" class="btn btn-success btn-lg">APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sixpage" id="sixpage">
    <div class="sixpage-text">
        <div class="coursexingqing-text">
            <h1>Online</h1>
            <p><a id="sixpage-go" href="#">ONLine</a></p>
        </div>
        <div>
            <section class="demo clearfix">
                <div id="dragslot" class="container">
                    <div class="slot-title bg-red border-red">DOCTOR</div>
                    <div class="slot-title bg-yellow border-yellow">CONSULT</div>
                    <div class="slot-title bg-green border-green">HOSPITAL</div>
                    <div class="slot border-red">
                        <ul class="slot-list">
                            <li class="slot-item" id="a"><div class="slot-handler clearfix">
                                    <div class="avator">
                                        <img src="image/avatar1.jpg"/>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">a adf g</div>
                                        <p>lallalal</p>
                                    </div>
                                </div></li>
                            <li class="slot-item"><div class="slot-handler">
                                    <div class="slot-handler clearfix">
                                        <div class="avator">
                                            <img src="image/avatar2.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">a adf g</div>
                                            <p>lallalal</p>
                                        </div>
                                    </div>
                                </div></li>
                            <li class="slot-item"><div class="slot-handler">
                                    <div class="slot-handler clearfix">
                                        <div class="avator">
                                            <img src="image/avatar3.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">kekekkeke</div>
                                            <p>poiuytrew</p>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <div class="slot border-yellow">
                        <ul class="slot-list">
                            <li class="slot-item"><div class="slot-handler">
                                    <div class="slot-handler clearfix">
                                        <div class="avator">
                                            <img src="image/avatar5.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">1234567f</div>
                                            <p>fhrtjt yykyuk</p>
                                        </div>
                                    </div>
                                </div></li>
                            <li class="slot-item"><div class="slot-handler">
                                    <div class="slot-handler clearfix">
                                        <div class="avator">
                                            <img src="image/avatar6.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">dglkgkepgk</div>
                                            <p>dgwjoejwogjwoego</p>
                                        </div>
                                    </div>
                                </div></li>
                        </ul>
                    </div>
                    <div class="slot border-green">
                        <ul class="slot-list">
                            </li>
                            <li class="slot-item"><div class="slot-handler">
                                    <div class="slot-handler clearfix">
                                        <div class="avator">
                                            <img src="image/avatar4.jpg"/>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">nnnnnn</div>
                                            <p>egerhejuty</p>
                                        </div>
                                    </div>
                                </div></li>
                        </ul>
                    </div>
                </div>
                </section>
            <script type="text/javascript" src="Javascript/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="Javascript/dragslot.js"></script>
            <script>
                jQuery(function($){
                    $('#dragslot').dragslot({
                        dropCallback: function(el){
                            //	alert(el);
                        }
                    });
                });
            </script>
        </div>

    </div>
</div>


</body>
</html>
