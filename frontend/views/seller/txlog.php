<?php
$this->registerCssFile('@web/static/css/seller-txlog.css');
?>
<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid profile-wrapper">
	<div class="location">
		您的位置：<a href="/" class="active">控制台</a><a href="javascript:void(0);">提现流水</a>
	</div>

	<div class="page-header clearfix">
		<h1 class="pull-left">
			<i class="fa fa-history fa-fw"></i> 提现流水
		</h1>
    </div>

	<form class="form-inline" action="/seller/txlog" method="post">
    		<div class="form-group">
                <input type="text" class="form-control input-sm" name="tx_sn" placeholder="流水单号" value="">
            </div>
            <div class="form-group">
               <select name="state" class="form-control input-sm">
                    <option value="">提现状态</option>
                    <option value="0">提现失败</option>
                    <option value="1">提现成功</option>
               </select>
            </div>
            <button type="submit" class="btn btn-default btn-sm">提交</button>
    	</form>
    	
    	<div class="table-responsive">
	
      <table class="table table-bordered datalist-table">
       <thead>
        <tr class="active">
       			<th>流水单号</th>
       			<th width="80">金额</th>
       			<th width="200">用户</th>
       			<th width="100">IP</th>
                <th width="80">种类</th>
                <th width="80">状态</th>
                <th width="160">时间</th>
                <th width="300">备注</th>
            </tr>
          </thead>
        <tbody>
                      <tr>
            <td class="color-888"><small>tx_201604103d166c2bdff7</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>183.11.252.223</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-10 14:42:32</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_201604105249d82790be</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.130</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-10 14:42:14</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160410b702a47e2f37</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.129</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-10 14:42:02</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_201604109682e2225716</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.129</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-10 14:41:49</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160410e5d0c121e3c3</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.1</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-10 14:41:38</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160409a4eff4776310</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.133</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small>失败</small></td>
            <td class="color-888"><small>2016-04-09 12:12:26</small></td>
            <td class="color-888"><small>超过频率限制,请稍后再试</small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160409b21d38a61f42</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.132</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-09 12:12:25</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_201604091b73bfe132c6</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.130</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-09 12:12:12</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160409e3f86e4864fe</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.133</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-09 12:11:59</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_2016040987580391ea28</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.2</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-09 12:11:43</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160408a20ba526bc78</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.131</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-08 21:57:32</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_2016040882bb0bdc50bb</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.130</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small>失败</small></td>
            <td class="color-888"><small>2016-04-08 21:55:35</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160408803a5a37b830</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.131</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-08 21:55:23</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_2016040848d6e36b74e0</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.133</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-08 21:55:11</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_2016040896437ba4509b</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.129</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-08 21:54:55</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_201604085b6a2fb57cba</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.129</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small>失败</small></td>
            <td class="color-888"><small>2016-04-08 21:54:40</small></td>
            <td class="color-888"><small>超过频率限制,请稍后再试</small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_2016040815e62976addb</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.1</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-08 21:54:40</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_201604075ed63cc412f2</small></td>
            <td class="color-888"><small>4800.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>180.97.88.132</small></td>
            
            <td class="color-888"><small><font color="green">大额提现</font></small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-07 13:19:13</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160403019a21b69f03</small></td>
            <td class="color-888"><small>16000.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>120.55.177.27</small></td>
            
            <td class="color-888"><small><font color="green">大额提现</font></small></td>
            <td class="color-888"><small><font color="green">成功</font></small></td>
            <td class="color-888"><small>2016-04-03 15:23:43</small></td>
            <td class="color-888"><small></small></td>
            </tr>
                      <tr>
            <td class="color-888"><small>tx_20160403e2f67a8b9cf5</small></td>
            <td class="color-888"><small>200.00</small></td>
            <td class="color-888"><small>[wx1393172]苏静君</small></td>
            <td class="color-888"><small>117.136.40.224</small></td>
            
            <td class="color-888"><small>红包</small></td>
            <td class="color-888"><small>失败</small></td>
            <td class="color-888"><small>2016-04-03 07:38:47</small></td>
            <td class="color-888"><small>帐号余额不足，请到商户平台充值后再重试</small></td>
            </tr>
                              
        </tbody>
      </table>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/seller/txlog?p=1">First</a></li><li class="disabled"><a href="/seller/txlog?p=0">Prev</a></li><li class="active"><a href="/seller/txlog?p=1">1</a></li><li><a href="/seller/txlog?p=2">2</a></li><li><a href="/seller/txlog?p=3">3</a></li><li><a href="/seller/txlog?p=4">4</a></li><li><a href="/seller/txlog?p=5">5</a></li><li><a href="/seller/txlog?p=2">Next</a></li><li><a href="/seller/txlog?p=5">Last</a></li></ul>	</div>
</div></div>