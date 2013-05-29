<!DOCTYPE html>
    <html lang="zh-hant">
    <head>
        <title>資源 | URIM 聖經研讀工具集</title>
        <meta name="author" content="Hsin-lin Cheng aka lancetw, lancetw@gmail.com, 2013 Summer">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="initial-scale=1.0 minimum-scale=1.0 maximum-scale=1.0 user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <? if ($static == true) : ?>
        <link rel="apple-touch-icon" sizes="144x144" href="../img/apple-touch-icon-144x144.png">
        <? else: ?>
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('img/apple-touch-icon-144x144.png'); ?>">
        <? endif; ?>

        <? if ($static == true) : ?>
        <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/jquery-migrate-1.2.1.min.js"></script>

        <script src="../css/bootstrap/js/bootstrap.min.js"></script>

        <link href="../js/jquery.nanoscroller.0.6.9/nanoscroller.css" rel="stylesheet">
        <script src="../js/jquery.nanoscroller.0.6.9/jquery.nanoscroller.min.js"></script>

        <script type="text/javascript" src="../js/noty/jquery.noty.js"></script>
        <script type="text/javascript" src="../js/noty/layouts/topLeft.js"></script>
        <script type="text/javascript" src="../js/noty/layouts/bottom.js"></script>
        <script type="text/javascript" src="../js/noty/layouts/bottomCenter.js"></script>
        <!-- You can add more layouts if you want -->
        <script type="text/javascript" src="../js/noty/themes/default.js"></script>

        <script type="text/javascript" src="../js/ios-orientationchange-fix.js"></script>
        <script type="text/javascript" src="../js/bootstrapx-clickover.js"></script>

        <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <script type="text/javascript" src="../js/mmenu-1.2.3/jquery.mmenu.js"></script>
        <link type="text/css" media="screen" rel="stylesheet" href="../js/mmenu-1.2.3/mmenu.css" />

        <script type="text/javascript" src="../js/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>
        <link type="text/css" media="screen" rel="stylesheet" href="../js/DataTables-1.9.4/media/css/jquery.dataTables.css" />

        <link rel="stylesheet" href="../js/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        <script type="text/javascript" src="../js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

        <link rel="stylesheet" href="../js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
        <script src="../js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

        <link href="../css/base.css" rel="stylesheet">
        <script src="../js/base.js"></script>

        <? else: ?>

        <link href="<?= base_url('css/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?= base_url('css/bootstrap/js/bootstrap.min.js'); ?>"></script>

        <link href="<?= base_url('js/jquery.nanoscroller.0.6.9/nanoscroller.css'); ?>" rel="stylesheet">
        <script src="<?= base_url('js/jquery.nanoscroller.0.6.9/jquery.nanoscroller.min.js'); ?>"></script>

        <script type="text/javascript" src="<?= base_url('js/noty/jquery.noty.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/noty/layouts/topLeft.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/noty/layouts/bottom.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/noty/layouts/bottomCenter.js'); ?>"></script>
        <!-- You can add more layouts if you want -->
        <script type="text/javascript" src="<?= base_url('js/noty/themes/default.js'); ?>"></script>

        <script type="text/javascript" src="<?= base_url('js/ios-orientationchange-fix.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/bootstrapx-clickover.js'); ?>"></script>

        <link href="<?= base_url('css/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url('js/mmenu-1.2.3/jquery.mmenu.js'); ?>"></script>
        <link type="text/css" media="screen" rel="stylesheet" href="<?= base_url('js/mmenu-1.2.3/mmenu.css'); ?>" />

        <script type="text/javascript" src="<?= base_url('js/DataTables-1.9.4/media/js/jquery.dataTables.min.js'); ?>"></script>
        <link type="text/css" media="screen" rel="stylesheet" href="<?= base_url('js/DataTables-1.9.4/media/css/jquery.dataTables.css'); ?>" />

        <link rel="stylesheet" href="<?= base_url('js/fancybox/source/jquery.fancybox.css?v=2.1.4'); ?>" type="text/css" media="screen" />
        <script type="text/javascript" src="<?= base_url('js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4'); ?>"></script>

        <link rel="stylesheet" href="<?= base_url('js/nivo-slider/nivo-slider.css'); ?>" type="text/css" media="screen" />
        <script src="<?= base_url('js/nivo-slider/jquery.nivo.slider.pack.js'); ?>" type="text/javascript"></script>

        <link href="<?= base_url('css/base.css'); ?>" rel="stylesheet">
        <script src="<?= base_url('js/base.js'); ?>"></script>
        <? endif; ?>
    </head>

