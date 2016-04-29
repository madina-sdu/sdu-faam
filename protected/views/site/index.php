<!-- Start of Carousel Gallery above main-menu -->
<!-- <div class="container__ornek"></div> -->

<div class="well__index">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="css/images/carousel/img1.jpg" alt="One"></div>
    <div class="item"><img src="css/images/carousel/img2.jpg" alt="Two"></div>
    <div class="item"><img src="css/images/carousel/img3.jpg" alt="Three"></div>
    <div class="item"><img src="css/images/carousel/img4.jpg" alt="Four"></div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <spanaria-hidden="true"></span>
  </a>  

</div>


<hr class="divider">
  <p class="header__title">Department of Foreign Affairs and Academic Mobility</p>
    <hr class="divider">
  
    <?php foreach ($news as $item): ?>
      <div class="col-md-4">
        <div class="thumbnail news-block__item" >
          <img src="<?=$item->img_path?>" width="350px" height="250px" padding="10px 10px">
          <div class="caption">
            <h3 class="index__title"><a href="/news/<?=$item->url_path?>"><?=$item->title?></a></h3>
            <p><?=$item->introText?> ...</p>
            <p><a href="/news/<?=$item->url_path?>" class="btn btn-primary" role="button">Read more</a> </p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  

  <div class="index__divider"></div>


</div>