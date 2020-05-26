<?php
  include_once('../../partials/root_vars.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once('../../partials/meta.php');?>
  <meta name="description" content="Learn about Prometeo, their winning IoT solution from the Call for Code Global Challenge, and their deployment journey. Get inspired by their tech and story!" />
  <meta name="keywords" content="iot platform, iot solution, prometeo,call for code challenge,code and response" />
  <meta property="og:title" content="Prometeo's Call for Code Deployment Journey - Code and Response" />
  <meta property="og:description" content="Learn about Prometeo, their winning IoT solution from the Call for Code Global Challenge, and their deployment journey. Get inspired by their tech and story!" />
  <meta property="og:image" content="" />
  <meta name="twitter:description" content="Learn about Prometeo, their winning IoT solution from the Call for Code Global Challenge, and their deployment journey. Get inspired by their tech and story!" />
  <meta name="twitter:title" content="IBM Code and Response - About" />
  <title>Prometeo's Call for Code Deployment Journey - Code and Response</title>
  <!--<link href="//dw1.s81c.com/callforcode/css/style.css" rel="stylesheet">-->
  <link tabindex="0" href="../../css/style.css" rel="stylesheet" />
  <?php include_once('../../partials/ddo.php');?>

  <link rel="stylesheet" id="carbon-styles-css" href="https://3kda485d4m0mmprok50zsd5m-wpengine.netdna-ssl.com/wp-content/themes/_carbon-theme/carbon/carbon-components.css?ver=5.1.1" type="text/css" media="all">
  <link rel="stylesheet" id="ibm-carbon-style-css" href="https://3kda485d4m0mmprok50zsd5m-wpengine.netdna-ssl.com/wp-content/themes/_carbon-theme/style.css?ver=1556578229" type="text/css" media="all">
  <script type="text/javascript" src="https://3kda485d4m0mmprok50zsd5m-wpengine.netdna-ssl.com/wp-content/themes/_carbon-theme/js/ibmcode.js?ver=20151215" defer="defer"></script>
  <script type="text/javascript" src="https://3kda485d4m0mmprok50zsd5m-wpengine.netdna-ssl.com/wp-content/themes/_carbon-theme/carbon/carbon-components.min.js?ver=5.1.1" defer="defer"></script>
  <script type="text/javascript" src="https://3kda485d4m0mmprok50zsd5m-wpengine.netdna-ssl.com/wp-content/themes/_carbon-theme/carbon/index.js?ver=5.1.1" defer="defer"></script>

  <script src="//1.www.s81c.com/common/stats/ida_stats.js"></script>
  <link tabindex="0" href="//1.www.s81c.com/common/v18/css/www.css" rel="stylesheet" />
  <link tabindex="0" href="//1.www.s81c.com/common/v18/css/grid-fluid.css" rel="stylesheet" />
  <script src="//1.www.s81c.com/common/v18/js/www.js"></script>
  <script type="text/javascript">
     IBMCore.common.util.config.set({
      "footer":{
        "socialLinks":{
          "enabled":false
        }
      },
      survey: { global_percent: 0 }
    });

 /** Scroll back-to-top */

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  //Get the button
var mybutton = document.getElementById("myBtn");

  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }


  }


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 550;
  document.documentElement.scrollTop = 550;
}

/*
var url = window.location.href;
				var index = url.lastIndexOf("/") + 1;
				var filename = url.substr(index);
				if (filename == "index.html") {
					$("myBtn").hide() ;
				};
*/


function closeModal(eid) {
  var modal = jQuery(`#${eid}`);
  var iframe = modal.find('iframe');
  var src = iframe.attr('src');
  var index = src.indexOf('?autoplay=1')
  if(index > -1) {
    src = src.substring(0, index);
  }
  iframe.attr('src', src);
  modal.removeClass('is-visible');
}

    function openModal(eid) {
      var modal = jQuery(`#${eid}`);
      var iframe = modal.find('iframe');
      modal.addClass('is-visible');
      var newSrc = iframe.attr('src') + '?autoplay=1';
      console.log(newSrc);
      iframe.attr('src', newSrc);
    }


    function hide(e) {
      e.style.display = 'none';
      e.parentElement.querySelector('.show').style.display = 'block';
      e.parentElement.parentElement.parentElement.querySelector('.details').style.display = 'none';
    }

    function show(e) {
      e.style.display = 'none';
      e.parentElement.querySelector('.hide').style.display = 'block';
      e.parentElement.parentElement.parentElement.querySelector('.details').style.display = 'block';
    }

</script>

</head>
<body id="ibm-com" class="ibm-type">
  <div id="ibm-top" class="ibm-landing-page">
    <?php include_once('../../partials/header.php');?>
 

    <div id="ibm-content-wrapper" role="main"><!-- ContentWrapper -->

      <style>
        body#whd .cfc-section h3 {
          font-size: 2.1875rem;
          font-weight: 300;
          padding-bottom: 2vw;
          margin-bottom: 4vw;
          display: inline-block;
          border-bottom: 3px solid #0062FF;
        }
        hr {
          display: block;
          height: 0;
          margin-top: 1vw;
          margin-right: auto;
          margin-left: 0;
          margin-bottom: 2vw;
          border-style: solid;
          border-width: 3px;
          border-color: #0062FF;
          width: 150px;
        }
        #health {
        }
        #owl {
        }
        .video-header {
          position: relative;
          background-color: black;
          min-height: 25rem;
          width: 100%;
          overflow: hidden;
          color: #fff;
        }
        .video-header h1 {
          font-size: 3rem;
          line-height: 3.4rem;
        }
        .video-header video {
          position: absolute;
          top: 50%;
          left: 50%;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
          z-index: 0;
          -ms-transform: translateX(-50%) translateY(-50%);
          -moz-transform: translateX(-50%) translateY(-50%);
          -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
        }
        .video-header .container {
          position: relative;
          z-index: 2;
        }
        .video-header .overlay {
          position: absolute;
          top: 0;
          left: 0;
          height: 100%;
          width: 100%;
          background-color: black;
          opacity: 0.5;
          z-index: 1;
        }
        .video-header .play-button {
          display: flex;
          align-items: center;
          justify-content: center;
          height:100%;
        }
        .video-header .play-button img {
          height: auto;
          width: 140px;
        }
        .video-header .play-button img:hover {
          width: 150px;
          cursor: pointer;
        }
        .video-header .play-button img:active {
          width: 140px;
        }
        .share-support-banner {
          background: rgb(39,39,39);
          color:white;
          padding-top: 20px;
          padding-bottom: 10px;
          font-weight: 500;
        }
        .cfc-text-blue {
          color: #89cfff;
        }
        .cfc-section .cfc-info {
          color: #E1E1E1;
          font-family: "IBM Plex Sans";
          font-size: 16px;
          letter-spacing: 0;
          line-height: 22px;
        }
        .cfc-section img {
          margin-top: 15px;
        }
        #modal-prometeo-hero-video .bx--modal-container {
          width: 45%;
          height: auto;
          background-color: #000;
          color: #fff;
          /* overflow:scroll; */
          border-top: 0;
        }
        #modal-prometeo-hero-video-heading {
          color: #fff;
        }
        #modal-prometeo-hero-video .video-responsive {
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
        }
        #modal-prometeo-hero-video .video-responsive iframe {
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
          margin-bottom: 15px;
        }
        h1 {
          margin: 0;
        }
        .video-header h1 {
          color: #fff;
        }
        section.cfc-section {
          padding-bottom: 3vw;
        }
          /* lets override the carbon button styles */
        .bx--btn--primary {
          background-color: #0062FF;
          border-color: #0062FF;
          color: #fff;
        }
        .bx--btn--primary:hover {
          background-color: #BEBEBE;
          border-color: #BEBEBE;
          color: #333;
        }
        .bx--btn--secondary {
          background-color: transparent;
          border-width: 2px;
          border-style: solid;
          border-color: #fff;
          color: #fff;
        }
        .bx--btn--secondary:visited {
          color: #0062FF;
        }
        .bx--btn--secondary:hover {
          background: #fff;
          border-color: #fff;
          color: black;
        }

        #intro-sect {
          margin-top:3.5em;
        }
        .bx--no-gutter {
          padding-left:0px !important;
          padding-right:0px !important;
        }
        .prometeo-title {
        color: #E1E1E1;
        font-family: "IBM Plex Sans";
        font-size: 32px;
        font-weight: 600;
        letter-spacing: 0;
        line-height: 36px;
        }

        .bx--modal-container {
        width: 45%;
        height: auto;
        background-color: #000;
        color: white !important;
        /* overflow: scroll; */
        border-top: 0;
        }


        .sub-title{
        color: #E1E1E1;
        font-family: "IBM Plex Sans";
        font-size: 16px;
        letter-spacing: 0;
        line-height: 22px;
        }

        .btn-label{
        color: #FFFFFF;
        font-family: "IBM Plex Sans";
        font-size: 14px;
        letter-spacing: 0.16px;
        line-height: 18px;
        text-align:center !important;
        }

        .background {
        color: #FFFFFF;
        font-family: "IBM Plex Sans";
        font-size: 14px;
        letter-spacing: 0.16px;
        line-height: 18px;
        }

        .background-cta-final{
        color: black !important;
        font-family: "IBM Plex Sans";
        font-size: 14px;
        letter-spacing: 0.16px;
        line-height: 18px;
        background-color:white;
        border: 2px solid black;
        }

        .ideation{
          color: #676767;
          font-family: "IBM Plex Sans";
          font-size: 1.3em;
          letter-spacing: 0;
          line-height: 36px;
          margin-bottom:1em;
        }

        .milestone_txt {
         color: #161616;
        font-family: "IBM Plex Sans";
        font-size: 18px;
        letter-spacing: 0;
        line-height: 24px;
        margin-top:5em !important;
        }
        .section-header{
          font-size: 18px;
          line-height: 23px;
          font-weight:600;
          color: #2C2C2C;
          font-family: 'IBM Plex Sans';
          padding-top:0em;
          padding-bottom:0em;
        }
        .sub-txt {
          color: #161616;
          font-family: "IBM Plex Sans";
          font-size: 16px;
          letter-spacing: 0;
          line-height: 24px;
        }


     .play-icon1 {
     width: 60px;
    height: 60px;
    position: absolute;
    top: 32px;
    right:32px;

    }

     .img-overlay{
     position: relative;
    }


      .img-overlay:hover{
     cursor:pointer;
    }

    .cfc-2020-video-container {
      width: 100%;
    height: 100%;
    padding-top: initial;
    }

        .oval {
        height: 128px;
        width: 128px;
        border-radius: 50%;
        display: flex;

        }
        .center{
          align-items: center;
        }
        .date-timeline{
        width: 100%;
        text-align: center;
        font-size:35px;
        font-weight:400;
        align-items:center;
        font-family: "IBM Plex Mono", "Menlo", "DejaVu Sans Mono",
  "Bitstream Vera Sans Mono", Courier, monospace;
        }

        .month-timeline{
          width: 100%;
          font-size:25px;
          font-weight:200 ;
          align-items:center;
        }

        .path {
         box-sizing: border-box;
         height: 168px;
          width: 0.5px;
         border: 2px solid #979797;
        }

   #myBtn {
    width: 3rem;
    height: 3rem;
    border-radius: 50% !important;
    background: #C6C6C6 !important;
    border-color: transparent;
    position: fixed;
    bottom: 3rem;
    right: 2rem;
    transition: all .11s;
    cursor: pointer;
    z-index: 9000;
    padding-top: 0.375;
    margin-left:-1em !important;
    align-items:center !important;
    display:none;
        }

    #myBtn svg {
    fill: #000;
    display: block !important;margin: auto !important;
    }

    .center {
      margin:0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      float:center;
    }

    .banner  {
     height: 136px !important;
     width: 994px !important;
     text-align: center;

    }

    .highlight {
      background-color:black;
      color:white;
      height: 128px;
      width: 128px;
      border-radius: 50%;
      display: flex;
    }

    .underlined-header {
    color: #3a3a3a;
    /* border-bottom: 10px solid #C9E0F8; */

    font-weight: 900;
    font-size: 3vw !important;
    line-height: 2rem;
    padding:0 0 25px !important;

    width: 100%;

    }

    .underlined-header span {
      box-shadow: inset 0px -8px 0px 0px rgba(173, 216, 230, 0.99);
    }

