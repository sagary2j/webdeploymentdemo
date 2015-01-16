<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title>Demo - Azure Websites</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
  
<!--<![endif]-->





  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/blog.css">
    <!--<![endif]-->
  


    

    

</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Tech Ready</h1>
            <h2 class="brand-tagline">Azure Websites Demo</h2>
            <h3 class="content-subhead">
              <?php 

$variabe_name = 'DEPLOYMENT_ENVIRONMENT';
$config_value = getenv($variabe_name);
echo "[$variabe_name:]<b>$config_value</b><br>";

		?>
            </h3>

            <!--<nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="http://purecss.io">Pure</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="http://yuilibrary.com">YUI Library</a>
                    </li>
                </ul>
            </nav>-->
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Azure Websites Survey</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <!--<img class="post-avatar" alt="Tilo Mitra&#x27;s avatar" height="48" width="48" src="img/common/tilo-avatar.png">-->

                        <h2 class="post-title">Survey</h2>

                        <p class="post-meta">01/16/2015</p>
                            <!--<p class="post-meta">

            By <a href="#" class="post-author">Tilo Mitra</a> under <a class="post-category post-category-design" href="#">CSS</a> <a class="post-category post-category-pure" href="#">Pure</a>
        </p>-->
</header>

                    <div class="post-description">
                        <form action="results_vnext.php" method="post">
                            <p>1. What is your favorite Azure Websites feature? <br><input type="text" name="q1" /></p>
                            <p>2. How would you improve the magic? <br><input type="text" name="q2" /></p>
                            <!--<p>3. What is your favorite project?<br> <input type="text" name="q3" /></p>-->
                            <p>
                                <input type="submit" class="button-secondary pure-button" />
                            </p>
                            <!--<button >Secondary Button</button>-->
                        </form>
</div>
                </section>
            </div>

            <!--<div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Eric Ferraiuolo&#x27;s avatar" height="48" width="48" src="img/common/ericf-avatar.png">

                        <h2 class="post-title">Everything You Need to Know About Grunt</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Eric Ferraiuolo</a> under <a class="post-category post-category-js" href="#">JavaScript</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Reid Burke&#x27;s avatar" height="48" width="48" src="img/common/reid-avatar.png">

                        <h2 class="post-title">Photos from CSSConf and JSConf</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Reid Burke</a> under <a class="post-category" href="#">Uncategorized</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <div class="post-images pure-g">
                            <div class="pure-u-1 pure-u-md-1-2">
                                <a href="http://www.flickr.com/photos/uberlife/8915936174/">
                                    <img alt="Photo of someone working poolside at a resort"
                                         class="pure-img-responsive"
                                         src="http://farm8.staticflickr.com/7448/8915936174_8d54ec76c6.jpg">
                                </a>

                                <div class="post-image-meta">
                                    <h3>CSSConf Photos</h3>
                                </div>
                            </div>

                            <div class="pure-u-1 pure-u-md-1-2">
                                <a href="http://www.flickr.com/photos/uberlife/8907351301/">
                                    <img alt="Photo of the sunset on the beach"
                                         class="pure-img-responsive"
                                         src="http://farm8.staticflickr.com/7382/8907351301_bd7460cffb.jpg">
                                </a>

                                <div class="post-image-meta">
                                    <h3>JSConf Photos</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Andrew Wooldridge&#x27;s avatar" height="48" width="48" src="img/common/andrew-avatar.png">

                        <h2 class="post-title">YUI 3.10.2 Released</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Andrew Wooldridge</a> under <a class="post-category post-category-yui" href="#">YUI</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            We are happy to announce the release of YUI 3.10.2! You can find it now on the Yahoo! CDN, download it directly, or pull it in via npm. We�ve also updated the YUI Library website with the latest documentation.
                        </p>
                    </div>
                </section>
            </div>-->

            <!--<div class="footer">
                <div class="pure-menu pure-menu-horizontal pure-menu-open">
                    <ul>
                        <li><a href="http://purecss.io/">About</a></li>
                        <li><a href="http://twitter.com/yuilibrary/">Twitter</a></li>
                        <li><a href="http://github.com/yahoo/pure/">GitHub</a></li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
</div>






</body>
</html>
