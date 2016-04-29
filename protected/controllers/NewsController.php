<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('News', array(
		    'criteria'=>array(
		        // 'condition'=>'status=1',
		        'order'=>'create_time DESC',
		        // 'with'=>array('author'),
		    ),
		    'countCriteria'=>array(
		        // 'condition'=>'status=1',
		        // 'order' and 'with' clauses have no meaning for the count query
		    ),
		    'pagination'=>array(
		        'pageSize'=>News::PAGE_SIZE
		    ),
		));
		$this->menuActive = 'news';
		$this->render('index', array('dataProvider'=> $dataProvider));
	}
	
	public function actionView($urlkey)
	{
		$news = News::model()->findByAttributes(array('url_path' => $urlkey));
		if (!$news) {
			throw new CHttpException(404,'Указанная запись не найдена');	
		}
		$this->render('view', array('news' => $news));


	}
}