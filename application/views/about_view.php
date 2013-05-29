<!DOCTYPE html>
    <html lang="zh-hant">
    <head>
        <title>URIM 聖經研讀工具集</title>
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

        <!-- 使用提示 -->
        <script>
        $(document).ready(function() {
            var _noty = noty({
                text: '點擊左上角會有所有書卷的選單喔！',
                type: 'alert',
                layout: 'topLeft',
                buttons: [
                    {addClass: 'btn btn-primary', text: '我知道了！', onClick: function($noty) {
                        $noty.close();

                      }
                    },
                    {addClass: 'btn btn-danger', text: '我不知道，幫我打開吧！', onClick: function($noty) {
                        $noty.close();

                        $('.brand').click();

                      }
                    }
                ]
            });
        });

        </script>
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
                            <li>
                                <? if ($static == true) : ?>
                                <a href="./resources.html">資源</a>
                                <? else: ?>
                                <a href="<?= site_url('resources'); ?>">資源</a>
                                <? endif; ?>
                            </li>
                            <li class="active">
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

          <div class="about-header">
            <h1>URIM</h1>
            <p class="lead">聖經研讀工具集</p>
            <p class="lead">這話離你很近，就在你口中，就在你心裏。
                <? if ($static == true) : ?>
                <a href="./rom.10.8.html">羅馬書 10:8</a>
                <? else: ?>
                <a href="<?= site_url('reading/rom.10.8') ?>">羅馬書 10:8</a>
                <? endif; ?>
             (新漢語譯本)</p>
            <? if ($static == true) : ?>
            <a class="btn btn-large btn-success" href="gen.1.1.html">開始閱讀</a>
            <? else: ?>
            <a class="btn btn-large btn-success" href="<?= site_url('reading') ?>">開始閱讀</a>
            <? endif; ?>
            <p class="clearfix"></p>
            <div class="slider-wrapper">
                <div id="slider" class="nivoSlider">
                <? if ($static == true) : ?>
                <img alt="" src="../img/demo.png" />
                <img alt="" src="../img/demo2.png" />
                <img alt="" src="../img/demo3.png" />
                <? else: ?>
                <img alt="" src="<?= base_url('img/demo.png') ?>" />
                <img alt="" src="<?= base_url('img/demo2.png') ?>" />
                <img alt="" src="<?= base_url('img/demo3.png') ?>" />
                <? endif; ?>
                </div>
            </div>
          </div>

          <hr>

          <div class="alert alert-info">請注意，本服務提供的新約希臘文只是某個抄本，並未經過 <a href="http://www.chioulaoshi.org/EXG/textual.html">新約經文鑑別學 (Textual Criticism)</a> 的處理，希望未來能提供此類資訊。</div>

          <hr>

          <div class="row-fluid marketing">
            <div class="span6">
              <h4>這是給神學院學生用的？</h4>
              <p>不是只有神學院學生、傳道、牧師才需要研讀聖經原文，您也可以！</p>

              <h4>自由、免費</h4>
              <p>完全免費！自由閱讀經文與字典，使用公有領域資料，資料來源：<a href="https://github.com/bibleforge/BibleForgeDB">BibleForgeDB</a>、<a href="http://bible.fhl.net/public/">信望愛公開資料</a></p>

              <h4>跨平台</h4>
              <p>支援 Safari、<a href="http://moztw.org/firefox">Firefox</a>、<a href="http://www.google.com/intl/zh-TW/chrome">Chrome</a> 等先進網頁瀏覽器。</p>

              <h4>開放原始碼</h4>
              <p>程式碼可在 <a href="https://github.com/urim-project">GitHub</a> 自由取得。</p>
            </div>

            <div class="span6">
              <h4>易用</h4>
              <p>以最簡易的方式顯示聖經原文，人人都可以查考原文。</p>

              <h4>即時</h4>
              <p>即時查詢希伯來原文、希臘原文、編號與解釋，甚至可以離線查詢！您可以<a href="https://github.com/lancetw/lancetw.github.io/tree/master/urim">在此下載</a>所有的頁面。</p>

              <h4>便利</h4>
              <p>您可以隨時隨地閱讀與查詢，以支援各式平板、智慧型手機為開發目標。</p>

              <h4>贊助</h4>
              <p>
                若您喜歡本服務，請考慮小額捐款贊助。
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="lancetw@gmail.com">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="URIM Bible Study Collection">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="TWD">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
                <input type="image" src="https://www.paypalobjects.com/zh_XC/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
                <img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
              </p>

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