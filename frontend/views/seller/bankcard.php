<div class="container-fluid main-container">
    <?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid profile-wrapper">
	<div class="location">
		您的位置：<a href="/" class="active">控制台</a><a href="javascript:void(0);">绑定银行卡</a>
	</div>

	<div class="page-header clearfix">
		<h1 class="pull-left">
			<i class="fa fa-credit-card fa-fw"></i> 绑定银行卡
		</h1>
                <a class="btn btn-default" href="/seller/Addbankcard">添加银行卡</a>
            </div>

	<div
		class="alert  alert-info">
		<p>
                    <strong>备注：</strong>每个商户最多只能添加三张银行卡，用于提现！
          </p>
	</div>
	<div class="table-responsive">
		<table class="table goodlist-table">
			<thead>
				<tr class="active">
				    <th width="60">编号</th>
				    <th>银行卡号</th>
                    <th width="150">银行名称</th>
					<th width="150">开户城市</th>
					<th width="150">开户行</th>
					<th width="150">开户名</th>
					<th width="180">添加时间</th>
					<th width="100"></th>
				</tr>
			</thead>
			<tbody>
			
                    <tr>
            <td colspan="8">您暂时没有添加相应银行卡！</td>
          </tr>
                  </tbody>
		</table>
	</div>
</div></div>