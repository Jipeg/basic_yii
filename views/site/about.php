<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use bs\Flatpickr\Widget as flatpickr;
// use yii2\flatpickr;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'published_at')->widget(Flatpickr::className(), [
    'locale' => strtolower(substr(Yii::$app->language, 0, 2)),
    'options' => [
        'class' => 'form-control',
    ],
    'clientOptions' => [
        // config options https://chmln.github.io/flatpickr/options/
        'allowInput' => true,
        'defaultDate' => $model->published_at ? date(DATE_ATOM, $model->published_at) : null,
        'enableTime' => true,
        'time_24hr' => true,
    ],
    ]) ?>

    <?php $form = ActiveForm::end(); ?>
    <code><?= __FILE__ ?></code>
</div>
