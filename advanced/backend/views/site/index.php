<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    $this->title = 'HB技术小组网站';
    $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="zh-CN" class="no-js no-svg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>HB技术小组 &#8211; 小组展示及论坛界面</title>
<meta name='robots' content='noindex,follow' /> 

<?=Html::cssFile('@web/css/dashicons.min.css?ver=4.7.5')?>
<?=Html::cssFile('@web/css/admin-bar.min.css?ver=4.7.5')?>
<?=Html::cssFile('https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&#038;subset=latin%2Clatin-ext')?>
<?=Html::cssFile('@web/css/style.css?ver=4.7.5')?>
<?=Html::jsFile('@web/js/jquery/jquery.js?ver=1.12.4')?>
<?=Html::jsFile('@web/js/jquery/jquery-migrate.min.js?ver=1.4.1')?>
<?=Html::jsFile('@web/js/dmin-bar.min.js?ver=4.7.5')?>
<?=Html::jsFile('@web/js/skip-link-focus-fix.js?ver=1.0')?>
<?=Html::jsFile('@web/js/global.js?ver=1.0')?>
<?=Html::jsFile('@web/js/jquery.scrollTo.js?ver=2.1.2')?>
<?=Html::jsFile('@web/js/wp-embed.min.js?ver=4.7.5')?>




<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyseventeen-ie8-css'  href='http://localhost:8080/wordpress/wp-content/themes/twentyseventeen/assets/css/ie8.css?ver=1.0' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='http://localhost:8080/wordpress/wp-content/themes/twentyseventeen/assets/js/html5.js?ver=3.7.3'></script>
<![endif]-->



<meta name="generator" content="WordPress 4.7.5" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
    html { margin-top: 32px !important; }
    * html body { margin-top: 32px !important; }
    @media screen and ( max-width: 782px ) {
        html { margin-top: 46px !important; }
        * html body { margin-top: 46px !important; }
    }
</style>
</head>

<body class="home blog logged-in admin-bar no-customize-support hfeed has-header-image has-sidebar colors-light">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">跳至内容</a>

    <header id="masthead" class="site-header" role="banner">

        <div class="custom-header">

    <div class="custom-header-media">
        <div id="wp-custom-header" class="wp-custom-header"><?=Html::img('@web/images/header1.jpg')?></div>   </div>

    <div class="site-branding">
    <div class="wrap">
        
        <div class="site-branding-text">
                            <h1 class="site-title"><a href="" rel="home">HB技术小组</a></h1>
            
                                <p class="site-description">小组风采及论坛展示</p>
                        </div><!-- .site-branding-text -->

                <a href="#content" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">向下滚动到内容</span></a>
    
    </div><!-- .wrap -->


</div><!-- .site-branding -->

</div><!-- .custom-header -->

        
    </header><!-- #masthead -->

    
    <div class="site-content-contain">
        <div id="content" class="site-content">

<div class="wrap">
        <header class="page-header">
        <h1 class="page-title">文章</h1>
    </header>
     <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Article Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        </main><!-- #main -->
    </div><!-- #primary -->
    
<aside id="secondary" class="widget-area" role="complementary">
    <section id="search-2" class="widget widget_search">


</section>      
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">




            

        </main><!-- #main -->
    </div><!-- #primary -->
    

</div><!-- .wrap -->


        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">
                
<div class="site-info">
    <a href="https://cn.wordpress.org/">自豪地采用WordPress</a>
</div><!-- .site-info -->
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->

<script type='text/javascript'>
/* <![CDATA[ */
var twentyseventeenScreenReaderText = {"quote":"<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>"};
/* ]]> */
</script>

    <!--[if lte IE 8]>
        <script type="text/javascript">
            document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
        </script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script type="text/javascript">
            (function() {
                var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

                        request = true;
        
                b[c] = b[c].replace( rcs, ' ' );
                // The customizer requires postMessage and CORS (if the site is cross domain)
                b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
            }());
        </script>
    <!--<![endif]-->

                        
        

      </aside></div></div></div></div>
        
        

</body>
</html>