<body>
    <div class="container-fluid">
        <div class="container-narrow">

        <div class="navbar navbar-inverse navbar-fixed-top navbar-static-top">
            <div class="navbar-inner">
                <div class="container-fluid">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->
                    <a class="brand" href="#panel-nav">URIM<small>beta</small></a>

                    <div class="slogan hidden-desktop">
                        <span class="item">聖經研讀工具集</span>
                    </div>

                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li>
                                <? if ($static == true) : ?>
                                <a href="./gen.1.1.html">閱讀</a>
                                <? else: ?>
                                <a href="<?= site_url('reading'); ?>">閱讀</a>
                                <? endif; ?>
                            </li>
                            <li class="active">
                                <? if ($static == true) : ?>
                                <a href="./resources.html">資源</a>
                                <? else: ?>
                                <a href="<?= site_url('resources'); ?>">資源</a>
                                <? endif; ?>
                            </li>
                            <li>
                                <? if ($static == true) : ?>
                                <a href="./about.html">關於</a>
                                <? else: ?>
                                <a href="<?= site_url('about'); ?>">關於</a>
                                <? endif; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="span4">
                        <? if ($static == true) : ?>
                        <form method="post" accept-charset="utf-8" action="../search" class="navbar-search pull-left"  id="strongsform" />
                        <? else: ?>
                        <form method="post" accept-charset="utf-8" action="<?= site_url('search') ?>"  class="navbar-search pull-left"  id="strongsform" />
                        <? endif ?>
                            <input name="strongs" type="text" class="input-block-level search-query" placeholder="Strong's number">
                        </form>
                    </div>

                </div>
            </div>
        </div>

    <? if ($static == true) : ?>

    <nav id="panel-nav">
    <ul>
        <li class="Label">希伯來聖經 (Tanakh)</li>
        <li><a href="<?= $layout['bible']['torah'][0]['abbr'] . '.1.1.html'; ?>">訓誨（妥拉）</a>
            <ul>
                <? foreach ($layout['bible']['torah'] as $item): ?>
                <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= $layout['bible']['prophets'][0]['abbr'] . '.1.1.html'; ?>">信息</a>
            <ul>
                <? foreach ($layout['bible']['prophets'] as $item): ?>
                <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= $layout['bible']['writings'][0]['abbr'] . '.1.1.html'; ?>">著作</a>
            <ul>
                <? foreach ($layout['bible']['writings'] as $item): ?>
                <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li class="Label">新約聖經 (B'rit Hadashah)</li>
        <li><a href="<?= $layout['bible']['goodnews'][0]['abbr'] . '.1.1.html'; ?>">福音</a>
            <ul>
                <? foreach ($layout['bible']['goodnews'] as $item): ?>
                <li><a href="<?=$item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <? foreach ($layout['bible']['acts'] as $item): ?>
        <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
        <? endforeach; ?>
        <li><a href="<?= $layout['bible']['letters_paul_public'][0]['abbr'] . '.1.1.html'; ?>">保羅書信</a>
            <ul>
                <? foreach ($layout['bible']['letters_paul_public'] as $item): ?>
                <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= $layout['bible']['letters_paul_private'][0]['abbr'] . '.1.1.html'; ?>">保羅私信</a>
            <ul>
                <? foreach ($layout['bible']['letters_paul_private'] as $item): ?>
                <li><a href="<?=$item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= $layout['bible']['letters_general'][0]['abbr'] . '.1.1.html'; ?>">大公書信</a>
            <ul>
                <? foreach ($layout['bible']['letters_general'] as $item): ?>
                <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <? foreach ($layout['bible']['revelation'] as $item): ?>
        <li><a href="<?= $item['abbr'] . '.1.1.html'; ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
        <? endforeach; ?>

    </ul>
    </nav>

    <? else: ?>

    <nav id="panel-nav">
    <ul>
        <li class="Label">希伯來聖經 (Tanakh)</li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['torah'][0]['abbr'] . '.1.1'); ?>">訓誨（妥拉）</a>
            <ul>
                <? foreach ($layout['bible']['torah'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['prophets'][0]['abbr'] . '.1.1'); ?>">信息</a>
            <ul>
                <? foreach ($layout['bible']['prophets'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['writings'][0]['abbr'] . '.1.1'); ?>">著作</a>
            <ul>
                <? foreach ($layout['bible']['writings'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li class="Label">新約聖經 (B'rit Hadashah)</li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['goodnews'][0]['abbr'] . '.1.1'); ?>">福音</a>
            <ul>
                <? foreach ($layout['bible']['goodnews'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <? foreach ($layout['bible']['acts'] as $item): ?>
        <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
        <? endforeach; ?>
        <li><a href="<?= site_url('reading/' . $layout['bible']['letters_paul_public'][0]['abbr'] . '.1.1'); ?>">保羅書信</a>
            <ul>
                <? foreach ($layout['bible']['letters_paul_public'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['letters_paul_private'][0]['abbr'] . '.1.1'); ?>">保羅私信</a>
            <ul>
                <? foreach ($layout['bible']['letters_paul_private'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <li><a href="<?= site_url('reading/' . $layout['bible']['letters_general'][0]['abbr'] . '.1.1'); ?>">大公書信</a>
            <ul>
                <? foreach ($layout['bible']['letters_general'] as $item): ?>
                <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
        <? foreach ($layout['bible']['revelation'] as $item): ?>
        <li><a href="<?= site_url('reading/' . $item['abbr'] . '.1.1'); ?>"><?= $item['name'] ?> <?= $item['hebrew'] ?></a></li>
        <? endforeach; ?>

    </ul>
    </nav>

    <? endif; ?>

          <div class="resources-header">
            <h1 class="title">資源</h1>
            <p class="lead">這地方的人賢於帖撒羅尼迦的人，甘心領受這道，天天考查聖經，要曉得這道是與不是。
                <? if ($static == true) : ?>
                <a href="act.17.11.html">使徒行傳 17:11</a>
                <? else: ?>
                <a href="<?= site_url('reading/act.17.11') ?>">使徒行傳 17:11</a>
                <? endif; ?>
                 (新標點和合本)</p>

          </div>

          <hr>

          <div class="row-fluid marketing">
            <div class="span6">
              <h4>信望愛信仰與聖經資源中心</h4>
              <p><a href="http://bible.fhl.net">http://bible.fhl.net</a></p>

              <h4>BibleForge</h4>
              <p><a href="http://bibleforge.com">http://bibleforge.com</a></p>

              <h4>耶大雅聖經工具</h4>
              <p><a href="http://bibletool.konline.org">http://bibletool.konline.org</a></p>

              <h4>和合本修訂版</h4>
              <p><a href="https://www.youversion.com/zh-TW/bible/139/jhn.1.rcuv">https://www.youversion.com/zh-TW/bible/139/jhn.1.rcuv</a></p>

              <h4>新約經文鑑別學</h4>
              <p><a href="https://shop.campus.org.tw/ProductDetails.aspx?productID=000417587">https://shop.campus.org.tw/ProductDetails.aspx?productID=000417587</a></p>

              <h4>探索耶穌真貌--認識那位被希臘化了的耶穌</h4>
              <p><a href="https://shop.campus.org.tw/ProductDetails.aspx?productID=000466813">https://shop.campus.org.tw/ProductDetails.aspx?productID=000466813</a></p>

              <h4>猶差匯聚</h4>
              <p><a href="http://jematrix.wordpress.com">http://jematrix.wordpress.com</a></p>

              <h4>Torah Readings</h4>
              <p><a href="http://www.hebcal.com/sedrot">http://www.hebcal.com/sedrot</a></p>

              <h4>Weekly Parashah</h4>
              <p><a href="http://www.torahresource.com/Parashot.html">http://www.torahresource.com/Parashot.html</a></p>

            </div>

            <div class="span6">
              <h4>OursWeb.Net  我們的網站</h4>
              <p><a href="http://www.oursweb.net">http://www.oursweb.net</a></p>

              <h4>新漢語聖經</h4>
              <p><a href="http://www.chinesebible.org.hk/onlinebible">http://www.chinesebible.org.hk/onlinebible</a></p>

              <h4>夏達華研道中心</h4>
              <p><a href="http://www.hadavar.org.hk">http://www.hadavar.org.hk</a></p>

              <h4>Complete Jewish Bible</h4>
              <p><a href="http://www.biblegateway.com/passage/?search=Genesis%201&version=CJB">http://www.biblegateway.com/passage/?search=Genesis%201&version=CJB</a></p>

              <h4>新約背景文獻選輯</h4>
              <p><a href="https://shop.campus.org.tw/ProductDetails.aspx?productID=000243889">https://shop.campus.org.tw/ProductDetails.aspx?productID=000243889</a></p>

              <h4>妥拉的智慧</h4>
              <p><a href="http://rock24sea.blogspot.tw">http://rock24sea.blogspot.tw</a></p>

              <h4>聖經與版權法律簡介</h4>
              <p><a href="http://copyright-law-hk.blogspot.hk/2012/10/1.html">http://copyright-law-hk.blogspot.hk/2012/10/1.html</a></p>

              <h4>基督教壹蘋果</h4>
              <p><a href="https://www.facebook.com/groups/133255080104738">https://www.facebook.com/groups/133255080104738</a></p>

              <h4>Restoring the Jewishness of the Gospel</h4>
              <p><a href="http://www.amazon.com/Restoring-Jewishness-Gospel-Christians-Condensed/dp/1880226669/">http://www.amazon.com/Restoring-Jewishness-Gospel-Christians-Condensed/dp/1880226669/</a></p>

            </div>
          </div>

          <hr>

        <p class="footer">Developer: Hsin-lin Cheng aka lancetw, 2013 Summer &lt;lancetw@gmail.com&gt;</p>

        </div>
    </div> <!-- /container -->
</body>

<script>

</script>
</html>