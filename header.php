<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?><!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="../favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../favicon/manifest.json">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
</head>
<body <?php body_class(isset($class) ? $class : ''); ?>>
<script async type="text/javascript">jQuery(document).ready(function ($) {
        $(document).ready(function () {
            $('.navbar-toggle').click(function () {
                $(this).toggleClass('open');
            });

        });
        jQuery(document).ajaxComplete(function () {
            var popup = $('#popmake-3906');
            var popup1 = $('#popmake-4011');
            var popup2 = $('#popmake-4133');
            if (jQuery('.wpcf7-mail-sent-ok').length) {
                popup.removeClass('active')
                popup1.removeClass('active')
                popup2.removeClass('active')
                popup.css('display', 'none')
                popup1.css('display', 'none')
                popup2.css('display', 'none')
                $('html').css('overflow-y', 'auto')
                $('#pum-3906').css('display', 'none')
                $('#pum-4011').css('display', 'none')
                $('#pum-4133').css('display', 'none')
                $('html').css('overflow-y', 'auto')

                //window.location.replace("http://stackoverflow.com");
            }
        });

    });
</script>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-N6BNQS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N6BNQS');</script>


<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR8NLCQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WR8NLCQ');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Page Plugin -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=146394938850292";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script><!-- End Facebook Page Plugin -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <svg width="81px" height="20px" viewBox="0 0 81 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"><title>testo_logo</title>
                <defs></defs>
                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="header" fill="#212121">
                        <g id="testo_logo">
                            <path d="M76.9378413,10.7385927 C76.8168339,10.4983696 76.7275841,10.0839305 76.4702381,9.84749469 C75.0827596,8.57279708 72.3143732,8.41427144 71.1387946,10.5173061 C70.7084244,11.2882925 70.3924911,12.1242042 70.0541084,12.9428024 C69.8964155,13.3236968 70.2276801,14.0936012 70.6158893,14.2488805 C71.3287926,14.5340103 72.0449812,14.8234683 72.7852617,15.0160797 C73.1356904,15.108057 73.5709885,15.05774 73.9214171,14.9397926 C75.5372218,14.3955032 76.8584473,12.5689416 76.9378413,10.7385927 M74.115248,5.00894599 C75.3466762,4.93482308 76.7199185,5.32707935 78.015957,5.97146172 C79.9257931,6.92153345 80.9130164,8.44402881 80.9951481,10.5962984 C81.128749,14.1114556 78.4846553,17.4951393 75.3631025,18.6984192 C74.8889288,18.8812918 74.3523349,18.9521685 73.8387379,18.983549 C71.9644921,19.097168 70.2222046,18.6161807 68.588331,17.72887 C68.2472106,17.5438332 67.9186838,17.3225466 67.6208194,17.0752899 C66.179134,15.8757972 65.7022225,14.3413989 66.1780389,12.5619081 C66.3767977,11.8223021 66.7042295,11.1027148 67.0705369,10.4258698 C67.5605895,9.51854047 68.1371541,8.65611772 68.6912695,7.78341515 C70.0371345,5.661444 71.3205795,4.97756549 74.115248,5.00894599"
                                  id="Fill-7"></path>
                            <path d="M65.3473967,0 C66.7602274,1.14673379 66.5951821,2.73652382 67,4.23183862 C66.0871436,4.33500123 65.3877172,4.3605204 64.7130206,4.50331916 C63.5630797,4.74602276 62.4233532,5.04247951 61.2933037,5.36608431 C61.1191191,5.41549377 60.9148285,5.71846605 60.8987003,5.91881868 C60.6223704,9.35630525 60.3487285,12.7959637 60.7078499,16.2453954 C60.8766584,17.8726497 60.8809593,17.8715638 62.0540173,19.4293191 C61.7766122,19.6302147 61.4986695,20.0037719 61.2250276,19.9999712 C59.817573,19.9836824 58.410656,19.8734613 57.0042766,19.7871305 C56.7241834,19.7697557 56.4328005,19.2229939 56.6150492,18.9645444 C56.8946048,18.5687258 57.1881381,18.1788798 57.1333022,17.6831563 C56.7252586,13.9893921 56.9811595,10.3173464 57.4612424,6.65127318 C57.4762953,6.53453654 57.4526406,6.41345622 57.4558663,6.29454775 C57.4730697,5.78796507 57.1225501,5.31721781 56.6800997,5.28844088 C56.093033,5.24934768 55.494139,5.14564211 54.9194374,5.2211137 C53.0034067,5.47141876 52.8001913,5.39051756 52.219576,3.35387056 C52.1217315,3.01180509 52.0711965,2.65616558 52.0056084,2.30486977 C51.9496973,2.00135452 52.3238717,1.51757621 52.5915999,1.58490338 C54.9269639,2.17075838 57.2827569,1.68806598 59.6251098,1.69458152 C61.6362968,1.70055409 63.6007121,1.26890003 65.3473967,0"
                                  id="Fill-5"></path>
                            <path d="M48.0297753,5.1050024 C48.0620275,5.32325379 48.1947993,5.59754998 48.111481,5.75813989 C47.5701807,6.79766318 46.9869525,7.81509188 46.4058744,8.83305947 C46.2768654,9.06047203 45.6371958,8.97963818 45.5135622,8.70857535 C45.417343,8.49786845 45.3920787,8.24728352 45.2679075,8.05813232 C44.7851988,7.3225443 43.8740728,6.99543666 43.1290458,7.27619956 C42.910268,7.35918898 42.695253,7.46750633 42.501202,7.59737938 C40.6434723,8.84168175 40.0575564,12.1779641 41.4046254,13.9056529 C41.6169528,14.1777935 41.8835714,14.4542453 42.1867425,14.6019018 C44.1084391,15.5395744 46.0355111,15.5848413 47.9088293,14.4714898 C48.1969494,14.300661 48.3705741,13.9444531 48.6253668,13.7035683 C48.8350065,13.5052559 49.4171596,13.6022565 49.5692827,13.8285913 C50.2938833,14.9085315 50.8335709,16.0687667 50.9985949,17.3691138 C51.0211715,17.5491039 50.7653037,17.9424952 50.6889733,17.9295618 C49.4483368,17.7247828 48.3936882,18.3536701 47.2799104,18.6710777 C44.9991388,19.3204429 42.7785713,18.9690851 40.7552801,17.9618954 C38.2433673,16.7122041 36.9253254,14.5296902 37.0032683,11.6503885 C37.0451962,10.0973009 37.49404,8.62235257 38.2073523,7.24871605 C39.5511961,4.66257181 41.8443311,3.55730366 44.6674781,4.16140195 C45.8027574,4.40498128 46.9090096,4.78651704 48.0297753,5.1050024"
                                  id="Fill-10"></path>
                            <path d="M23.827645,9.40977125 C23.8622886,9.52278358 23.8745815,9.65046577 23.9393986,9.74391827 C23.9935991,9.82161425 24.1081465,9.90420018 24.1986669,9.90637349 C26.1292098,9.9541864 28.0731631,10.2301973 29.97018,9.65589906 C30.1769241,9.59287295 30.4428976,9.38749479 30.4786587,9.20982637 C30.5138611,9.03324461 30.3484658,8.73604393 30.1786004,8.61433835 C28.0809859,7.12018501 25.8772055,7.29839675 23.9734834,9.09735737 C23.8946971,9.17125005 23.8751403,9.30436553 23.827645,9.40977125 M27.7786925,13.1185315 C26.557226,13.1185315 25.3346419,13.0864751 24.1148517,13.1337447 C23.6404578,13.1522179 23.1710928,13.3374929 22.7050804,13.4630018 C22.4229026,13.5390678 22.3273533,14.1633522 22.5229221,14.3790536 C23.1951198,15.1217836 24.0880308,15.5075469 25.0133504,15.8101808 C25.58944,15.9981725 26.2007321,16.1084682 26.8047601,16.1850775 C28.4788286,16.3980623 29.955652,16.1274847 30.9251142,14.5741085 C31.1866176,14.1541156 31.8638442,14.2312683 32.1370817,14.6284414 C32.8210135,15.6221892 33.3546368,16.6849397 33.6172577,17.8547259 C33.6569302,18.0340243 33.5239435,18.3964244 33.3859278,18.443694 C31.8979291,18.9538795 30.3976374,19.4309219 28.8900817,19.8840578 C28.5464395,19.9872903 28.1597721,20.0171733 27.8004844,19.9910936 C25.0725798,19.793322 22.5005714,19.1386112 20.3029374,17.4553795 C18.4014504,15.9987158 17.7158423,14.1573756 18.1047447,11.7917233 C18.6920097,8.21825188 22.0518808,4.42527571 26.9740668,4.01723601 C27.9161494,3.93899671 28.9493111,4.13459497 29.847251,4.45244213 C32.0974092,5.25004835 33.9726341,6.53230358 34.7929053,8.87350604 C35.1717499,9.9541864 35.0314992,10.9854239 34.3665654,11.9340754 C34.0117478,12.4410009 33.5552345,12.8452373 32.9020349,12.8957668 C31.1961166,13.029969 29.4874046,13.1304847 27.77981,13.2445837 C27.77981,13.2022041 27.7792512,13.1603678 27.7786925,13.1185315"
                                  id="Fill-1"></path>
                            <path d="M18.2700371,5.35781422 C16.6175265,4.05972024 14.880315,4.4828314 13.1756376,5.28757224 C12.9148034,5.41035744 12.6365803,5.88214021 12.6668707,6.16034272 C13.0567196,9.77531599 12.724086,13.4278991 13.2872634,17.0351292 C13.4061813,17.7978355 13.7180604,18.3785763 14.2229007,18.9388529 C14.5488032,19.3016776 14.1432481,19.8453616 13.6081174,19.924453 C11.9887019,20.1622802 10.4528656,19.8044332 8.9349791,19.3271196 C8.65114667,19.2380727 8.58271276,18.9692726 8.72518991,18.7331047 C9.24012701,17.878033 9.41289458,16.9930946 9.30182972,15.978734 C9.13074495,14.417924 9.13242775,12.8383089 9.04267837,11.2680964 C8.95348991,9.69733079 8.8699108,8.12490591 8.72911645,6.55856499 C8.64609827,5.62937969 8.19735134,5.22507347 7.36829139,5.14211049 C6.14938255,5.01932529 4.93215651,4.88215985 3.71268673,4.75937465 C2.97842457,4.68581414 2.27445283,4.70849069 1.55140934,4.98724628 C0.236580843,5.49442659 -0.0119127686,5.34454015 0.000427771888,4.20628816 C0.0127683124,3.00055962 0.0716663467,1.79427799 0.134490917,0.589102542 C0.160854799,0.0835814933 0.782930227,-0.14097162 1.20419141,0.250613612 C1.56487175,0.585784023 1.8806774,0.94971493 2.41244251,0.98124086 C5.09987567,1.14440137 7.77104176,1.67149279 10.4792295,1.40158659 C12.5541231,1.19473224 14.6278948,0.969072958 16.6926916,0.682021071 C17.1397557,0.619522298 17.5385796,0.247295093 17.9688157,0.036569142 C18.2375029,-0.0950654417 18.8595783,0.153823477 18.8865032,0.383354369 C19.0682457,1.95190764 19.0789034,3.51050536 18.5617226,5.02983394 C18.5258228,5.13547346 18.4035393,5.21235248 18.2700371,5.35781422"
                                  id="Fill-3"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </a></div>      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">       <?php wp_nav_menu(array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth' => 3, 'container' => false, 'walker' => new Bootstrap_Walker_Nav_Menu)); ?>      </div>
    <!-- /.navbar-collapse -->    </nav>
<div id="main-container" class="container">