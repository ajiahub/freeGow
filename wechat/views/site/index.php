<?php
use kop\y2sp\ScrollPager;
use yii\widgets\ListView;
use yii\helpers\Url;
?>
<link rel="stylesheet" href="/static/css/home-index.css?time=1461929032" type="text/css">
<script src="/static/js/home-index.js?time=1461929032"></script>
<body class="body-home-index">
<div class="fakeloader"></div>
<a id="top" name="top"></a>
<header class="home-header">
    <div class="container">
        <div class="home-header-wrapper">
            <a href="/?token=eyJ0Z19pZCI6MjY5MTc1MTB9" class="header-logo"><img
                    src="/static/images/static/logo.png" alt="天天零元购官网"></a>

            <form action="/search/index?token=eyJ0Z19pZCI6MjY5MTc1MTB9">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="key"
                           placeholder="搜索您喜欢的..."> <span class="input-group-btn">
						<button class="btn btn-default color-999" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
					</span>
                </div>
            </form>
        </div>
    </div>
</header>
<div class="container">
    <div id="home-banner" class="focusSlide">
        <div class="indicators">
            <ul>
            </ul>
        </div>
        <div class="items">
            <ul>
                <li><a
                        href="#"><img
                            src="/static/images/static/1.jpg"
                            alt="反季大清仓" border="0"/></a></li>
                <li style="display: none;"><a
                        href="#"><img
                            src="/static/images/static/2.jpg"
                            alt="扎堆节" border="0"/></a></li>
                <li style="display: none;"><a
                        href="#"><img
                            src="/static/images/static/3.jpg"
                            alt="快乐大转盘" border="0"/></a></li>
            </ul>
        </div>
    </div>
    <div class="home-category">
        <ul class="categorys-list">
            <li><a
                    href="<?= Url::to(['/category/']) ?>"
                    title="全部0元"><img
                        src="/static/images/banner1.jpg"/></a>
                <p>全部零元</p></li>
            <li><a
                    href="<?= Url::to(['/category/']) ?>"
                    title="精品区"><img
                        src="/static/images/banner2.jpg"/></a>

                <p>精品专区</p></li>
            <li><a href="<?= Url::to(['/category/']) ?>" title="新品区"><img
                        src="/static/images/banner3.jpg"/></a>

                <p>新品专区</p></li>
            <li><a href="<?= Url::to(['/category/']) ?>"
                   title="一元秒杀"><img
                        src="/static/images/banner4.jpg"/></a>

                <p>一元秒杀</p></li>
            <li><a href="<?= Url::to(['/user/']) ?>" title="个人中心"><img
                        src="/static/images/banner5.jpg"/></a>

                <p>个人中心</p></li>
        </ul>

    </div>
    <div class="clearfix home-topnews">
        <a href="#">
            <h3><img src="/static/images/jctj.png"></h3>
        </a>
        <ul class="list-unstyled">
            <li><a href="#"
                   class="text-overflow"> · 我能想到最悲伤的事，就是你在度假我在加班 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 零购限时特卖惠已经上线，全场一折起 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 说走就走，其实并没有说的那么容易 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 这个五一，请带着这个故事看风景 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 五一来了，零妹妹是该发点福利了 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 第二批0元砍价洗衣机发货名单公布，请零友们注意物流 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 4·25—5·1秒杀周详情公布 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 因为有你，不再孤独 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 2000台洗衣机已经砍完，第一批已发货名单公布 </a></li>
            <li><a href="#"
                   class="text-overflow"> · 五一出行，零妹妹又发新福利 </a></li>
        </ul>
    </div>
    <div class="home-pros">
        <div class="row pros-list">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="home-pro home-pro-left focusSlide">
                    <div class="indicators">
                        <ul>
                        </ul>
                    </div>
                    <div class="items">
                        <ul>
                            <li><a
                                    href="<?= Url::to(['/category/']) ?>"><img
                                        src="/static/images/static/tj1.jpg"
                                        alt="限时特卖惠" border="0"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="home-pro home-pro-1 focusSlide">
                    <div class="indicators">
                        <ul>
                        </ul>
                    </div>
                    <div class="items">
                        <ul>
                            <li><a
                                    href="<?= Url::to(['/category/']) ?>"><img
                                        src="/static/images/static/tj2.jpg"
                                        alt="限时特卖惠" border="0"/></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-pro home-pro-2 focusSlide">
                    <div class="indicators">
                        <ul>
                        </ul>
                    </div>
                    <div class="items">
                        <ul>
                            <li><a
                                    href="<?= Url::to(['/category/']) ?>"><img
                                        src="/static/images/static/tj3.jpg"
                                        alt="五一出游季" border="0"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default home-categories">
        <div class="panel-heading clearfix" style="border-color: #f5f5f5;">
            <h3 class="panel-title pull-left">
                零元福利
                <small>FREE TO SEND</small>
            </h3>
            <a href="<?= Url::to(['/category/']) ?>" class="all-categories pull-right">全部 <i
                    class="fa fa-angle-right"></i></a>
        </div>
        <div class="category-wrapper">
            <div class="row categories-list list-unstyled">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>春装</strong>
                            <small>服装鞋饰</small>
                            <img
                                src="/static/images/static/001.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>生活</strong>
                            <small>家居日用</small>
                            <img
                                src="/static/images/static/002.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>数码</strong>
                            <small>办公数码</small>
                            <img
                                src="/static/images/static/003.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>亲子</strong>
                            <small>母婴食品</small>
                            <img
                                src="/static/images/static/004.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>配饰</strong>
                            <small>珠宝配饰</small>
                            <img
                                src="/static/images/static/005.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>女人馆</strong>
                            <small>内衣家居</small>
                            <img
                                src="/static/images/static/006.jpg"></a>
                    </div>
                </div>
            </div>
            <a href="<?= Url::to(['/category/']) ?>"
               class="btn btn-default btn-md btn-block more-categories">查看更多
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </div>
    <div class="panel panel-default home-categories" id="recommend" name="recommend">
        <div class="panel-heading clearfix" style="border-color: #f5f5f5;">
            <h3 class="panel-title pull-left">
                精品专区
                <small>HOT PROMOTE</small>
            </h3>
            <a href="<?= Url::to(['/category/']) ?>#" class="all-categories pull-right">全部 <i
                    class="fa fa-angle-right"></i></a>
        </div>
        <div class="category-wrapper">
            <div class="row categories-list list-unstyled">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>潮服</strong>
                            <small>服装鞋饰</small>
                            <img
                                src="/static/images/static/101.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>图影</strong>
                            <small>图书音像</small>
                            <img
                                src="/static/images/static/102.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>小宝贝</strong>
                            <small>孕婴童</small>
                            <img
                                src="/static/images/static/103.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>3C类</strong>
                            <small>办公数码</small>
                            <img
                                src="/static/images/static/104.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>居家</strong>
                            <small>家纺百货</small>
                            <img
                                src="/static/images/static/105.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="categories-item">
                        <a href="<?= Url::to(['/category/']) ?>"> <strong>品质</strong>
                            <small>家居日用</small>
                            <img
                                src="/static/images/static/106.jpg"></a>
                    </div>
                </div>
            </div>
            <a href="<?= Url::to(['/category/']) ?>"
               class="btn btn-default btn-md btn-block more-categories">查看更多
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </div>
    <div class="home-goods">
        <div class="page-header">
            <h3><i class="fa fa-heart color-f30"></i> 首页推荐</h3>
        </div>
		<!-- 产品列表 -->
        <div class="rows good-lists clearfix masonry-container">
			<?= ListView::widget([
				'dataProvider' => $dataProvider,
				'itemOptions' => ['class' => 'item'],
				'itemView' => '/goods/_goods_list',
				'layout' => '{items}{pager}',
				'emptyText' => '暂时没有产品',
				'pager' => [
					'class' => ScrollPager::className(),
					'triggerOffset' => 9999,
					'spinnerTemplate' => $this->render('//layouts/loading'),
				]
			])?>
        </div>
    </div>
