<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<script src="/js/carousel.js"></script>
	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="header">
	<a href="/"><div id="logoSdu"><img src="/css/images/logo_white.png" style="width: 90px; height: 60px; margin: 40px 70px;"></div></a>
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		    <input type="text" class="tftextinput" placeholder="Search from this site" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
		<div class="tfclear"></div>
	</div>

	<div class="lang_option">		
		<img src="images/kazakh_flag.png" alt="Kazakh Flag" style="width: 22px; height: 13px;">
		<span class="lang-option__line">|</span>
		<img src="images/gb_flag.png" alt="Gb Flag" style="width: 21px; height: 18px;">
		<span class="lang-option__line">|</span>
		<img src="images/russian_flag.png" alt="Rus Flag" style="width: 22px; height: 18px;">
	</div>
</div>

<div id="mainmenu">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array(
				'label'=>'Home', 'url'=>'/',
				'itemOptions' => array('class'=>'main-menu__item'),
				'active' => ($this->menuActive == 'home'),
			),
			array(
				'label'=>'Discover', 'url'=>array('/about'),
				'linkOptions' => array('class' => 'js-menu-item-disabled'),
				'itemOptions' => array('class'=>'main-menu__item'),
				'active' => ($this->menuActive == 'about'),
				'items'=>array(
					array(
						'label'=>'Almaty city', 
						'url'=>array('/almaty'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'About SDU', 
						'url'=>array('/sdu'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>"Rector's speech", 
						'url'=>array('/about'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'VISA', 
						'url'=>array('/site/page', 'view'=>'summer-school'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
				),
			),
			array(
				'label'=>'News', 'url'=>array('/news'),
				'itemOptions' => array('class'=>'main-menu__item'),
				'active' => ($this->menuActive == 'news'),
			),
			array(
				'label'=>'Programs', 'url'=>array('/site/undergraduate'),
				'linkOptions' => array('class' => 'js-menu-item-disabled'),
				'itemOptions' => array('class'=>'main-menu__item'),
				'items'=>array(
					array(
						'label'=>'Undergraduate', 
						'url'=>array('/site/undergraduate'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'Graduate', 
						'url'=>array('/site/page', 'view'=>'graduate'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'Academic staff', 
						'url'=>array('/site/academ-staff'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'Summer School', 
						'url'=>array('/site/page', 'view'=>'summer-school'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
				),
			),
			array(
				'label'=>'People', 'url'=>array('/site/people'),
				'linkOptions' => array('class' => 'js-menu-item-disabled'),
				'itemOptions' => array('class'=>'main-menu__item'),
				'items'=>array(
					array(
						'label'=>'Alumni', 
						'url'=>array('/alumni'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
					array(
						'label'=>'Staff', 
						'url'=>array('/site/staff'),
						'itemOptions' => array('class'=>'dropdown-item'),
					),
				),
			),
			array(
				'label'=>'FAQ', 'url'=>array('/site/faq'),
				'itemOptions' => array('class'=>'main-menu__item'),
			),
			array(
				'label'=>'Contacts', 'url'=>array('site/contact'),
				'itemOptions' => array('class'=>'main-menu__item'),
			),
			// array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			// array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
		'htmlOptions' => array(
			'class'=>'main-menu__container',
		),
		'submenuHtmlOptions' => array(
            'class' => 'dropdown-content',
        )

	)); ?>
</div>

<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>

	<div class="content">
		<?php echo $content; ?>
	</div>
</div>

<?php $this->renderPartial('//layouts/footer'); ?>

</body>
</html>