.mobile-underline {
  color: #3a3a3a;
  border-bottom: 10px solid #add8e6;
  font-size: 1vw;
  line-height: 2rem;
  padding:0 0 5px !important;

  color: #161616;
  font-family: "IBM Plex Sans";
  font-size: 40px;
  font-weight: 600;
  letter-spacing: 0.46px;
  line-height: 64px;
}
.dotted-path {
  box-sizing: border-box;
  height: 280px;
  width: 1px;
  border: 2px dashed #979797;
}
.quote_txt{
  color: #070707;
  font-family: "IBM Plex Sans";
  font-size: 18px;
  letter-spacing: 0;
  line-height: 28px;
  font-style: italic;
  display: inline-block;
  margin-left:2em;
  margin-top:-2em;
}

 .link-color {
  color: #0F62FE;
 }

.blue_quote{
  color: #0354E9;
  font-family: "IBM Plex Sans";
  font-size: 72px;
  font-style: italic;
  letter-spacing: 0;
  line-height: 36px;
  vertical-align: top;
}


.bx--btn--tertiary1{
   background-color: rgba(0,0,0,0) !important;
    border-width: 1px;
    border-style: solid;
    border-color: #0062ff !important;
    color: #0062ff !important;
    }


  .btn-label1:hover{
    font-weight:700;
    color: white !important;
  }

  .bx--btn--tertiary1:hover{
   background-color: #0062ff !important;
    border-width: 1px;
    border-style: solid;
    border-color: #0062ff !important;
    font-weight:700;
    color: white !important;
    }

    .bx--modal-header__heading {
    font-size: 1.75rem;
    font-weight: 300;
    color: white;
  }

.section {
    padding-left: 88px;
}
.mobile-timeline{
    display:none;
}

.mobile320-timeline{
  display:none;
}
 

@media only screen and (max-width: 1100px) and (min-width: 701px) {
  .oval {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    display: flex;
  }

  .mobile-timeline {
    display:block;
  }

  .desktop-timeline{
    display:none;
  }

  .mobile320-timeline {
    display:none;
  }

  .month-timeline {
    width: 80%;
    font-size: 18px;
  }

  .date-timeline {
    font-size:25px !important;
  }

  .path {
    margin-left: 5em !important;
    box-sizing: border-box;
    width: 1px;
    border: 2px solid #979797;
    height: 80%;
   }

  }

 
