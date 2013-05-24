<!DOCTYPE html>
    <html lang="zh-hant">
    <head>
        <title>URIM</title>
        <meta name="author" content="Hsin-lin Cheng aka lancetw, lancetw@gmail.com, 2013 Summer">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="initial-scale=1.0 minimum-scale=1.0 maximum-scale=1.0 user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="apple-touch-icon" href="icon.png"/>

        <? if ($static == true) : ?>
        <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/jquery-migrate-1.2.1.min.js"></script>

        <script src="../css/bootstrap/js/bootstrap.min.js"></script>

        <link href="../js/jquery.nanoscroller.0.6.9/nanoscroller.css" rel="stylesheet">
        <script src="../js/jquery.nanoscroller.0.6.9/jquery.nanoscroller.min.js"></script>

        <script type="text/javascript" src="../js/noty/jquery.noty.js"></script>
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

        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

        <link href="<?= base_url('js/jquery.nanoscroller.0.6.9/nanoscroller.css'); ?>" rel="stylesheet">
        <script src="<?= base_url('js/jquery.nanoscroller.0.6.9/jquery.nanoscroller.min.js'); ?>"></script>

        <script type="text/javascript" src="<?= base_url('js/noty/jquery.noty.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/noty/layouts/bottom.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/noty/layouts/bottomCenter.js'); ?>"></script>
        <!-- You can add more layouts if you want -->
        <script type="text/javascript" src="<?= base_url('js/noty/themes/default.js'); ?>"></script>

        <script type="text/javascript" src="<?= base_url('js/ios-orientationchange-fix.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('js/bootstrapx-clickover.js'); ?>"></script>

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">

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
                        <li class="active">
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

    <div class="row-fluid screen">

        <div id="content" class="span9">

            <? if ($static == true) : ?>

            <ul class="pager page-nav">
                <li class="previous previous2<? if (empty($layout['nextbook'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['nextbook'])): ?>
                    <a href="<?= $layout['nextbook'] ?>.html"><i class="icon-chevron-sign-down icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="previous<? if (empty($layout['next'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['next'])): ?>
                    <a href="<?= $layout['next'] ?>.html"><i class="icon-chevron-sign-left icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="next next2<? if (empty($layout['prevbook'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['prevbook'])): ?>
                    <a href="<?= $layout['prevbook'] ?>.html"><i class="icon-chevron-sign-up icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="next<? if (empty($layout['prev'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['prev'])): ?>
                    <a href="<?= $layout['prev'] ?>.html"><i class="icon-chevron-sign-right icon-3x"></i></a>
                    <? endif; ?>
                </li>

            </ul>

            <? else: ?>

            <ul class="pager page-nav">
                <li class="previous previous2<? if (empty($layout['nextbook'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['nextbook'])): ?>
                    <a href="<?= site_url('reading/' . $layout['nextbook']); ?>"><i class="icon-chevron-sign-down icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="previous<? if (empty($layout['next'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['next'])): ?>
                    <a href="<?= site_url('reading/' . $layout['next']); ?>"><i class="icon-chevron-sign-left icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="next next2<? if (empty($layout['prevbook'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['prevbook'])): ?>
                    <a href="<?= site_url('reading/' . $layout['prevbook']); ?>"><i class="icon-chevron-sign-up icon-3x"></i></a>
                    <? endif; ?>
                </li>
                <li class="next<? if (empty($layout['prev'])): ?> disabled<? endif; ?>">
                    <? if (!empty($layout['prev'])): ?>
                    <a href="<?= site_url('reading/' . $layout['prev']); ?>"><i class="icon-chevron-sign-right icon-3x"></i></a>
                    <? endif; ?>
                </li>

            </ul>

            <? endif ?>

            <a id="top"></a>

            <div class="page-header">
                <h1 class="book-title"><?= $info['book_chinese'] ?> <small><?= $info['book_hebrew'] ?><? if ($info['book_hebrew'] !== $info['book_english']): ?> - <?= $info['book_english']; ?><? endif; ?></small></h1>
            </div>
            <p><span class="verse badge badge-inverse"><a rel="clickover" data-title="選擇第幾章？" data-ref="chapter-panel" href="#"><?= $info['chapter'] ?></a> : <a rel="clickover" data-title="選擇第 <?= $info['chapter'] ?> 章第幾節？" data-ref="verse-panel" href="#"><?= $info['verse'] ?></a></span></p>
            <div class="bs-docs-example">
                <p class="the-message lead <?= $layout['type'] ?>">
                    <? foreach ($word['with_strongs'] as $item): ?>
                    <a href="#pop-content-<?= $layout['strongs_note'] ?><?= $item['strongs'] ?>" data-ref="<?= $layout['strongs_note'] ?><?= $item['strongs'] ?>" data-content="查無資料 :|" data-title="<?= $item['strongs'] ?>"><?= $item['word'] ?></a>
                    <? endforeach; ?>
                </p>
            </div>

            <ul class="nav nav-tabs" id="transTab">
                <li class="active"><a href="#chinese">中文</a></li>
                <li><a href="#english">English</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="chinese">
                    <pre class="the-translation chinese prettyprint"><code><a href="#" data-toggle="tooltip" title="新標點和合本">CUNP</a></code><sapn class="word"><?= $word['translation']['zh-hant']['cunp'] ?></sapn></pre>
                </div>
                <div class="tab-pane" id="english">
                    <pre class="the-translation english prettyprint"><code><a href="#" data-toggle="tooltip" title="King James Version">KJV</a></code><sapn class="word"><?= $word['translation']['en']['kjv'] ?></sapn></pre>
                </div>

            </div>

            <div class="chapter-panel">
                <ul class="panel-list">
                    <? for ($i = 1; $i <= $info['book_info']['chapter']; $i++): ?>
                    <li>
                        <? if ($static == true) : ?>
                        <a href="<?= $info['book_info']['abbr'] . '.' . $i . '.1.html' ?>"><?= $i ?></a>
                        <? else: ?>
                        <a href="<?= site_url('reading/' . $info['book_info']['abbr'] . '.' . $i . '.1'); ?>"><?= $i ?></a>
                        <? endif; ?>
                    </li>
                    <? endfor; ?>
                </ul>
            </div>

            <div class="verse-panel">
                <ul class="panel-list">
                    <? for ($i = 1; $i <= $info['book_info']['verse']; $i++): ?>
                    <li>
                        <? if ($static == true) : ?>
                        <a href="<?= $info['book_info']['abbr'] . '.' . $info['chapter'] . '.' . $i . '.html' ?>"><?= $i ?></a>
                        <? else: ?>
                        <a href="<?= site_url('reading/' . $info['book_info']['abbr'] . '.' . $info['chapter'] . '.' . $i); ?>"><?= $i ?></a>
                        <? endif; ?>
                    </li>
                    <? endfor; ?>
                </ul>
            </div>

        <hr class="bs-docs-separator">

        </div>

         <div id="sidebar" class="span3 pull-left nano">
            <div class="content">
                <ul class="nav">
                    <? foreach ($lexicon as $item): ?>
                    <li id="pop-content-<?= $layout['strongs_note'] ?><?= $item['strongs'] ?>" class="pop-content">
                        <div class="itools">
                            <a class="fhl-pop-link" rel="fhl-note" data-ref="<?= $layout['strongs_note'] ?><?= $item['strongs'] ?>" href="#">
                                <? if ($static == true): ?>
                                <img alt="" src="../img/fhl.png" />
                                <? else: ?>
                                <img alt="" src="<?= base_url('img/fhl.png');?>" />
                                <? endif; ?>
                            </a>
                        </div>
                        <ul>
                            <li class="title <?= $layout['type']; ?>"><?= $item['word'] ?></li>
                            <li class="strongs">
                                <strong>Strong's <?= $layout['strongs_note'] ?><?= $item['strongs'] ?></strong>
                                <? if ($static == true): ?>
                                <a data-fancybox-type="iframe"  class="various strongs-search" href="<?= '../search/' . $layout['strongs_note'] . $item['strongs'] . '.html'; ?>"><i class="icon icon-search"></i></a>
                                <? else: ?>
                                <a data-fancybox-type="iframe"  class="various strongs-search" href="<?= site_url('search/' . $layout['strongs_note'] . $item['strongs']); ?>"><i class="icon icon-search"></i></a>
                                <? endif; ?>
                            </li>
                            <li>音譯：<em><?= $item['sbl'] ?></em></li>
                            <li>字根：<?= $item['deriv'] ?></li>
                            <? if (isset($item['part_of_speech'])): ?><li>詞性：<?= $item['part_of_speech'] ?></li><? endif; ?>
                            <li>定義：<?= $item['def'] ?></li>
                        </ul>

                        <ul id="fhl-note-<?= $layout['strongs_note'] ?><?= $item['strongs'] ?>" class="fhl-note" style="display: none">
                            <? foreach ($item['fhl'] as $txt): ?>
                                <li><?= trim($txt) ?></li>
                            <? endforeach; ?>
                            </li>
                        </ul>
                        <a class="top visible-phone" href="#top">TOP</a>
                    </li>
                    <? endforeach; ?>
                </ul>

                <div class="sidebar-padding"></div>
            </div>
        </div>
    </div>
</div>
</body>

    <script>

    </script>
    </html>