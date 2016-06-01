<?php
$this->registerCssFile('@web/static/css/goods-common.css');
$this->registerCssFile('@web/static/css/goods-comment.css');
?>
<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<div class="container-fluid">
   <div class="page-header site-page-header">
    <h3><i class="fa fa-comment"></i> 商品评论列表 </h3>
   </div>
    <div class="text-left">
		 <form class="form-inline filter-form" action="/goods/comments" method="get">
            <input type="text" class="form-control input-sm" name="name" style="width: 100px;" placeholder="用户昵称"
             value="">
             
            <input type="text" class="form-control input-sm" name="uid" style="width: 80px;" placeholder="用户uid"
             value="">
        	       		            <input type="text" class="form-control input-sm" name="startTime" style="width: 90px;" placeholder="开始时间"
             value="2016-04-03 00:00:00" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
       
            <input type="text" class="form-control input-sm" name="endTime" style="width: 90px;" placeholder="结束时间"
             value="2016-04-10 23:59:59" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        <input type="text" class="form-control input-sm" name="key" style="width: 120px;" placeholder="关键词"
             value="">
            
            <select class="form-control input-sm" name="rate">
				<option value="">全部评论</option>
                <option value="1" >好评</option>
                <option value="0" >中评</option>
                <option value="-1" >差评</option>
            </select>
            <input type="hidden" name="r" value="good/comments">
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
    </div>
    <div class="alert alert-info" style="margin: 12px 0 0 0;">您可以在这里查看和回复客户对商品的评论…，及时回复客户的评论有助于销量提升！</div>
    <div class="table-responsive">
        <table class="table table-bordered datalist-table">
        <thead>
        <tr class="active">
          <th colspan="3">评论内容</th>
          <th colspan="2">商品信息</th>
        </tr>
      </thead>
      <tbody>
                <tr>
          <td width="50"><small>939216</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5704f5faf3b07?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             ^O^   稍  ♥逊  ╭ 
              <label class="label label-default rate-label rate-default">差评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604079a9b006499e4" target="_blank">201604079a9b006499e4</a>】</small>
            </div>
            <small class="color-999">2016-04-10 11:43:42</small>
	        <p class="clearfix color-444">什么鸟东西     根本读不出来，建议大家都不要买了</p>
	        	        	        <ul class="list-unstyled comment-replys clearfix">
	            	               <li class="color-666" id="comment-939259">
	               <div class="clearfix">
	                   <small class="pull-right color-999">3 小时前</small>
	                   [追加评论]    	                <label class="label label-default rate-label rate-default">差评</label>	               </div>
	               <p class="color-666">
    	               骗人      再也不相信了    	               	               </p>
	                               	</li>
	            	               <li class="color-666" id="comment-939928">
	               <div class="clearfix">
	                   <small class="pull-right color-999">2 小时前</small>
	                   <strong class="color-333">卖家</strong>回复:    	               	               </div>
	               <p class="color-666">
    	               亲 请问能详细说明吗？我们的产品每一个都是经过检查才发货的，是不可能会出现这