@media only screen and (min-width: 320px) and (max-width: 700px) {
  body {
    background: #fff;
  }
  .mobile-timeline {
    display: none;
  }
 .mobile320-timeline {
    display:block;
    padding: 0 10px 0 10px;
  }
  .desktop-timeline {
    display: none;
  }
  .oval {
    height: 40px;
    width: 100%;
    border-radius: 0;
    display: flex;
  }
  .date320-timeline {
    font-family: "IBM Plex Mono", "Menlo", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", Courier, monospace;
  }
  .month-timeline {
    font-weight: inherit;
  }
  .cfc320-section p {
    line-height: 1.5;
  }
  .section-header {
    padding-top: 1em;
  }
  .mobile-underline {
    border-bottom: none;
    font-size: 30px;
  }

  .play-icon1 {
     width: 60px;
    height: 60px;
    position: absolute;
    top: 22px;
    right:22px;

    }
 
    .JanOct-2018{
      color:black;
      background-color:#EDF4FF !important;
      margin-bottom:0.5em;
      margin-top:0em;
      padding-left:15px;
    }

    .cta-title-end{
      font-size:5vw;
    }

  }


 </style>


      <section class="cfc-section video-header desktop-timeline">
        <div class="overlay"></div>
        <video id="banner-video" autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop">
          <source src="../../img/prometeo-leadspace-video.mp4" type="video/mp4">
        </video>
        <div class="container" style="padding: 0 135px 10px;!important">
            <div class="bx--grid">
                <div class="bx--row">
              <!--      <div class="bx--col-sm-8 bx--col-lg-8">  -->
                    <div class="bx--offset-lg-1 bx--col-lg-6 bx--offset-md-1 bx--col-md-7">
                       <span class="prometeo-title" >Prometeo monitors firefighter health with IoT platform</span>
                        <p style="max-width:30rem;margin-top:2em;margin-bottom:1em;" class="sub-title">As firefighters risk their lives to help us during times of crisis, they're not only at risk of severe burns, but immediate and long-term health impacts from the smoke and toxins they inhale. The Prometeo team, featuring a nurse, an ex-firefighter, and developers, won the 2019 Call for Code Global Challenge with their IoT solution to monitor the toxins firefighters are exposed to.</p>
                        <a href="https://developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-right:1vw; margin-bottom:2vw;height: 48px !important;  background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer the Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application" rel="noopener noreferrer">
                          <button class="bx--btn	bx--btn--tertiary background " type="button" style="margin-right: 1vw; margin-bottom:2vw; height:48px !important;text-align:center !important;">
                            <span class="btn-label">Set up your own IoT platform </span>
                          </button>
                        </a>
                    </div>
                    <div class="bx--col-sm-12  bx--col-lg-4" style="padding-left:3em;">
                      <div class="play-button" onclick="openModal('modal-prometeo-hero-video');">
                        <img alt="Watch full video" data-modal-target="#modal-prometeo-hero-video" title="Watch full video" id="banner-play-button" src="../../img/play-button.png">
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


      <!-- Full Banner video modal -->
      <div data-modal id="modal-prometeo-hero-video" class="bx--modal" role="dialog" id="modal-prometeo-hero-video"
           aria-modal="true" aria-labelledby="modal-prometeo-hero-video-label" aria-describedby="modal-prometeo-hero-video-heading" tabindex="-1" style="z-index:100000">

        <div class="bx--modal-container">
          <div class="bx--modal-header">
            <p class="bx--modal-header__heading bx--type-beta" id="modal-prometeo-hero-video-heading">Call for Code 2020</p>
            <button class="bx--modal-close" type="button" data-modal-close aria-label="close modal"  onclick="closeModal('modal-prometeo-hero-video')">
                <svg class="bx--modal-close__icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                  <title>Close Modal</title>
                  <path d="M6.32 5L10 8.68 8.68 10 5 6.32 1.32 10 0 8.68 3.68 5 0 1.32 1.32 0 5 3.68 8.68 0 10 1.32 6.32 5z" fill-rule="nonzero"
                  />
                </svg>
            </button>
          </div>
          <div class="bx--modal-content video-responsive">
            <iframe id="prometeo-hero-video-iframe" width="560" height="349" src="https://www.youtube.com/embed/apX3kXqUCew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      

      <!-- PAGE SECTION - Intro -->
      <div class="desktop-timeline">
        <div class="bx--grid">
        <div id="intro-sect" class="bx--row">
        <div class="bx--offset-lg-2 bx--col-lg-1 bx--offset-md-1 bx--col-md-7" style="padding-left:2em;">
        </div>

        <div class="bx--col-lg-3 bx--col-md-4 bx--col-xs-4">
            <span class="ideation">
                From ideation to field deployment
            </span>
          </div>

          <div class="bx--col-lg-7  bx--col-md-8  bx--col-xs-8" style="margin-left:3em;" >
              <div class="milestone-txt" style="padding-left=3em;">
              <p>
              The original three team members met through work and expanded to include a firefighter and nurse they met on their first independent field test. They took their project through various iterations before finally winning Call for Code in 2019 and are now field testing the solution in their native Spain.
            <p>
              See the milestones that have defined Team Prometeo's journey: <a href="#pre2018" class="link-color">Ideation</a>, <a href="#win" class="link-color">winning the 2019 Call for Code Global Challenge </a>, and <a href="#deploy" class="link-color">deploying with Code and Response. </a>
           </p>
            </p>
            </div>
          </div>

      </div>
      </div>
      </div>

       <!-- PAGE SECTION  Pre to May-2018 -->
      <div style="padding-bottom:0;" class="desktop-timeline">
      <div class="bx--grid">
        <div class="bx--row">
          <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">

          </div>
          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;margin-top:5em; ">
                <p class="section-header"> Before they became Prometeo</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    IBM and David Clark Cause launch Call for Code, a new five-year program designed to inspire developers  to solve pressing global problems with sustainable software solutions.

                  <p>Developers Salomé Valero, Marco Emilio Rodriguez Serrano, and Josep Rafols are working together at the same IT company and have no idea how much their lives will change. <br />
                    </p>
                  </span>
                </div>
                <img src="../../img/Pre2018.png"  style="width:100%;height:auto;" />
              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-2 bx--offset-md-0 bx--col-md-2" style="padding-top:3em; padding-bottom:0em;" id="pre2018">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;" >

               <div  class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#EDF4FF;">
               <span class="month-timeline"> Jan </br>
               <span class="date-timeline " style="margin-top:0.5em;">2018  </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:280px;"></div>

               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#C9DEFF;">
               <span class="month-timeline"> May </br>
               <span class="date-timeline" style="margin-top:22em;">2018 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-top:1em;height:20em;"></div>
              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4" style=" padding-bottom:0em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;padding-top:30em;">
                <p class="section-header"> A chance encounter</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    Valero, Serrano, and Padró hear about Call for Code at an IBM Cloud event in Madrid and decide to immediately answer the call. Their idea is to help the firefighters who are working to put out ongoing wildfires in the high-risk area of Catalonia. Within a few weeks, they are ready to test their prototype at their local fire station. They meet Joan Herrera, one of the firefighters at the station, who helps test the prototype and educates the team on wildfires. <br />
                    </p>
                     </br>
                    <span class="blue_quote" >&#8220;   </span>
                    <span class="quote_txt" >Herrera made us understood that we knew about technology but nothing about wildfires.
                     </span>
                  </span>
                  </br></br>
                  <span style="margin-left:2em;">- Valero </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- PAGE SECTION  Aug to Oct-2018 -->
     <div style="padding-bottom:0;" class="desktop-timeline">
      <div class="bx--grid">
        <div class="bx--row">
          <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">

          </div>
          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;margin-top:-1  em;">
                <p class="section-header"> The first solution for the 2018 Call for Code Global Challenge</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    With some updates after their field test, Valero, Serrano, and Padró submit their solution to the 2018 Call for Code Global Challenge. Their initial solution is two-fold: measuring the fire load of homes and providing recommendations to improve and reduce risk; and in case of wildfire emergencies, helping residents make an informed decision on whether to stay confined indoors or to evacuate the city.<br />
                    </p>
                  </span>
                </div>

              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-2 bx--offset-md-0 bx--col-md-2" style="padding-top:0em; margin-top:-2em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:0.5rem;" >

              <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#C9DEFF;">
               <span class="month-timeline"> Aug </br>
               <span class="date-timeline" style="margin-top:0.5em;">2018 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:10em;"></div>

               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#C9DEFF;">
               <span class="month-timeline"> Oct </br>
               <span class="date-timeline" style="margin-top:0.5em;">2018 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;height:200px !important;"></div>
              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4" style="padding-top:18em; padding-bottom:0em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:0rem;">
                <p class="section-header"> Disappointed but not defeated</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    Though Prometeo does not win in 2018, there are many key takeaways from the experience: using open source technology and IBM services to develop their code, testing their prototype, and most importantly knowing that their code can contribute to solving a global issue.
                    <br />
                    </p>
                  </span>
                </div>
                <span id="win">
                  <img src="../../img/Oct2018.png" />
               </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--Early 2019 section -->
  <div class="desktop-timeline">
      <div class="bx--grid">
        <div class="bx--row">
          <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">
          </div>
          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4" style="padding-top:0em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;">
                <p class="section-header" > New year, new focus</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px;">
                    <p>
                    With the experience of creating and submitting a solution in 2018, the team rethinks their strategy.  Looking ahead to the 2019 Call for Code Global Challenge, they take Herrera's advice to understand the problem, not just the technology and invite him to join Team Prometeo. The team also invites Vicenç Ferrés Padró, a nurse who Herrera had been working with closely for many years to address firefighters' health. <br />
                    </p>
                  </br>
                    <span class="blue_quote" >&#8220;</span>
                        <span class="quote_txt">  We wanted to help firefighters and resolve a real problem they have: the cumulative effect of smoke and toxic substances they breathe.
                                      The main point here was the multidisciplinary and the skills in different areas: emergencies, health and technology.
                        </span>
                    </p> </br></br>
                  <span style="margin-left:2em;">- Valero </span>
                  </span>
                </div>

                <p class="section-header" style="margin-top:22em;">Awaiting the judging results</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; margin-top:30em;" >
                    <p>
                    After submitting and awaiting the winner announcement for Call for Code, Prometeo are not idle. The team work on their solution during the Spanish summer, a high-risk period for forest wildfires.
                    They continue working with firefighters in the area and developing the sensors, adding an additional carbon monoxide detector.
                    </p>
                  </span>
                  <span>
                   <img src="../../img/Aug-Oct2019.png" />
                  </span>
                </div>
            </div>
          </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-2 bx--offset-md-0 bx--col-md-2" style="padding-top:0em; padding-bottom:0em;" >
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:0rem;" >

                <!--Early 2019-->
               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#0062FF;color:white;" >
               <span class="month-timeline"> Early </br>
               <span class="date-timeline" style="margin-top:0.5em;">2019 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:18em;"></div>

               <!--Jul 2019-->
               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#0062FF;color:white">
               <span class="month-timeline"> Jul </br>
               <span class="date-timeline" style="margin-top:0.5em;">2019 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-top:0em;height:15em;"></div>

                <!--Aug-Oct 2019-->
                <div class="oval center"  style="margin-left:2em;margin-top:0.5em;text-align:center;margin-bottom:0.5em;background-color:#0062FF;color:white;" >
               <span class="month-timeline"> Aug-Oct </br>
               <span class="date-timeline" style="margin-top:0.5em;">2019 </span> </span>
               </div>
               <div class="path" style="margin-left:6em;margin-top:1em;height:15em;" ></div>

              <!--Oct 2019-->
               <div class="oval center"  style="margin-left:2em;margin-top:0.5em;text-align:center;margin-bottom:0.5em;background-color:#0062FF;color:white !important;">
               <span class="month-timeline"> Oct </br>
               <span class="date-timeline" style="margin-top:0.5em;">2019 </span> </span>
               </div>

              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4" style="padding-top:15em; padding-bottom:0em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;margin-top:12em;">
                <p class="section-header"> Resubmitting with a streamlined approach</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; margin-bottom:3em;">
                    <p>
                    With two new team members and a renewed focus on firefighters, Prometeo iterates and improves on the solution, with an added benefit of working with end users and
                    a health expert. The team takes advantage of their previous experience using IBM Cloud services and add new open source technologies and IBM services to their 2019 solution,
                    most notably the <a href="https://cloud.ibm.com/catalog/services/internet-of-things-platform" style="color:#0F62FE;">IoT Platform</a>, Node-RED, and Kubernetes.  <br />
                    </p>
                  </span>
                  <img src="../../img/July2019.png"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- 2019 Global challenge -->

