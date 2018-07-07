<?php
session_start();
include("funcs.php");

loginCheck();

$pdo = db_connect();

?>
<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>管理者画面</title>

    <!-- Bootstrap Core CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" id="themesid">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/shortcuticon.png">

</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href=""><img src="img/logo.jpg" alt="Laf先生" class="navbar-brand topnav" style="height: 70px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="header_jugyou">
                        <a href="lessons.php"><img src="img/jugyou.png" alt="" style="height: 40px;">授業一覧</a>
                    </li>
                    <li  class="header_contact">
                        <a href="#contact"><img src="img/contact.png" alt="" style="height: 40px;">お問い合わせ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">管理者画面</div>
    </div>
  </nav>
</header>

<p><?php echo $_SESSION["name"]; ?>さんこんにちは。</p>


<?php if($_SESSION["kanri_flg"]==1){?>
<a href="manager_list.php">管理者一覧</a><br><br>
<?php }?>

<a href="lessons.php">授業動画一覧</a><br><br>

<a href="logout.php">ログアウト</a><br><br>
</body>
</html>