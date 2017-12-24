<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container-fluid">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/"><img src="web/public/images/logo.jpg" alt="Миниблог обо всем"></a>
            </div>
                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Главная</a></li>
                        <?php if(Yii::$app->user->isGuest):?>
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="<?= Url::toRoute(['auth/login'])?>">Вход</a></li>
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a></li>
                        <?php else: ?>
                    <li><?= Html::beginForm(['/auth/logout'], 'post') . Html::submitButton(
                            'Выход (' . Yii::$app->user->identity->name . ')',
                            ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px; 
                                                                        position: relative;
                                                                        display: block;
                                                                        padding: 20px;
                                                                        text-decoration: none;
                                                                        letter-spacing: 1px;"]
                        ) . Html::endForm() ?></li>
                        <?php endif;?>
                </ul>
        </div>
    </div>
</nav>

<?= $content ?>

<footer class="footer-widget-section">
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"><?= '&#169;' . ' ' . date('Y') .' Все права защищены';?></div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<div ID = "toTop" > ^ Наверх </div>
</body>
</html>
<?php $this->endPage() ?>
