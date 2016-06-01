<div class="container-fluid main-container">
	<?= $this->render('/layouts/menu'); ?>
	<div class="container-fluid">
    <div class="location">
    	您的位置：<a href="/">控制台</a><a href="/msg/index">信息中心</a><a href="javascript:void(0);" class="active">信息列表</a>
    </div>
    <div class="page-header clearfix">
        <h1 class="pull-left"><i class="fa fa-file-text-o fa-fw"></i> 信息列表</h1>
    </div>
    <div class="text-left">
	    <div class="btn-group btn-group-sm">
	      <a href="/msg/index" class="btn btn-primary active">全部信息</a>
	      <a href="/msg/index?is_read=0" class="btn btn-default">未读信息 </a>
	      <a href="/msg/index?is_read=1" class="btn btn-default">已读信息</a>
		</div>
    </div>
    <div class="alert alert-info" style="margin: 10px 0 0 0;">
        <div><strong>现在普通消息，您可以在消息详情里面进行回复了！</strong></div>
        <p>我们的工作人员在工作时间就可以收到，并处理您的回复.</p>
    </div>
	<div class="table-responsive">
        <form class="msg-list-form  msg_show" >
      <table class="table datalist-table">
       <thead>
        <tr class="active">
            <th colspan="2"></th>
       			<th>标题</th>
       			<th width="200">关联商品</th>
       			<th width="150">来自</th>
       			<th width="80">类型</th>
       			<th width="100">是否阅读</th>
       			<th width="100">未读回复</th>
                <th width="150">时间</th>
                <th width="100"></th>
            </tr>
          </thead>
        <tbody>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="378119"></div>
                </td>
            <td class="color-777"><small>1</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=378119&url=%2Fmsg%2Findex">上架</a></small></td>
            <td><small><a href="/good/edit?goods_id=29515&url=%2Fmsg%2Findex">复古LED煤油灯</a></small></td>
            <td class="color-777"><small>[渠道]金雪英</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-08 14:57:12</small></td>
            <td><a href="/msg/view?id=378119&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="378106"></div>
                </td>
            <td class="color-777"><small>2</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=378106&url=%2Fmsg%2Findex">上架</a></small></td>
            <td><small><a href="/good/edit?goods_id=29739&url=%2Fmsg%2Findex">极速金属随身U盘16G</a></small></td>
            <td class="color-777"><small>[渠道]金雪英</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-08 14:53:56</small></td>
            <td><a href="/msg/view?id=378106&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="370256"></div>
                </td>
            <td class="color-777"><small>3</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=370256&url=%2Fmsg%2Findex">4月11号—17号秒杀报名成功表单</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[策划]肖梅</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-08 13:57:56</small></td>
            <td><a href="/msg/view?id=370256&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="366351"></div>
                </td>
            <td class="color-777"><small>4</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=366351&url=%2Fmsg%2Findex">您的商户账号被增加了0.5积分</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[策划]张霞霞</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-07 16:41:03</small></td>
            <td><a href="/msg/view?id=366351&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="359041"></div>
                </td>
            <td class="color-777"><small>5</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=359041&url=%2Fmsg%2Findex">审核未通过</a></small></td>
            <td><small><a href="/good/edit?goods_id=36974&url=%2Fmsg%2Findex">多功能 懒人手机支架 </a></small></td>
            <td class="color-777"><small>[渠道]金雪英</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 16:55:34</small></td>
            <td><a href="/msg/view?id=359041&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="358957"></div>
                </td>
            <td class="color-777"><small>6</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=358957&url=%2Fmsg%2Findex">余</a></small></td>
            <td><small><a href="/good/edit?goods_id=29339&url=%2Fmsg%2Findex">超级防爆手机钢化膜 9H硬度+ 安装神器  傻瓜贴膜工具</a></small></td>
            <td class="color-777"><small>[渠道部]余春晓</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 16:27:31</small></td>
            <td><a href="/msg/view?id=358957&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="354666"></div>
                </td>
            <td class="color-777"><small>7</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=354666&url=%2Fmsg%2Findex">商户商品质量和服务水平大检查活动</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[渠道部]王刘琳</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 14:36:20</small></td>
            <td><a href="/msg/view?id=354666&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="345183"></div>
                </td>
            <td class="color-777"><small>8</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=345183&url=%2Fmsg%2Findex">秒杀活动报名表单</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[策划]肖梅</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 11:53:48</small></td>
            <td><a href="/msg/view?id=345183&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="336070"></div>
                </td>
            <td class="color-777"><small>9</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=336070&url=%2Fmsg%2Findex">请重新申请</a></small></td>
            <td><small><a href="/good/edit?goods_id=36974&url=%2Fmsg%2Findex">多功能 懒人手机支架 </a></small></td>
            <td class="color-777"><small>[渠道部]郑丽</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 10:48:03</small></td>
            <td><a href="/msg/view?id=336070&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="336071"></div>
                </td>
            <td class="color-777"><small>10</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=336071&url=%2Fmsg%2Findex">请重新申请</a></small></td>
            <td><small><a href="/good/edit?goods_id=36959&url=%2Fmsg%2Findex">胡椒器花椒研磨器2只装</a></small></td>
            <td class="color-777"><small>[渠道部]郑丽</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-04-01 10:48:03</small></td>
            <td><a href="/msg/view?id=336071&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="326272"></div>
                </td>
            <td class="color-777"><small>11</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=326272&url=%2Fmsg%2Findex">专区报名成功表单</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[策划]肖梅</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-03-30 20:07:17</small></td>
            <td><a href="/msg/view?id=326272&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="315154"></div>
                </td>
            <td class="color-777"><small>12</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=315154&url=%2Fmsg%2Findex">专题报名通过商品清单</a></small></td>
            <td><small></small></td>
            <td class="color-777"><small>[策划]肖梅</small></td>
            
            <td class="color-777"><small>系统消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-03-30 20:03:50</small></td>
            <td><a href="/msg/view?id=315154&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="308239"></div>
                </td>
            <td class="color-777"><small>13</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=308239&url=%2Fmsg%2Findex">请重新申请</a></small></td>
            <td><small><a href="/good/edit?goods_id=29742&url=%2Fmsg%2Findex">高速内TF存卡8G</a></small></td>
            <td class="color-777"><small>[渠道部]郑丽</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-03-30 14:03:16</small></td>
            <td><a href="/msg/view?id=308239&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="308221"></div>
                </td>
            <td class="color-777"><small>14</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=308221&url=%2Fmsg%2Findex">重新申请</a></small></td>
            <td><small><a href="/good/edit?goods_id=29516&url=%2Fmsg%2Findex">3只装创意USB小灯泡</a></small></td>
            <td class="color-777"><small>[渠道部]郑丽</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-03-30 14:00:01</small></td>
            <td><a href="/msg/view?id=308221&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                      <tr>
                <td width="35">
                    <div class="checkbox"><label><input type="checkbox" name="id[]" value="303258"></div>
                </td>
            <td class="color-777"><small>15</small></td>
            <td class="color-777"><small>            <a href="/msg/view?id=303258&url=%2Fmsg%2Findex">上架</a></small></td>
            <td><small><a href="/good/edit?goods_id=56127&url=%2Fmsg%2Findex">32GB极速u盘</a></small></td>
            <td class="color-777"><small>[渠道]金雪英</small></td>
            
            <td class="color-777"><small>普通消息</small></td>
            <td class="color-888"><small>已读</small></td>
            <td class="color-888"><small>0</small></td>
            <td class="color-888"><small>2016-03-28 15:18:30</small></td>
            <td><a href="/msg/view?id=303258&url=%2Fmsg%2Findex" class="btn btn-link btn-sm"><i class="fa fa-share"></i> 查看详情</a></td>
            </tr>
                              
        </tbody>
      </table>
        <div class="clearfix form-inline">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="checkall"> 全选
                </label>
            </div>
            <div class="form-group">
                <select class=" input-sm">
                        <option>全部标记为已读</option>

                </select>
            </div>
            <input type="hidden" name="url" value="/msg/index">
                <button type="submit" id = "read_submit" class="btn btn-default btn-sm">提交</button>
        </div>
            </form>
    </div>
	<div class="text-center">
	   <ul class="pagination pagination-sm"><li class="disabled"><a href="/msg/index?p=1">First</a></li><li class="disabled"><a href="/msg/index?p=0">Prev</a></li><li class="active"><a href="/msg/index?p=1">1</a></li><li><a href="/msg/index?p=2">2</a></li><li><a href="/msg/index?p=3">3</a></li><li><a href="/msg/index?p=4">4</a></li><li><a href="/msg/index?p=2">Next</a></li><li><a href="/msg/index?p=4">Last</a></li></ul>	</div>

    <script>
        jQuery('.msg_show').bind('submit', function(e)
        {
            e.preventDefault();
            e.stopPropagation();

           // alert(jQuery('.msg-list-form').serialize());
           //console.log('/msg/ChangeRead?'+jQuery(this).serialize());
            jQuery.ajax({
                type: 'POST',
                url: '/msg/ChangeRead',
                dataType: 'json',
                data: jQuery('.msg-list-form').serialize(),
                error:function(){},
                success:function(regData)
                {
                    //console.log(regData);
                    jQuery('.msg-list-form tbody').find('input[type=checkbox]:checked').each(function(){
                        jQuery(this).parents('tr').find('td').eq(2).find('strong').removeClass('need-read');
                        jQuery(this).parents('tr').find('td').eq(6).find('small').text('已读');
                    });


                }
            });
        });

    </script>
</div></div>