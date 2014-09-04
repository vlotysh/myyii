<?php
/**
 * @var $cs CClientScript
 * @var string $content
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8" />
	<meta name="language" content="ru" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="" name="description">
	<meta content="" name="author">

	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<!-- font Awesome 
	<link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
	<!-- Ionicons
	<link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
	<!-- Theme style
	<link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" /> -->
	<title><?= CHtml::encode($this->pageTitle); ?></title>
	<?php
		/*Yii::app()->clientScript->registerCoreScript(Yii::app()->theme->baseUrl.'/js/jquery');
		Yii::app()->clientScript->registerCoreScript(Yii::app()->theme->baseUrl.'/js/jquery.ui');
*/
		Yii::app()->clientScript->registerCSSFile('/css/styles.css');
		Yii::app()->clientScript->registerScriptFile('/js/scripts.js');
	?>

	        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

       <!-- <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap.min.js" type="text/javascript"></script>
  
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/AdminLTE/app.js" type="text/javascript"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/AdminLTE/demo.js" type="text/javascript"></script>-->
</head>
<body>
<?= $content ?>
</body>
</html>