<div class="desktop-timeline">
  <div class="bx--grid">
    <div class="bx--row" style=" margin-top:3em; margin-bottom:3em;">
    <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">
        </div>
    <div class="bx--col-lg-10 bx--col-md-10 bx--col-xs-10">
            <p class="underlined-header" style="line-height:1.5em !important;text-align:center;"> <span>Prometeo wins Call for Code 2019 Global Challenge</span></p>
      </div>
      </div>
    </div>
  </div>



    <div class="desktop-timeline" >
        <div class="bx--grid">
        <div id="finals" class="bx--row">
        <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1 column-gap" style="padding-left:2em;">
        </div>

        <div class="bx--col-lg-5 bx--col-md-10" style="margin-right:40px;padding-right:40px;">
              <p>
              <a href="https://developer.ibm.com/callforcode/blogs/call-for-code-2019-finalist-prometeo" style="color:#0F62FE;">The Prometeo team are announced as grand prize winners </a> of the 2019 Call for Code Global Challenge.
                    The team receives a $200,000 cash prize, open source project support from The Linux Foundation, meetings with investors and mentors, and solution implementation support through the
                    IBM Code and Response initiative.  The team also wins the People's Choice award, where thousands of voters choose Prometeo as their favorite solution.
              </p>
        </div>


           <div class=" bx--offset-lg-0 bx--col-lg-5 bx--offset-md-2  bx--col-md-9" >
            <video autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop" width="95%">
                 <source src="../../img/prometeo-boomerang.mp4" type="video/mp4" >
            </video>

            </div>
      </div>
      </div>
      </div>



    <div>
      <div class="bx--grid desktop-timeline">
        <div class="bx--row">
          <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">

          </div>
          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4" style="padding-top:5em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:0rem;margin-top:1em;">
                <p class="section-header"> First deployment with Code and Response</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    After winning in October 2019, Prometeo works closely with an ecosystem of technical and subject matter experts as part of the IBM Code and Response initiative, which helps deploys top Call for Code solutions.
                    The first field test is conducted at the Barcelona GRAF Department.  <br />
                    </p>
                  </span>


<!-- deploy modal video -->
       <section class="desktop-timeline">
         <div class="img-overlay" onclick="openModal('modal-prometeo-deploy-video')">
            <img   style="width:100% !important;min-height:270px;" src="../../img/deploy.png" />
            <img alt="Watch full video" data-modal-target="#modal-prometeo-deploy-video" title="Watch full video" class="play-icon1" id="inline-play-button" src="../../img/play-button.png">
        </div>
      </section>



       <!--  video modal -->


       <div data-modal id="modal-prometeo-deploy-video" class="bx--modal" role="dialog" id="modal-prometeo-deploy-video"
           aria-modal="true" aria-labelledby="modal-prometeo-deploy-video-label" aria-describedby="modal-prometeo-deploy-video-heading" tabindex="-1" style="z-index:100000">

        <div class="bx--modal-container">
          <div class="bx--modal-header">
            <p class="bx--modal-header__heading bx--type-beta" id="modal-prometeo-deploy-video-heading">Call for Code 2020</p>
            <button class="bx--modal-close" type="button" data-modal-close aria-label="close modal" onclick="closeModal('modal-prometeo-deploy-video')" >
                <svg class="bx--modal-close__icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                  <title>Close Modal</title>
                  <path d="M6.32 5L10 8.68 8.68 10 5 6.32 1.32 10 0 8.68 3.68 5 0 1.32 1.32 0 5 3.68 8.68 0 10 1.32 6.32 5z" fill-rule="nonzero"
                  />
                </svg>
            </button>
          </div>
          <div class="bx--modal-content video-responsive">
            <iframe id="prometeo-deploy-video-iframe1" width="560" height="349" src="https://www.youtube.com/embed/u-kq18qV3AE" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>


       </div> <!-- end of box-->



                <p class="section-header" style="margin-top:20em;">A temporary setback but continued progress on the horizon</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; margin-top:30em;">
                    <p>
                    After the first successful test in Barcelona, the team plans on two additional deployments for 2020. However, due to the global COVID-19 pandemic, these deployments are on hold.
                    In the meantime, Prometeo are still working to expand on their solution with an improved IoT sensor device and software platform.
                    The team are setting their sights on Australia and California, both wildfire hotspots.
                    </p>

                  </span>
                </div>

              </div>
            </div>
          </div>


          <div class="bx--offset-lg-0 bx--col-lg-2 bx--offset-md-0 bx--col-md-2" style="padding-top:0em; padding-bottom:2em;" id="deploy">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:0rem;" >


              <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:3em;margin-top:2em;"></div>

                <!-- Feb 2020-->
               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#0530AD;color:white !important;">
               <span class="month-timeline"> Feb </br>
               <span class="date-timeline" style="margin-top:0.5em;">2020 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:20em;"></div>

                <!-- Mar 2020-->
               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#0530AD;color:white !important;">
               <span class="month-timeline"> March </br>
               <span class="date-timeline" style="margin-top:0.5em;">2020 </span> </span>
               </div>

               <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:12em;"></div>

               <!--Apr 2020 -->
               <div class="oval center"  style="margin-left:2em;margin-bottom:1em;text-align:center;background-color:#0530AD;color:white !important;">
               <span class="month-timeline"> April </br>
               <span class="date-timeline" style="margin-top:0.5em;">2020 </span> </span>
               </div>

               <div class="dotted-path" style="margin-left:6em;margin-bottom:0.5em;height:13em;"></div>

              </div>
            </div>
          </div>

          <div class="bx--offset-lg-0 bx--col-lg-4 bx--offset-md-0 bx--col-md-4 desktop-timeline" style="padding-top:0em; padding-bottom:0em;">
            <div class="bx--row">
              <div class="bx--col-lg-12" style="margin-bottom:3rem;margin-top:35em;">
              <p class="section-header"> Turning their cash prize into something good</p>
                <div>
                  <span class="sub-txt" style="margin-left:2px; ">
                    <p>
                    As the global prize winners of Call for Code, Prometeo takes their $200,000 cash prize to launch their own startup called
                    <a href="https://www.prometeoplatform.com" style="color:#0F62FE;">Prometeo Platform SL </a> with the hopes of expanding on their mission: helping firefighters preserve their health while in the line of duty.</p>
                  </span>
              </div>
              <img src="../../img/March2020.png"  style="width:100%;height:auto;"/>
            </div>
          </div>
        </div>
      </div>
    </div>


 <!-- CTA's again -->
<div class="desktop-timeline">
  <div class="bx--grid">
    <div class="bx--row" style="margin-bottom:2em;">
    <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">
        </div>
    <div class="bx--col-lg-10 bx--col-md-10 bx--col-xs-10" style="text-align:center;">
            <p class="underlined-header" style="line-height:1.5em !important;text-align:center;"> <span>How you can get involved</span></p>
            <p style="line-height:1.5em !important;text-align:center;margin-bottom:2em;margin-top:2em;">  You could be the next Prometeo. Answer the call and submit your ideas to address COVID-19 or climate change by July 31, 2020. </p>
             <div style="text-align:center;">
                      <a href="https://developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-right:1vw; margin-bottom:2vw;height: 48px !important;  background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer the Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application"  >
                          <button class="bx--btn	bx--btn--tertiary1" type="button" style="margin-right: 1vw; margin-bottom:2vw; height:48px !important;text-align:center !important;color:#0062ff">
                            <span >Set up your own IoT platform </span>
                          </button>
                        </a>
             </div>
      </div>
      </div>
    </div>
  </div>