</div>
<div class="tg-userinfo">
    <div class="container">
        <div class="media">
            <div class="media-left">
                <a href="javascript:void(0);"><img class="media-object"
                                                   src="http://p5.0gow.com/icon0gow_5708bf88115d2?imageMogr2/thumbnail/64x/strip/quality/80/format/jpg"
                                                   alt="hello world"></a>
            </div>
            <div class="media-body">
                <p class="text-overflow">来自hello world的分享</p>
            </div>
        </div>
        <a href="javascript:void(0);" class="close-userinfo">关闭/隐藏</a>
    </div>
</div>
<div class="userId hide">26917510</div>
<div class="userBind hide">
    <div class="container bind">
        <div class="bind clearfix">
            <div class="bind-l pull-left">
                <a href="javascript:void(0);"> <img class="media-object"
                                                    src="http://p5.0gow.com/icon0gow_5708bf88115d2?imageMogr2/thumbnail/64x/strip/quality/80/format/jpg"
                                                    alt="hello world">
                </a>
            </div>
            <div class="bind-center pull-left">
                <p class="text-center">
                    零妹妹提醒您：<br/>您还有没有绑定手机号哦!
                </p>
            </div>
            <div class="bind-right pull-right">
                <a href="#"
                   class="bindBtn btn btn-default btn-xs" role="button">立即绑定</a>
            </div>
        </div>
        <a href="javascript:void(0);" class="close-userinfo bind-phone">关闭/隐藏</a>
    </div>
</div>
</body>