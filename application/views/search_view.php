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

        <link rel="stylesheet" href="../js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
        <script src="../js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

        <link rel="stylesheet" href="../js/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        <script type="text/javascript" src="../js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

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

<body style="background-color: white;">
<? $i = 1; ?>
<div class="container-fluid">
      <h1 class="span12 search-title <?= $info['type'] ?>"><?= $info['word'] ?> <small class="strongs"><?= $info['strongs'] ?></small></h1>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="strongs-results">

  <thead>
    <tr>
      <th>No.</th>
      <th>經文</th>
      <th>章節</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>

</body>
</html>

