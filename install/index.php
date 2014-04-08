<?php
if(file_exists("../glob/admin/config.php")){
	die('您似乎已经安装过此程序！请删除install文件夹！');
	}
function CHECKCHMOD($path){
	$a=substr(sprintf('%o', fileperms($path)), -4);
	if($a!=777){
		echo '<tr><td>'.$path.'</td><td style="color:red;">× 请修改</td></tr>';
		}
	else{
		echo '<tr><td>'.$path.'</td><td style="color:green;">√</td></tr>';
		}
	}
$basepath=str_replace('\\','/',substr(dirname(__FILE__),0,-8));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>FFS5</title>
<link type="text/css" href="style.css" rel="stylesheet" />
<script type="text/javascript" src="../glob/admin/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="install.js"></script>
</head>

<body>
<div id="container">
  <div id="header">
    <h1 class="logo"><a href="index.html" title="FFS5"><img src="../logo.gif" alt="FFS5" title="FFS5" /></a></h1>
  </div>
  <div id="content">
    <div class="content_box">
      <div class="content_box_inner">
        <div class="contentmain">
          <p style="text-align:center;"><strong>FFS 最终版(Final)授权协议</strong></p>
          <div class="agreement">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;感谢您选择  快速文件分享系统（以下简称FFS）。FFS是一款基于PHP+多重数据库的先进的网络文件存储分享系统，通过本系统，用户可以将资料在线上传到您的系统中，独创的文件分享码模式，轻松分享每一个文件。更有丰富多彩的文件应用提升文件的价值。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFS Dev 为FFS 产品的开发商，依法独立拥有FFS 版权。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用FFS 软件。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本授权协议适用于 FFS 的所有产品，FPS88.com 拥有对本授权协议的最终解释权。<br />
            <strong>I. 协议许可的权利</strong><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. 您可以在完全遵守本最终用户授权协议的基础上，将本软件应用任何用途(包括个人用户：不具备法人资格的自然人)。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 您可以在协议规定的约束和限制范围内修改 FFS 源代码(如果被提供的话)或界面风格以适应您的网站要求。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. 您拥有使用本软件构建的系统中全部会员资料及相关信息的所有权，并独立承担与其内容的相关法律义务。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. FFS最终版完全免费提供给用户使用,但是不提供任何形式的技术支持,请您谅解.<br />
            <strong>II. 协议规定的约束和限制</strong><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. 。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. 禁止在 FFS 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。<br />
            <strong>III. 有限担保和免责声明</strong><br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. FFS Dev 不对使用本软件构建的网站中的信息承担责任，但在不侵犯用户隐私信息的前提下，保留以任何方式获取用户信息的权利。<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有关 FFS 通用授权协议、商业授权与技术服务的详细内容，均由 FFS 官方网站独家提供。 FFS Dev 拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。 电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 FFS ，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时， 受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。<br />
          </div>
          <p style="text-align:center;"><a href="javascript:;" class="goto round_btn" />同意协议</a></p>
        </div>
        <div class="contentmain">
          <p style="text-align:center;"><strong>目录权限检查（以下目录需要0777权限）</strong></p>
          <div class="agreement">
          <table width="99%" border="1" >
  <tr>
    <td><strong>目录</strong></td>
    <td><strong>可读写</strong></td>
  </tr>
	<?php
    CHECKCHMOD($basepath);
	CHECKCHMOD($basepath.'/session');
	CHECKCHMOD($basepath.'/system');
	CHECKCHMOD($basepath.'/system/file');
	CHECKCHMOD($basepath.'/glob/admin');
	CHECKCHMOD($basepath.'/glob/admin/email');
	CHECKCHMOD($basepath.'/app/index');
	CHECKCHMOD($basepath.'/app/file');
	CHECKCHMOD($basepath.'/app/file/sync');
	CHECKCHMOD($basepath.'/app/upload');
	?>
</table>

          </div>
          <p style="text-align:center;"><a href="javascript:;" class="goto round_btn" />下一步</a></p>
        </div>
        <div class="contentmain">
          <p>让我们来进行下一步，请确保app、glob、数据目录可写。<a href="http://bbs.fps88.com/forum.php?mod=viewthread&tid=557" target="_blank">Linux权限请点这里</a></p>
          <form action="install.php" method="post">
            <p>
              <label for="username">用户名</label>
              <input type="text" name="username" value="admin" disabled="disabled" />
              <span>后台管理账号</span></p>
            <p>
              <label for="password">管理密码</label>
              <input type="password" name="password" class="password"  />
              <span>后台管理密码</span></p>
            <p><a href="javascript:;" class="goto round_btn" onclick="install();" />提交</a></p>
          </form>
        </div>
        <div class="contentmain">
          <p>恭喜你，程序已经成功安装！注：请务必修改数据目录。</p>
          <p class="chose">请选择：<a href="../index.php">查看前台</a> <a href="../admin.php">登录后台修改设置</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <p>Copyright © 2009 - 2011 FFS. All Rights Reserved.</p>
    <p> Powered by Fast File System</p>
  </div>
</div>
</body>
</html>
