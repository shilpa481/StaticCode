<?php
if($_SERVER['HTTP_HOST'] == 'nextstage.rtp.raleigh.ibm.com'){
  $rooturl = "/c/code-and-response/";
}else{
  $rooturl = "/code-and-response/";
}
date_default_timezone_set('UTC');