<!------------------------------ -------------- -------------- -------------- -------------- -------------- --------------
                                               TABLET VERSION

-------------- -------------- -------------- -------------- -------------- ------------------------------------------------->

<!-- HERO HEADER -->
<section class="cfc-section video-header mobile-timeline">
        <div class="overlay"></div>
        <video id="banner-video" autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop">
            <source src="../../img/prometeo-leadspace-video.mp4" type="video/mp4">
        </video>
        <div class="car container" style="">
            <div class="bx--grid">
                <div class="bx--row">
              <!--      <div class="bx--col-sm-8 bx--col-lg-8">  -->
                    <div class="bx--offset-lg-3 bx--col-lg-6 bx--offset-md-1 bx--col-md-8">
                       <span class="prometeo-title" >Prometeo uses IoT to protect firefighter health</span>
                        <p style="margin-top:2em;margin-bottom:1em;" class="sub-title">Firefighters risk their lives to help us during times of crisis, inhaling smoke and toxins during fires that can impact their health.
                        The Prometeo team, featuring a nurse, an ex-firefighter and developers, won the 2019 Call for Code Global Challenge with their IoT solution to monitor the toxins firefighters are exposed to. </p>
                        </div>
                        <div class="bx--offset-lg-1 bx--col-md-12 bx--offset-md-1 bx--col-md-5">
                        <a href="https://developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-right:1vw; margin-bottom:2vw; background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer the Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application" rel="noopener noreferrer">

                          <button class="bx--btn	bx--btn--tertiary background " type="button" style="margin-right: 1vw; margin-bottom:2vw; text-align:center !important;">
                            <span class="btn-label">Set up your own IoT platform </span>
                          </button>
                        </a>

                    </div>
                    <div class="bx--col-sm-12  bx--col-lg-6">
                      <div class="play-button" style="text-">
                        <img alt="Watch full video" data-modal-target="#modal-prometeo-hero-video" title="Watch full video" id="banner-play-button" src="../../img/play-button.png">
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </section>

 <!-- PAGE SECTION - Mobile Intro -->
 <div class="mobile-timeline" style="margin-top:3em;margin-bottom:2em;">
        <div class="bx--grid">
          <div id="tab-intro" class="bx--row">

            <div class="bx--col-lg-4 bx--col-md-4  bx--col-sm-4 bx--no-gutter">
               <div class="ideation ">
                From ideation to field deployment
              </div>
            </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p>
              The original three team members met through work, and expanded to include a firefighter and nurse they met on their first independent field test.
              They took their project through various iterations before finally winning Call for Code in 2019 and are now field testing the solution in their native Spain.

          <p style="margin-top:0.5em;">See the milestones that have defined Team Prometeo's journey: <a href="#tab-pre2018">Ideation</a>, <a href="#tab-win">winning the 2019 Call for Code Global Challenge</a> , and <span id="tab-pre2018"><a href="#tab-deploy">deploying with Code and Response</a>. </span> </p>
              </p>
              </div>
          </div>

          </div>
        </div>
      </div>


      <!-- PAGE SECTION - Pre 2018 Timeline -->
 <div class="mobile-timeline"  >
        <div class="bx--grid">
          <div id="tab-pre" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#EDF4FF;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Jan </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2018  </span>  </span>
                      </div>

                    <div class="path" style="margin-left:6em;height:20em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> Before they became Prometeo</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  IBM and DCC launch Call for Code, a new five-year program designed to inspire developers  to solve pressing global problems with sustainable software solutions.

                <p> Developers Salomé Valero, Marco Emilio Rodriguez Serrano, and Josep Rafols are working together at the same IT company and
                  have no idea how much their lives will change. </p>
                  </p>
               </span>
            </div>
            <img src="../../img/Pre2018.png"/>
              </div>
          </div>

          </div>
        </div>
      </div>


        <!-- PAGE SECTION - May 2018 Timeline -->
 <div class="mobile-timeline" style="">
        <div class="bx--grid">
          <div id="tab-may" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-left:2em;margin-bottom:0.5em;text-align:center;margin-top:0em;">
                          <span class="month-timeline"> May </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2018  </span>   </span>
                      </div>

                    <div class="path" style="margin-left:6em;height:20em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> A chance encounter</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  Valero, Serrano, and Padró hear about Call for Code at an IBM Cloud event in Madrid and decide to immediately answer the call.
                  Their idea is to help the firefighters who are working to put out ongoing fires in the high-risk area of Catalonia. Within a few weeks,
                  they are ready to test their prototype at their local fire station. One of the firefighters, Joan Herrera, helps test the prototype and educates the team on wildfires.
                 <br />
                  </p>
                  </br>
                    <span class="blue_quote" style="margin-bottom:-1em;">&#8220;   </span>
                    <span class="quote_txt">He (Herrera) made us understood that we knew about technology but nothing about wildfires.
                    </span>
                </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


   <!-- PAGE SECTION - Aug 2018 Timeline -->
   <div class="mobile-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="tab-aug" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-left:2em;margin-bottom:0.5em;text-align:center;margin-top:0em;">
                          <span class="month-timeline"> Aug </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2018  </span>   </span>
                      </div>

                    <div class="path" style="margin-left:6em;height:13em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> The first solution for the 2018 Call for Code Global Challenge
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  With some updates after their field test, Valero, Serrano, and Padró submit their solution to the 2018 Call for Code Global Challenge.
                  Their initial solution is two-fold: measuring the fire load of homes and providing recommendations to improve and reduce risk; and in case of wildfire emergencies,
                  helping residents make an informed decision on whether to stay indoors in confinement or to evacuate the city. <br />
                  </p>
               </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


       <!-- PAGE SECTION - Oct 2018 Timeline -->
   <div class="mobile-timeline" style="">
        <div class="bx--grid">
          <div id="tab-oct" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-left:2em;margin-bottom:0.5em;text-align:center;margin-top:0em;">
                          <span class="month-timeline"> Oct </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2018  </span>   </span>
                      </div>

                    <div class="path" style="margin-left:6em;height:13em;">
                   </div>
                </div>
              </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> Disappointed but not defeated
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  Though Prometeo do not win in 2018, there are many key takeaways from the experience: from developing code with open source and IBM services, to testing their prototype,
                  and most importantly knowing that their code can contribute to solving a global problem.  <br />
                  </p>
               </span>
              </div>
              <span id="tab-win">
                  <img src="../../img/Oct2018.png"   />
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Early 2019 Timeline -->
   <div class="mobile-timeline" style="margin-bottom:1em;margin-top:3em;">
        <div class="bx--grid">
          <div id="tab-early19" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-left:2em;margin-bottom:0.5em;text-align:center;margin-top:0em;">
                          <span class="month-timeline"> Early </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2019  </span>   </span>
                      </div>

                    <div class="path" style="margin-left:6em;margin-bottom:0em;height:30em;">
                   </div>
                </div>
              </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em">
              <p class="section-header"> New year, new focus
              </p>
              <div>
                <span class="sub-txt" style="margin-left:4px !important;margin-top:0em;">
                  <p>
                  With the experience of creating and submitting a solution in 2018, the team rethinks their strategy. Heeding Herrera's advice to understand the problem,
                  not just the tech, they invite him to join Team Prometeo with their eyes on the 2019 Call for Code Global Challenge.
                  The team also invites Vicenç Ferrés Padró, a nurse who Herrera had been working with closely for many years to address firefighters' health.
                  <br /> </br>
                  </p>
                  <span class="blue_quote" style="margin-bottom:-1em;" >&#8220;</span>
                        <span class="quote_txt"> We wanted to help firefighters and resolve a real problem they have: the cumulative effect of smoke and toxic substances they breathe.
                        The main point here was the multidisciplinary and the skills in different areas: emergencies, health and technology."
                   </span>

                  </span> </br></br>
                  <span style="margin-left:2em;"> -Valero </span>
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>


       <!-- PAGE SECTION - Jul 2019 Timeline -->
      <div class="mobile-timeline" style="margin-bottom:0em;">
        <div class="bx--grid">
          <div id="tab-jul19" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-left:2em;margin-bottom:0.5em;text-align:center;margin-top:0em;">
                          <span class="month-timeline"> Jul </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2019  </span> </span>
                      </div>

                    <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:12em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> Resubmitting with a streamlined approach
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  With two new team members and a renewed focus on firefighters, Prometeo iterates and improves on the solution, with an added benefit of working with end users and
                  a health expert. The team takes advantage of their previous experience using IBM Cloud services and add new open source technologies and IBM services to their 2019 solution,
                   most notably the <a href="" class="">IoT Platform</a>, Node-RED, and Kubernetes.   <br />
                  </p>
             </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Aug-Oct 2019 Timeline -->
 <div class="mobile-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="tab-aug" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Aug-Oct </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2019  </span>   </span>
                      </div>

                    <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:16em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> Awaiting the judging results</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After submitting and awaiting the winner announcement for Call for Code, Prometeo are not idle.
                  The team work on their solution during the Spanish summer, a high-risk period for forest wildfires.
                  They continue working with firefighters in the area and developing the sensors, adding an additional carbon monoxide detector.
                  </p>
               </span>
               <img src="../../img/Aug-Oct2019.png" style="width:100%;height:auto;"/>
            </div>
              </div>
          </div>
          </div>
        </div>
      </div>


              <!-- PAGE SECTION - Oct 2019 Timeline -->
 <div class="mobile-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="tab=oct19" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Oct </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2019  </span>  </span>
                      </div>

                    <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:28em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="underlined-header" style="line-height:1.5em !important;"> <span>Prometeo wins Call for Code 2019 Global Challenge</span></p>
              <div>

             <video autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop" width="95%">
                 <source src="../../img/prometeo-boomerang.mp4" type="video/mp4" >
            </video>

                <span class="sub-txt" style="margin-left:2px; margin-top:2 vw;">
                <p style="margin-top:1em;"> <a href="" style="color:#0F62FE;">The Prometeo team are announced as grand prize winners </a> of the 2019 Call for Code Global Challenge.
                    The team receive a $200,000 cash prize, open source project support from  the Linux Foundation, meetings with investors and mentors, and solution implementation support through the
                    IBM <a href="" style="color:#0F62FE;">Code and Response initiative</a>.  The team also win the People's Choice award, where thousands of voters choose Prometeo as their favorite solution.</p>
                <path d="M11.95 5.997L7.86 2.092 9.233.639l6.763 6.356-6.763 6.366L7.86 11.91l4.092-3.912H-.003v-2h11.952z" id="tab-deploy"></path>
               </span>
            </div>
           </div>
          </div>

          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Feb 2020 Timeline -->
 <div class="mobile-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="tab-feb20" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Feb </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2020  </span> </span>
                      </div>

                    <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:25em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> First deployment with Code and Response</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After winning in October, Prometeo work closely with an ecosystem of technical and subject matter experts as part of the IBM Code and Response initiative,
                  which helps deploys top Call for Code solutions. The first field test is conducted at the Barcelona GRAF Department.
                  </p>
               </span>
            </div>

            <!-- deploy modal video -->
    <section class="mobile-timeline">
         <div class="img-overlay" onclick="openModal('modal-t-prometeo-deploy-video')">
            <img  style="width:100% !important;min-height:270px;" src="../../img/deploy.png" />
                  <img alt="Watch full video" data-modal-target="#modal-t-prometeo-deploy-video" title="Watch full video" class="play-icon1" id="inline-play-button" src="../../img/play-button.png">
        </div>
      </section>


      <!--  video modal -->
      <div data-modal id="modal-t-prometeo-deploy-video" class="bx--modal" role="dialog" id="modal-t-prometeo-deploy-video"
           aria-modal="true" aria-labelledby="modal-t-prometeo-hero-video-label" aria-describedby="modal-t-prometeo-deploy-video-heading" tabindex="-1" style="z-index:100000">

        <div class="bx--modal-container">
          <div class="bx--modal-header">
            <p class="bx--modal-header__heading bx--type-beta" id="modal-t-prometeo-deploy-video-heading">Call for Code 2020</p>
            <button class="bx--modal-close" type="button" data-modal-close aria-label="close modal"  onclick="closeModal('modal-t-prometeo-deploy-video')">
                <svg class="bx--modal-close__icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                  <title>Close Modal</title>
                  <path d="M6.32 5L10 8.68 8.68 10 5 6.32 1.32 10 0 8.68 3.68 5 0 1.32 1.32 0 5 3.68 8.68 0 10 1.32 6.32 5z" fill-rule="nonzero"
                  />
                </svg>
            </button>
          </div>
          <div class="bx--modal-content video-responsive">
            <iframe id="prometeo-t-deploy-video-iframe" width="560" height="349" src="https://www.youtube.com/embed/u-kq18qV3AE" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div> 
              </div>
          </div>

          </div>
        </div>
      </div>

          <!-- PAGE SECTION - Mar 2020 Timeline -->
 <div class="mobile-timeline" style="margin-bottom:2em;">
        <div class="bx--grid">
          <div id="tab-mar20" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Mar </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2020  </span> </span>
                      </div>

                      <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:18em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> Turning their huge cash prize into something good</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  As the global prize winners of Call for Code, Prometeo earned some serious cash: $200,000 usd in prize money. With their earnings, the team launch their own startup
                  called <a href="" class="">Prometeo Platform SL</a> with the hopes of expanding on their mission: helping firefighters preserve their health while in the line of duty.
                  </p>
               </span>
            </div>
            <img src="../../img/March2020.png" />
              </div>
          </div>
          </div>
        </div>
      </div>

            <!-- PAGE SECTION - Apr 2020 Timeline -->
 <div class="mobile-timeline" style="margin-top:-1em;">
        <div class="bx--grid">
          <div id="tab-apr20" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-left:2em;margin-bottom:0.5em;text-align:center;">
                          <span class="month-timeline"> Apr </br>
                           <span class="date-timeline " style="margin-top:0.5em;">2020  </span> </span>
                      </div>

                    <div class="dotted-path" style="margin-left:5em;margin-bottom:0.5em;height:15em;">
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt" style="padding-left:2em;">
              <p class="section-header"> A temporary setback but continued progress on the horizon</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After the first successful test in Barcelona, the team plans on two additional deployments for 2020. However, due to the global COVID-19 pandemic, these deployments are on hold.
                  In the meantime, Prometeo are still working to expand on their solution with an improved IoT sensor device and software platform.
                  The team have their sights on Australia and California, both wildfire hotspots.  </p>
               </span>
            </div>
              </div>
          </div>
          </div>
        </div>
      </div>



 <!-- CTA's again -->
