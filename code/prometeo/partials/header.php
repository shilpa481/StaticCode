<?php

$urlParts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

// We are on a subpage.
if (count($urlParts) > 1) {
  $page = $urlParts[1];
}
// Else we are on the homepage.
else {
  $page = 'home';
}

?>

<!-- MASTHEAD_BEGIN -->
<div id="ibm-masthead" aria-label="IBM" data-mhtype="minimal" class="simple  ibm-mhtype-minimal">
  <div id="ibm-mast-options">
    <ul role="toolbar" aria-labelledby="ibm-masthead">
      <li id="ibm-geo" role="presentation">
        <a href="//www.ibm.com/planetwide/select/selector.html">United States</a>
      </li>
    </ul>
  </div>

  <div id="ibm-universal-nav">
    <nav role="navigation" aria-label="IBM">
      <div id="ibm-home"><a href="https://www.ibm.com/us/en">IBM®</a></div>
        <ul id="ibm-menu-links" role="toolbar" aria-label="Site map">
          <li><a href="https://www.ibm.com/sitemap/us/en">Site map</a></li>
        </ul>
    </nav>

    <div id="ibm-search-module" role="search" aria-labelledby="ibm-masthead">
      <form id="ibm-search-form" action="https://www.ibm.com/Search/" method="get">
        <p>
          <label for="q">IBM</label>
          <input type="text" maxlength="100" value="" placeholder="Search" name="q" id="q" aria-label="Search" />
          <input type="hidden" value="18" name="v" />
          <input type="hidden" value="utf" name="en" />
          <input type="hidden" value="en" name="lang" />
          <input type="hidden" value="us" name="cc" />
          <input type="submit" id="ibm-search" class="ibm-btn-search" value="Submit" />
        </p>
      </form>
    </div>
  </div>
</div>
<!-- MASTHEAD_END -->

<header role="banner" aria-label="Navigation banner">
  <nav role="navigation" aria-label="Site Navigation" id="block-subnavigation" class="ibm-sitenav-menu-container">
    <div class="ibm-sitenav-menu-name">
      <a href="/code-and-response" hreflang="en-us">Code and Response<sup>&trade;</sup></a>
    </div>

    <div class="ibm-sitenav-menu-list">
      <ul role="menubar">
        <!--jina removed <li role="presentation" class="<?php echo ($page === 'resources' ? 'ibm-highlight' : ''); ?>">
          <a role="menuitem" href="/callforcode/resources" data-altlabel="Resources">Resources</a>
        </li>-->
        <li role="presentation" class="<?php echo ($page === 'about' ? 'ibm-highlight' : ''); ?>">
          <a role="menuitem" href="/code-and-response/about/" data-altlabel="About">About</a>
        </li>
        <!-- jina removed, to be added in later <li role="presentation" class="<?php echo ($page === 'events' ? 'ibm-highlight' : ''); ?>">
          <a role="menuitem" href="/code-and-response/events/" data-altlabel="Events">Events</a>
        </li>-->
        <li role="presentation" class="<?php echo ($page === 'blogs' ? 'ibm-highlight' : ''); ?>">
          <a role="menuitem" href="/code-and-response/blogs/" data-altlabel="Events">Blog</a>
        </li>
        <li role="presentation" class="<?php echo ($page === 'subscribe' ? 'ibm-highlight' : ''); ?>">
          <a role="menuitem" href="https://ibmdeveloper.pages03.net/Code-and-Response/"  data-altlabel="Subscribe">Subscribe</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="ibm-content-wrapper" role="main" aria-label="Main Content">

    

          </div>
        </div>
      </div>
    </div>
</header>
