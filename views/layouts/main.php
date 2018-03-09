<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 14/2/2018 AD 15:25
 */
use yii\helpers\Html;
use i8\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?=Html::csrfMetaTags()?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head()?>
    </head>
    <body>
        <?php $this->beginBody()?>
        <div class="container">
            <div class="content">
                <?=$content?>
            </div>
        </div>
        <?php $this->endBody()?>
    </body>
</html>
<?php $this->endPage()?>