<div class="mobile-timeline">
  <div class="bx--grid">
    <div class="bx--row" style="margin-bottom:2em;">
    <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;" >
        </div>
    <div class="bx--col-lg-10 bx--col-md-10 bx--col-xs-10" style="text-align:center;">
            <p class="underlined-header" style="line-height:1.5em !important;text-align:center;"> <span>How you can get involved</span></p>
            <p style="line-height:1.5em !important;text-align:center;">  You could be the next Prometeo. Answer the call and submit your ideas to address COVID-19 or climate change by July 31, 2020. </p>
            <div style="text-align:center;margin-top:1em;">
                      <a href="https://developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-right:1vw; margin-bottom:2vw;height: 48px !important;  background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer the Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application"  >
                          <button class="bx--btn	bx--btn--tertiary1" type="button" style="margin-right: 1vw; margin-bottom:2vw; height:48px !important;text-align:center !important;color:#0062ff">
                            <span >Set up your own IoT platform </span>
                          </button>
                        </a>
             </div>
      </div>
      </div>
    </div>
  </div>

<!--------------------------------------------------------------------------------------------------------------
                  MOBILE 320
----------------------------------------------------------------------------------------------------------------->


<!-- HERO MOBILE HEADER -->
<section class="cfc-section video-header mobile320-timeline">
        <div class="overlay"></div>
        <video id="banner-video" autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop">
          <source src="../../img/prometeo-leadspace-video.mp4" type="video/mp4">
        </video>
        <div class="car container" style="">
            <div class="bx--grid">
                <div class="bx--row">
              <!--      <div class="bx--col-sm-8 bx--col-lg-8">  -->
                    <div class="bx--offset-lg-3 bx--col-lg-6 bx--offset-md-1 bx--col-md-8">
                       <span class="prometeo-title" >Prometeo uses IoT to protect firefighter health</span>
                        <p style="margin-top:2em;margin-bottom:1em;" class="sub-title"> As firefighters risk their lives to help us during times of crisis, they’re not only at risk of severe burns, but the smoke and toxins they inhale impacts their health.
                        The Prometeo team, featuring a nurse, an ex-firefighter and developers, won the 2019 Call for Code Global Challenge with their IoT solution to monitor the toxins firefighters are exposed to.</p>
                        </div>
                        <div class="bx--offset-lg-1 bx--col-md-12 bx--offset-md-1 bx--col-md-5">
                        <a href="https://www.developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-right:1vw; margin-bottom:5vw; background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application" rel="noopener noreferrer">

                          <button class="bx--btn	bx--btn--tertiary background " type="button" style="margin-right: 1vw; margin-bottom:2vw; text-align:center !important;">
                            <span class="btn-label">Set up your own IoT platform </span>
                          </button>
                        </a>

                    </div>
                    <div class="bx--col-sm-12  bx--col-lg-6">
                      <div class="play-button" style="text-">
                        <img alt="Watch full video" data-modal-target="#modal-prometeo-hero-video" title="Watch full video" id="banner-play-button" src="../../img/play-button.png">
                      </div>
                    </div>
                </div>
            </div>
      </div>
        </div>
      </section>


      <!-- PAGE SECTION - Mobile Intro -->
 <div class="mobile320-timeline" style="padding-top:2em;">
        <div class="bx--grid">
          <div id="mobile-intro" class="bx--row">

            <div class="bx--col-lg-4 bx--col-md-4 bx--col-sm-4" style="padding:0em !important;">
               <div class="ideation ">
                From ideation to field deployment
              </div>
            </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter">
              <div class="milestone-txt">
              <p>
              The original three team members met through work, and expanded to include a firefighter and nurse they met on their first independent field test.
              They took their project through various iterations before finally winning Call for Code in 2019 and are now field testing the solution in their native Spain.

          <p style="margin-top:0.5em;">See the milestones that have defined Team Prometeo's journey: <a href="#mob-pre2018">Ideation</a>, <a href="#mob-win">winning the 2019 Call for Code Global Challenge</a> , and <a href="#mob-deploy">deploying with Code and Response</a>.  </p>
              </p>
              </div>
          </div>

          </div>
        </div>
      </div>



      <!-- PAGE SECTION - Pre 2018 Timeline -->
      <div class="mobile320-timeline" style="margin-bottom:1em;" id="mob-pre2018">
        <div class="bx--grid">
          <div id="mob-pre" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter" id="#pre2018">
               <div class="ideation bx--col-lg-1">
               <div class="oval center"  style="color:black;background-color:#EDF4FF !important;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> Jan
                           <span class="date320-timeline " style="margin-top:0.5em;">2018
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;height:20em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> Before they became Prometeo</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  IBM and DCC launch Call for Code, a new five-year program designed to inspire developers  to solve pressing global problems with sustainable software solutions.

                <p> Developers Salomé Valero, Marco Emilio Rodriguez Serrano, and Vicenç Ferrés Padró are working together at the same IT company and
                  have no idea how much their lives will change. </p>
                  </p>
               </span>
            </div>
            <img src="../../img/Pre2018.png"/>
              </div>
          </div>

          </div>
        </div>
      </div>


        <!-- PAGE SECTION - May 2018 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-may" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> May
                           <span class="date320-timeline " style="margin-top:0.5em;">2018  </span> </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;height:20em;"> -->
                   </div>
                </div>
              </div>



              <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> A chance encounter</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  Valero, Serrano, and Padró hear about Call for Code at an IBM Cloud event in Madrid and decide to immediately answer the call.
                  Their idea is to help the firefighters who are working to put out ongoing fires in the high-risk area of Catalonia. Within a few weeks,
                  they are ready to test their prototype at their local fire station. One of the firefighters, Joan Herrera, helps test the prototype and educates the team on wildfires.
                 <br />
                  </p>
                  </br>
                    <span class="blue_quote" style="margin-bottom:-1em">&#8220;   </span>
                    <span class="quote_txt" >He (Herrera) made us understood that we knew about technology but nothing about wildfires.
                    </span>
                </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


   <!-- PAGE SECTION - Aug 2018 Timeline -->
   <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-aug" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> Aug
                           <span class="date320-timeline " style="margin-top:0.5em;">2018
                           </span>
                           </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;height:13em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> The first solution for the 2018 Call for Code Global Challenge
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  With some updates after their field test, Valero, Serrano, and Padró submit their solution to the 2018 Call for Code Global Challenge.
                  Their initial solution is two-fold: measuring the fire load of homes and providing recommendations to improve and reduce risk; and in case of wildfire emergencies,
                  helping residents make an informed decision on whether to stay indoors in confinement or to evacuate the city. <br />
                  </p>
                </span>

                <span style="margin-left:2em;"> -Valero </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


       <!-- PAGE SECTION - Oct 2018 Timeline -->
   <div class="mobile320-timeline" style="">
        <div class="bx--grid">
          <div id="mob-oct" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:black;background-color:#C9DEFF;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> Oct
                           <span class="date320-timeline " style="margin-top:0.5em;">2018
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;height:13em;"> -->
                   </div>
                </div>
              </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> Disappointed but not defeated
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  Though Prometeo do not win in 2018, there are many key takeaways from the experience: from developing code with open source and IBM services, to testing their prototype,
                  and most importantly knowing that their code can contribute to solving a global problem.  <br />
                  </p>
             </span>
              </div>
              <img src="../../img/Oct2018.png"   />
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Early 2019 Timeline -->
   <div class="mobile320-timeline" style="margin-bottom:1em;margin-top:0em;">
        <div class="bx--grid">
          <div id="mob-early19" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> Early
                           <span class="date320-timeline " style="margin-top:0.5em;">2019
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:23em;"> -->
                   </div>
                </div>
              </div>

            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;" style="padding-left:2em">
              <p class="section-header"> New year, new focus
              </p>
              <div>
                <span class="sub-txt" style="margin-left:4px !important;margin-top:0em;">
                  <p>
                  With the experience of creating and submitting a solution in 2018, the team rethinks their strategy. Heeding Herrera's advice to understand the problem,
                  not just the tech, they invite him to join Team Prometeo with their eyes on the 2019 Call for Code Global Challenge.
                  The team also invites Vicenç Ferrés Padró, a nurse who Herrera had been working with closely for many years to address firefighters' health.
                  <br />
                  </p>
                  <span class="blue_quote" style="margin-bottom:-1em;">&#8220;</span>
                        <span class="quote_txt"> We wanted to help firefighters and resolve a real problem they have: the cumulative effect of smoke and toxic substances they breathe.
                        The main point here was the multidisciplinary and the skills in different areas: emergencies, health and technology.
                        </span>

                  </span>
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>


       <!-- PAGE SECTION - Jul 2019 Timeline -->
      <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-jul" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-bottom:0.5em;margin-top:0em;padding-left:15px;">
                          <span class="month-timeline"> Jul
                           <span class="date320-timeline " style="margin-top:0.5em;">2019
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:13em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> Resubmitting with a streamlined approach
              </p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  With two new team members and a renewed focus on firefighters, Prometeo iterates and improves on the solution, with an added benefit of working with end users and
                  a health expert. The team takes advantage of their previous experience using IBM Cloud services and add new open source technologies and IBM services to their 2019 solution,
                   most notably the <a href="https://cloud.ibm.com/catalog/services/internet-of-things-platform" class="">IoT Platform</a>, Node-RED, and Kubernetes.   <br />
                  </p>
            </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Aug-Oct 2019 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-aug" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-bottom:0.5em;padding-left:15px;">
                          <span class="month-timeline"> Aug-Oct
                           <span class="date320-timeline " style="margin-top:0.5em;">2019
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:15em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> Awaiting the judging results</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After submitting and awaiting the winner announcement for Call for Code, Prometeo are not idle.
                  The team work on their solution during the Spanish summer, a high-risk period for forest wildfires.
                  They continue working with firefighters in the area and developing the sensors, adding an additional carbon monoxide detector.
                  </p>
               </span>
               <img src="../../img/Aug-Oct2019.png"/>
            </div>
              </div>
          </div>
          </div>
        </div>
      </div>


              <!-- PAGE SECTION - Oct 2019 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-oct" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0062FF;margin-bottom:0.5em;padding-left:15px;">
                          <span class="month-timeline"> Oct
                           <span class="date320-timeline " style="margin-top:0.5em;">2019
                           </span>
                           </span>
                      </div>

                    <!-- <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:40em;"> -->
                   </div>
                </div>
              </div>



              <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="mobile-underline" style="line-height:1.5em !important;"> <span>Prometeo wins Call for Code 2019 Global Challenge</span></p>
              <div>

              <!-- <img style="display:block; margin-right: auto;padding-left:0em;" src="../../img/Prometeo-team.png"> -->
              <video autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop" width="95%">
                 <source src="../../img/prometeo-boomerang.mp4" type="video/mp4" >
            </video>

                <span class="sub-txt" style="margin-left:2px; ">
                <p style="margin-top:0em;"> <a href="" style="color:#0F62FE;">The Prometeo team are announced as grand prize winners </a> of the 2019 Call for Code Global Challenge.
                    The team receive a $200,000 cash prize, open source project support from  the Linux Foundation, meetings with investors and mentors, and solution implementation support through the
                    IBM <a href="https://developer.ibm.com/callforcode/blogs/call-for-code-2019-finalist-prometeo" style="color:#0F62FE;">Code and Response initiative</a>.  The team also win the People's Choice award, where thousands of voters choose Prometeo as their favorite solution.</p>
                <path d="M11.95 5.997L7.86 2.092 9.233.639l6.763 6.356-6.763 6.366L7.86 11.91l4.092-3.912H-.003v-2h11.952z" id="mob-deploy"></path>
               </span>
            </div>
           </div>
          </div>

          </div>
        </div>
      </div>


          <!-- PAGE SECTION - Feb 2020 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-feb" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-bottom:0.5em;padding-left:15px;">
                          <span class="month-timeline"> Feb
                           <span class="date320-timeline " style="margin-top:0.5em;">2020
                           </span>
                          </span>
                      </div>

                    <!-- <div class="path" style="margin-left:5em;margin-bottom:0.5em;height:18em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> First deployment with Code and Response</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After winning in October, Prometeo work closely with an ecosystem of technical and subject matter experts as part of the IBM Code and Response initiative,
                  which helps deploys top Call for Code solutions. The first field test is conducted at the Barcelona GRAF Department.
                  </p>
               </span>
            </div>

            <!-- deploy modal video -->
       <section class="mobile320-timeline" onclick="openModal('modal-m-prometeo-deploy-video')">
         <div class="img-overlay">
            <img style="width:100% !important;min-height:160px;margin-left:-0.5em;" src="../../img/deploy.png" />
             <img alt="Watch full video" data-modal-target="#modal-m-prometeo-deploy-video" title="Watch full video" class="play-icon1" id="inline-play-button" src="../../img/play-button.png">
        </div>
      </section>


      <!--  video modal -->
      <div data-modal id="modal-m-prometeo-deploy-video" class="bx--modal" role="dialog" id="modal-m-prometeo-deploy-video"
           aria-modal="true" aria-labelledby="modal-m-prometeo-hero-video-label" aria-describedby="modal-m-prometeo-deploy-video-heading" tabindex="-1" style="z-index:100000">

        <div class="bx--modal-container">
          <div class="bx--modal-header">
            <p class="bx--modal-header__heading bx--type-beta" id="modal-m-prometeo-deploy-video-heading">Call for Code 2020</p>
            <button class="bx--modal-close" type="button" data-modal-close aria-label="close modal"  onclick="closeModal('modal-m-prometeo-deploy-video')">
                <svg class="bx--modal-close__icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                  <title>Close Modal</title>
                  <path d="M6.32 5L10 8.68 8.68 10 5 6.32 1.32 10 0 8.68 3.68 5 0 1.32 1.32 0 5 3.68 8.68 0 10 1.32 6.32 5z" fill-rule="nonzero"
                  />
                </svg>
            </button>
          </div>
          <div class="bx--modal-content video-responsive">
            <iframe id="prometeo-m-deploy-video-iframe" width="560" height="349" src="https://www.youtube.com/embed/u-kq18qV3AE" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!--
      <script>
        var videoIframe4 = document.getElementById('prometeo-m-deploy-video-iframe');
        var videoUrl4 = videoIframe4.src;
        document.addEventListener('modal-shown', function(evt) {
          videoIframe4.src = videoUrl4 + '?autoplay=1';
        });
        document.addEventListener('modal-hidden', function(evt) {
          videoIframe4.src = videoUrl4;
        });
      </script>
      -->
              </div>
          </div>

          </div>
        </div>
      </div>

          <!-- PAGE SECTION - Mar 2020 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-mar20" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-bottom:0.5em;padding-left:15px;">
                          <span class="month-timeline"> Mar
                           <span class="date320-timeline " style="margin-top:0.5em;">2020
                           </span>
                          </span>
                      </div>

                      <!-- <div class="path" style="margin-left:6em;margin-bottom:0.5em;height:18em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px solid #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> Turning their huge cash prize into something good</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  As the global prize winners of Call for Code, Prometeo earned some serious cash: $200,000 usd in prize money. With their earnings, the team launch their own startup
                  called <a href="https://developer.ibm.com/callforcode/blogs/call-for-code-2019-finalist-prometeo" style="color:#0F62FE;">Prometeo Platform SL</a> with the hopes of expanding on their mission: helping firefighters preserve their health while in the line of duty.
                  </p>
               </span>
            </div>
            <img src="../../img/March2020.png" />
              </div>
          </div>
          </div>
        </div>
      </div>

            <!-- PAGE SECTION - Apr 2020 Timeline -->
 <div class="mobile320-timeline" style="margin-bottom:1em;">
        <div class="bx--grid">
          <div id="mob-apr20" class="bx--row">

            <div class="bx--col-lg-1 bx--col-md-4 bx--no-gutter">
               <div class="ideation bx--col-lg-1">
                    <div class="oval center"  style="color:white;background-color:#0530AD;margin-bottom:0.5em;padding-left:15px;">
                          <span class="month-timeline"> Apr
                           <span class="date320-timeline " style="margin-top:0.5em;">2020
                           </span>
                          </span>
                      </div>

                    <!-- <divclass="dotted-path" style="margin-left:6em;margin-bottom:0.5em;height:22em;"> -->
                   </div>
                </div>
              </div>


            <div class="bx--col-lg-1 bx--col-md-7 bx--no-gutter" style="border-left: 2px dotted #979797;">
              <div class="milestone-txt" style="padding-left: 20px;">
              <p class="section-header"> A temporary setback but continued progress on the horizon</p>
              <div>
                <span class="sub-txt" style="margin-left:2px; ">
                  <p>
                  After the first successful test in Barcelona, the team plans on two additional deployments for 2020. However, due to the global COVID-19 pandemic, these deployments are on hold.
                  In the meantime, Prometeo are still working to expand on their solution with an improved IoT sensor device and software platform.
                  The team are setting their sights on Australia and California, both wildfire hotspots.  </p>
               </span>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>



 <!-- CTA's again -->