样的原因的，请再换台电脑试试。    	                                         <a onclick="toggleComment('939928');" class="btn btn-danger btn-xs">隐藏</a>
    	               	               </p>
	                               	</li>
	            	        </ul>
	        	        <div id="comment-939216">
              <a onclick="replyComment('939216');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>938910</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56ea7688061a7?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             月色－华哥 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016032704429bcfdb8f" target="_blank">2016032704429bcfdb8f</a>】</small>
            </div>
            <small class="color-999">2016-04-10 11:11:06</small>
	        <p class="clearfix color-444">值得，下次再买</p>
	        	        	        <div id="comment-938910">
              <a onclick="replyComment('938910');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>937575</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56ee89ae4deca?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             赵生盛 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160403e355e3873121" target="_blank">20160403e355e3873121</a>】</small>
            </div>
            <small class="color-999">2016-04-10 08:48:15</small>
	        <p class="clearfix color-444">物有所值，值</p>
	        	        	        <div id="comment-937575">
              <a onclick="replyComment('937575');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>936229</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_57035cfc014e1?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             A志强 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040501a56f2eec6a" target="_blank">2016040501a56f2eec6a</a>】</small>
            </div>
            <small class="color-999">2016-04-09 23:30:44</small>
	        <p class="clearfix color-444">非常好用，快递很快</p>
	        	        	        <div id="comment-936229">
              <a onclick="replyComment('936229');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>935658</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56f39c1397410?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             松金雨厚 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604063deabceff004" target="_blank">201604063deabceff004</a>】</small>
            </div>
            <small class="color-999">2016-04-09 22:24:57</small>
	        <p class="clearfix color-444">好，不过外壳有点花！</p>
	        	        	        <div id="comment-935658">
              <a onclick="replyComment('935658');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>935256</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_57031223ea526?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             云枫 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160405026264ba487a" target="_blank">20160405026264ba487a</a>】</small>
            </div>
            <small class="color-999">2016-04-09 21:38:58</small>
	        <p class="clearfix color-444">挺好了，不错。</p>
	        	        	        <div id="comment-935256">
              <a onclick="replyComment('935256');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>934674</small></td>
          <td width="64"><img src="http://p2.0gow.com/" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
              玉儿 
                          <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040366763f42b23b" target="_blank">2016040366763f42b23b</a>】</small>
            </div>
            <small class="color-999">2016-04-09 20:37:09</small>
	        <p class="clearfix color-444">好好好好好好</p>
	        	        	        <div id="comment-934674">
              <a onclick="replyComment('934674');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>934272</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5703c5930df7c?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             湖北罗田――林喜洋 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040511e19f8dc050" target="_blank">2016040511e19f8dc050</a>】</small>
            </div>
            <small class="color-999">2016-04-09 19:46:00</small>
	        <p class="clearfix color-444">货己收到，我还没试，试后再追加评论。</p>
	        	        	        <div id="comment-934272">
              <a onclick="replyComment('934272');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>933258</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56cee7b805e02?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             海军 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604049c08d19166f9" target="_blank">201604049c08d19166f9</a>】</small>
            </div>
            <small class="color-999">2016-04-09 18:04:06</small>
	        <p class="clearfix color-444">非常感谢店家！</p>
	        	        	        <div id="comment-933258">
              <a onclick="replyComment('933258');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>933081</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5704ff23d99b7?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             波波 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604066d9f0020ad13" target="_blank">201604066d9f0020ad13</a>】</small>
            </div>
            <small class="color-999">2016-04-09 17:47:28</small>
	        <p class="clearfix color-444">好好好好好</p>
	        	        	        <ul class="list-unstyled comment-replys clearfix">
	            	               <li class="color-666" id="comment-933949">
	               <div class="clearfix">
	                   <small class="pull-right color-999">1 天前</small>
	                   [追加评论]    	                <label class="label label-success rate-label rate-danger">好评</label>	               </div>
	               <p class="color-666">
    	               不错，好评，赞    	               	               </p>
	                               	</li>
	            	        </ul>
	        	        <div id="comment-933081">
              <a onclick="replyComment('933081');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>928879</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_56ff9966a08b0?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             wait alone 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160402ba4d6bd587a5" target="_blank">20160402ba4d6bd587a5</a>】</small>
            </div>
            <small class="color-999">2016-04-09 12:06:01</small>
	        <p class="clearfix color-444">很好，很实惠</p>
	        	        	        <div id="comment-928879">
              <a onclick="replyComment('928879');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>928822</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56f1f24d0b57a?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             杨阳 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160403ec4efcb518ac" target="_blank">20160403ec4efcb518ac</a>】</small>
            </div>
            <small class="color-999">2016-04-09 11:59:37</small>
	        <p class="clearfix color-444">还没有用，</p>
	        	        	        <div id="comment-928822">
              <a onclick="replyComment('928822');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>927660</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5703d0e50cdfb?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             志耀龙 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160405f38d5575e87a" target="_blank">20160405f38d5575e87a</a>】</small>
            </div>
            <small class="color-999">2016-04-09 10:29:59</small>
	        <p class="clearfix color-444">很赞！很实用。</p>
	        	        	        <div id="comment-927660">
              <a onclick="replyComment('927660');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>926455</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56ea519d04efe?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             蒲荣 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201603173a569b6ac949" target="_blank">201603173a569b6ac949</a>】</small>
            </div>
            <small class="color-999">2016-04-09 07:48:51</small>
	        <p class="clearfix color-444">还是可以的</p>
	        	        	        <div id="comment-926455">
              <a onclick="replyComment('926455');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>925652</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56f1cd20ea05b?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             天涯咫尺 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040389a17e75a4dd" target="_blank">2016040389a17e75a4dd</a>】</small>
            </div>
            <small class="color-999">2016-04-09 00:42:47</small>
	        <p class="clearfix color-444">真的不错 好产品给大家分享</p>
	        	        	        <div id="comment-925652">
              <a onclick="replyComment('925652');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56e589e36538a?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>32GB极速u盘</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>925583</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_56ffb3a1ed602?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             junz 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040484f807f3ec5e" target="_blank">2016040484f807f3ec5e</a>】</small>
            </div>
            <small class="color-999">2016-04-09 00:27:49</small>
	        <p class="clearfix color-444">还不错，挺漂亮</p>
	        	        	        <div id="comment-925583">
              <a onclick="replyComment('925583');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>925269</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56e248b69d194?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             沈杰 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160406c51440278cb5" target="_blank">20160406c51440278cb5</a>】</small>
            </div>
            <small class="color-999">2016-04-08 23:34:55</small>
	        <p class="clearfix color-444">还不错！点赞！</p>
	        	        	        <ul class="list-unstyled comment-replys clearfix">
	            	               <li class="color-666" id="comment-925284">
	               <div class="clearfix">
	                   <small class="pull-right color-999">2 天前</small>
	                   [追加评论]    	                <label class="label label-success rate-label rate-danger">好评</label>	               </div>
	               <p class="color-666">
    	               质量不错！点赞！    	               	               </p>
	                               	</li>
	            	        </ul>
	        	        <div id="comment-925269">
              <a onclick="replyComment('925269');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>924183</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56a345314103f?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             呼和 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604023d1fb1ed0038" target="_blank">201604023d1fb1ed0038</a>】</small>
            </div>
            <small class="color-999">2016-04-08 21:54:39</small>
	        <p class="clearfix color-444">好，太好了</p>
	        	        	        <div id="comment-924183">
              <a onclick="replyComment('924183');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>923994</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_57005fc7f2e2c?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             瑞雪尤雪梅 
              <label class="label label-default rate-label rate-default">差评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160404c4a049c85c5b" target="_blank">20160404c4a049c85c5b</a>】</small>
            </div>
            <small class="color-999">2016-04-08 21:38:03</small>
	        <p class="clearfix color-444">货收到了，不错，</p>
	        	        	        <div id="comment-923994">
              <a onclick="replyComment('923994');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>923976</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56e3dcbc07ce9?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             王向民 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=201604032b13bbf3b21a" target="_blank">201604032b13bbf3b21a</a>】</small>
            </div>
            <small class="color-999">2016-04-08 21:36:28</small>
	        <p class="clearfix color-444">真好用，存储空间足</p>
	        	        	        <div id="comment-923976">
              <a onclick="replyComment('923976');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>923773</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_568fc14772720?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             怀 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160330a37c2672a877" target="_blank">20160330a37c2672a877</a>】</small>
            </div>
            <small class="color-999">2016-04-08 21:21:59</small>
	        <p class="clearfix color-444">蛮不错的哦</p>
	        	        	        <div id="comment-923773">
              <a onclick="replyComment('923773');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>922304</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56e14871f1a60?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             芸 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160404ca4d3e371e3a" target="_blank">20160404ca4d3e371e3a</a>】</small>
            </div>
            <small class="color-999">2016-04-08 19:26:06</small>
	        <p class="clearfix color-444">不错正品，很精巧！</p>
	        	        	        <div id="comment-922304">
              <a onclick="replyComment('922304');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>922185</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_569876c1d41be?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             会飞的鱼 
              <label class="label label-default rate-label rate-default">差评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160223eed59f00ebd0" target="_blank">20160223eed59f00ebd0</a>】</small>
            </div>
            <small class="color-999">2016-04-08 19:20:33</small>
	        <p class="clearfix color-444">不怎么样！用了几天就坏了</p>
	        	        	        <ul class="list-unstyled comment-replys clearfix">
	            	               <li class="color-666" id="comment-932640">
	               <div class="clearfix">
	                   <small class="pull-right color-999">1 天前</small>
	                   <strong class="color-333">卖家</strong>回复:    	               	               </div>
	               <p class="color-666">
    	               亲 请联系我们客服会给你一个满意的答复的qq：411397878    	                                         <a onclick="toggleComment('932640');" class="btn btn-danger btn-xs">隐藏</a>
    	               	               </p>
	                               	</li>
	            	        </ul>
	        	        <div id="comment-922185">
              <a onclick="replyComment('922185');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56c2e18b0ac38?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>922058</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56de4dbc1a953?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             曲涛 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160406c0ac9377bb4f" target="_blank">20160406c0ac9377bb4f</a>】</small>
            </div>
            <small class="color-999">2016-04-08 19:13:48</small>
	        <p class="clearfix color-444">以为是3.0，结果是2.0的，，，</p>
	        	        	        <div id="comment-922058">
              <a onclick="replyComment('922058');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>921818</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_56ac215156c27?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             小刀 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160405ed12a7a86742" target="_blank">20160405ed12a7a86742</a>】</small>
            </div>
            <small class="color-999">2016-04-08 19:00:32</small>
	        <p class="clearfix color-444">还可以，挺快</p>
	        	        	        <div id="comment-921818">
              <a onclick="replyComment('921818');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>921654</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56d64e0405db6?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             群群 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160404ae198851145d" target="_blank">20160404ae198851145d</a>】</small>
            </div>
            <small class="color-999">2016-04-08 18:48:53</small>
	        <p class="clearfix color-444">东西很好，来到就被同事给抢走了，我都没捞到摸摸</p>
	        	        <p class="comment-pics">
	        	    	               	           <img src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57078c70f1c2e?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="100" />
    	            />
        	    	               	           <img src="http://7xp28h.com1.z0.glb.clouddn.com/comment0gow_57078c62dc960?imageMogr2/thumbnail/160x/strip/quality/70/format/jpg" height="100" />
    	            />
        		        </div>
	        	        	        <div id="comment-921654">
              <a onclick="replyComment('921654');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>921492</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5701ae4c03f8f?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             海韵 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040467d64525325d" target="_blank">2016040467d64525325d</a>】</small>
            </div>
            <small class="color-999">2016-04-08 18:39:29</small>
	        <p class="clearfix color-444">不错，性价比高，喜欢</p>
	        	        	        <div id="comment-921492">
              <a onclick="replyComment('921492');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>920660</small></td>
          <td width="64"><img src="http://p5.0gow.com/icon0gow_5704a84e089bc?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             碗红曲 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=2016040640585f41a6b8" target="_blank">2016040640585f41a6b8</a>】</small>
            </div>
            <small class="color-999">2016-04-08 17:56:50</small>
	        <p class="clearfix color-444">话不多说。东西真心不错</p>
	        	        	        <div id="comment-920660">
              <a onclick="replyComment('920660');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>920584</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56e2d6c7d79cf?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             宝叔叔 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160403766249d4889b" target="_blank">20160403766249d4889b</a>】</small>
            </div>
            <small class="color-999">2016-04-08 17:54:15</small>
	        <p class="clearfix color-444">就是快递速度有点慢</p>
	        	        	        <div id="comment-920584">
              <a onclick="replyComment('920584');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                <tr>
          <td width="50"><small>920395</small></td>
          <td width="64"><img src="http://7xp9pg.com1.z0.glb.clouddn.com/icon0gow_56ee5b61068c5?imageMogr2/thumbnail/100x/strip/quality/80/format/jpg" width="64"></td>
          <td>
            <div class="color-777 comment-heading">
             G. 
              <label class="label label-success rate-label rate-danger">好评</label>             <small class="color-999">【订单号：<a href="/order/view?order_sn=20160405c4d573c60997" target="_blank">20160405c4d573c60997</a>】</small>
            </div>
            <small class="color-999">2016-04-08 17:47:27</small>
	        <p class="clearfix color-444">。。。。。</p>
	        	        	        <div id="comment-920395">
              <a onclick="replyComment('920395');" class="btn btn-success btn-sm">回复</a>
            </div>
          </td>
          <td width="48">
            <img src="http://p3.0gow.com/pic0gow_56da6bfd7140e?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg" width="48">
          </td>
          <td width="240">
            <small>极速金属时尚随身U盘16G</small>
          </td>
        </tr>
                      </tbody>
      </table>
    </div>
    <div class="text-center">
        <ul class="pagination pagination-sm"><li class="disabled"><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=1">First</a></li><li class="disabled"><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=0">Prev</a></li><li class="active"><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=1">1</a></li><li><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=2">2</a></li><li><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=3">3</a></li><li><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=2">Next</a></li><li><a href="/goods/comments?startTime=2016-04-03+00%3A00%3A00&endTime=2016-04-10+23%3A59%3A59&p=3">Last</a></li></ul>    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="replyModalLabel">回复评论</h4>
      </div>
      <form class="replyForm" method="post">
      <div class="modal-body">
          <div class="alert hide"></div>
          <div class="form-group">
            <ul class="list-unstyled comment-images clearfix">
            </ul>
          </div>
          <div class="form-group">
            <label>回复内容</label>
            <textarea class="form-control" name="body" rows="5" placeholder="回复内容">
            </textarea>
            <p class="help-block"></p>
          </div>
          <input type="hidden" name="comment_id" value="">
          <input type="hidden" name="reply_type" value="2">
          <input type="hidden" name="uid" value="0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">提交评论</button>
      </div>
      </form>
    </div>
  </div>
</div></div>
