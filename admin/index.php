<?php
session_start ();

if (!empty ($_SESSION['admin'])){
    if ($_SESSION['admin']){?>
    <!doctype html>
    <html>
    <head>
        <title>Административная панель</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/layout.css">
        <link rel="stylesheet" href="/css/components.css">
        <link rel="stylesheet" href="/css/pages.css">

    </head>
    <body>
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                   <a class='btn btn-lg  btn-default btn-colored' href="../?action=edit">Перейти к административной панели</a>

                </div>
            </div>
        </div>
    </section>


    </body>
    </html>
    <?exit;
}}
$_SESSION['admin'] = false;
include ('config.php');
function not_logged_in (){
    echo '<html>
<head>
<title>Административная панель</title>
    <meta charset="utf-8">
     <link rel="stylesheet" href="../css/vendor.css">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/layout.css">
        <link rel="stylesheet" href="../css/components.css">
        <link rel="stylesheet" href="../css/pages.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
</head>
<body>
<section class="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
<form class="form-horizontal" role="form" action=index.php method=post>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="Логин">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Войти</button>
    </div>
  </div>
</form>

</div>
</div>
</div>
</section>



</body>
</html>';
    exit;
}
if (!$_POST) not_logged_in ();
if (!$_POST['login']) not_logged_in ();
if (!$_POST['password']) not_logged_in ();
if ($_POST['login']!= $adminlogin) not_logged_in ();
if ($_POST['password']!= $adminpassw) not_logged_in ();
$_SESSION['admin'] = true;
?>
<html>
<head>
    <title>Административная панель</title>
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<table cellpadding=0 cellspacing=0 id=wrap><tr><td align=center>
            <table cellpadding=0 cellspacing=0><tr><td class=loginbox1 align=center>Вход выполнен</td>
                </tr>
                <tr>
                    <td class=loginbox2 align=center>
                        <a href=../edit.php>Перейти к административной панели</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>