<div class="mobile320-timeline" style="text-align:center !important;">
  <div class="bx--grid">
    <div class="bx--row" style="margin-bottom:2em;">
    <div class="bx--offset-lg-1 bx--col-lg-1 bx--offset-md-1 bx--col-md-1" style="padding-left:2em;">
        </div>
    <div class="bx--col-lg-10 bx--col-md-10 bx--col-xs-10" style="text-align:center;">
            <p class="underlined-header" style="line-height:3em !important;">  <span class="cta-title-end"> How you can get involved </span> </p>
            <p style="line-height:1.5em !important;text-align:center;margin-bottom:1em;margin-top:1em;">  You could be the next Prometeo. Answer the call and submit your ideas to address COVID-19 or climate change by July 31, 2020. </p>
             <div style="text-align:center;">
                      <a href="https://developer.ibm.com/callforcode" rel="noopener noreferrer">
                            <button class="bx--btn bx--btn--primary" type="button" style="margin-bottom:1em !important;margin-right:1vw; margin-bottom:2vw;height: 48px !important;  background-color: #0F62FE !important;text-align:center !important;">
                             <span> Answer the Call for Code</span>
                          </button>
                        </a>
                        <a href="https://developer.ibm.com/technologies/iot/tutorials/how-to-create-an-internet-of-things-platform-starter-application"  >
                          <button class="bx--btn	bx--btn--tertiary1" type="button" style="margin-right: 1vw; margin-bottom:2vw; height:48px !important;text-align:center !important;color:#0062ff">
                            <span >Set up your own IoT platform </span>
                          </button>
                        </a>
             </div>
      </div>
      </div>
    </div>
  </div>


    <?php include_once('../../partials/footer.php');?>



<!-- Back to top button --->
    <button class="myBtn" type="button" aria-label="Back to Top" style="float:right;" onclick="topFunction()" id="myBtn">
    <svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="4 0 32 32" aria-hidden="true" style="will-change: transform;">
    <path d="M16 14L6 24 7.4 25.4 16 16.8 24.6 25.4 26 24zM4 8H28V10H4z"></path></svg></button>



    <!-- ContentWrapper_END -->
    </div>
  </div>
</body>
</html>