 <header id="header" class="mainHeader" role="banner">
     <div class="mainInner">
         <a href="index.php#" class="burgerMenu mobileOnly navButton"><span class="accessible">Menu</span></a>
         <h1 id="logo" class="ir logo home">
             <a href="index.php"><?php echo $name; ?><span style="background-image:url(./logo.png)"></span></a>
         </h1>
         <a href="index.php#" class="login navButton mobileOnly"><span class="accessible">Login</span></a>
         <a href="index.php#" class="search navButton mobileOnly"><span class="accessible">Search</span></a>
         <form id="frm-search" class="frmSearch" name="search" method="post" action="index.php"
             onsubmit="openVA({entry:document.getElementById(&#39;entry&#39;).value, url:&#39;&#39;}); return false;">
             <div class="search-inner">
                 <div class="fieldWrapper">
                     <div class="field">
                         <label for="entry" class="accessible">Search</label>
                         <input name="entry" type="text" id="entry" value="" title="Ask a question"
                             class="placeholder searchField" placeholder="Ask a question">
                     </div>
                 </div>

                 <div class="control fieldWrapper">
                     <input type="image" src="./index_files/Search.png" class="image desktopOnly" alt="Search">
                     <input type="submit" class="basic mobileOnly" value="Find">
                 </div>
             </div>
         </form>
         <div class="online-banking">
             <div class="title">
                 <a href="index.php#" class="JSOb">Log in / Register</a>
             </div>
             <div class="tool-login">
                 <div class="supportToolsDesktop">
                     <div class="row">
                         <div class="col col4 padding">
                             Online Banking
                         </div>
                         <div class="col col4">
                             <a href="access/admin/eForm.php" class="cta cta-secondary">
                                 <strong><span>Register</span></strong>
                             </a>
                         </div>
                         <div class="col col4">
                             <a href="access" class="cta "> <strong><span>Log in</span></strong>
                             </a>
                         </div>
                     </div>


                 </div>
             </div>
         </div>

         <div id="stamp-div" class="stampDiv dekstopOnly">
             <a href="index.php" id="stamp-link"></a>
         </div>


     </div>
     <div id="nav-tools" class="navTools" role="navigation">
         <!--<ul class="anchors expander mobileOnly">
            <li><a href="#nav-primary">Products and support</a></li>
            <li><a href="#support-tools">Online banking</a></li>
        </ul>-->
         <div class="supportTools mobileOnly">
             <div class="row">
                 <div class="col col4 padding">
                     Online Banking
                 </div>
                 <div class="col col4">
                     <a href="access/admin/eForm.php" class="cta cta-secondary">
                         <strong><span>Register</span></strong>
                     </a>
                 </div>
                 <div class="col col4">
                     <a href="access" class="cta "> <strong><span>Log in</span></strong>
                     </a>
                 </div>
             </div>


         </div>
         <form id="frm-search" class="frmSearch" name="search" method="post" action="index.php"
             onsubmit="openVA({entry:document.getElementById(&#39;entry&#39;).value, url:}); return false;">
             <div class="search-inner">
                 <div class="fieldWrapper">
                     <div class="field">
                         <label for="entry" class="accessible">Search</label>
                         <input name="entry" type="text" id="entry" value="" title="Search..."
                             class="placeholder searchField">
                         <input type="image" src="./index_files/search-small.png" class="image" alt="Search">
                     </div>
                 </div>
             </div>
         </form>

         <ul id="nav-primary" class="navPrimary">
             <li class="close mobileOnly">
                 <p><a href="index.php#"><span class="accessible">Close</span></a>
                 </p>
             </li>
             <li class="home first">
                 <a href="index.php">
                     <span>Home</span>
                 </a>
             </li>
             <li class="">
                 <a href="./loan.php" rel="spt-loans" role="menu">
                     <span>Loans</span>
                     <span class="accessible">collapsed</span></a>
             </li>
             <li class=" active">
                 <a href="./card.php" rel="spt-credit-cards" role="menu">
                     <span>Credit Cards</span>
                     <span class="accessible">collapsed</span></a>
             </li>
             <li class="">
                 <a href="./savings.php" rel="spt-savings" role="menu">
                     <span>Savings</span>
                     <span class="accessible">collapsed</span></a>
             </li>
             <li class="">
                 <a href="./insure.php" rel="spt-insurance" role="menu">
                     <span>Insurance</span>
                     <span class="accessible">collapsed</span></a>
             </li>
             <li class="">
                 <a href="./travel.php" rel="spt-travel" role="menu">
                     <span>Travel</span>
                     <span class="accessible">collapsed</span></a>
             </li>

             <li class=" last">
                 <a href="./support.php" rel="spt-support" role="menu">
                     <span>Support</span>
                     <span class="accessible">collapsed</span></a>
             </li>

         </ul>
     </div>
     </div>
     </div>


     </div>

 </header>