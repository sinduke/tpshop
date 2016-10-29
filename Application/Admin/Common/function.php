<?php
function weixinError($errcode){
	$data=array("-1"=>"系统繁忙，此时请开发者稍候再试","0"=>"请求成功","40001"=>"获取access_token时AppSecret错误，或者access_token无效。请开发者认真比对AppSecret的正确性，或查看是否正在为恰当的公众号调用接口","40002"=>"不合法的凭证类型","40003"=>"不合法的OpenID，请开发者确认OpenID（该用户）是否已关注公众号，或是否是其他公众号的OpenID","40004"=>"不合法的媒体文件类型","40005"=>"不合法的文件类型","40006"=>"不合法的文件大小","40007"=>"不合法的媒体文件id","40008"=>"不合法的消息类型","40009"=>"不合法的图片文件大小","40010"=>"不合法的语音文件大小","40011"=>"不合法的视频文件大小","40012"=>"不合法的缩略图文件大小","40013"=>"不合法的AppID，请开发者检查AppID的正确性，避免异常字符，注意大小写","40014"=>"不合法的access_token，请开发者认真比对access_token的有效性（如是否过期），或查看是否正在为恰当的公众号调用接口","40015"=>"不合法的菜单类型","40016"=>"不合法的按钮个数","40017"=>"不合法的按钮个数","40018"=>"不合法的按钮名字长度","40019"=>"不合法的按钮KEY长度","40020"=>"不合法的按钮URL长度","40021"=>"不合法的菜单版本号","40022"=>"不合法的子菜单级数","40023"=>"不合法的子菜单按钮个数","40024"=>"不合法的子菜单按钮类型","40025"=>"不合法的子菜单按钮名字长度","40026"=>"不合法的子菜单按钮KEY长度","40027"=>"不合法的子菜单按钮URL长度","40028"=>"不合法的自定义菜单使用用户","40029"=>"不合法的oauth_code","40030"=>"不合法的refresh_token","40031"=>"不合法的openid列表","40032"=>"不合法的openid列表长度","40033"=>"不合法的请求字符，不能包含\uxxxx格式的字符","40035"=>"不合法的参数","40038"=>"不合法的请求格式","40039"=>"不合法的URL长度","40050"=>"不合法的分组id","40051"=>"分组名字不合法","40117"=>"分组名字不合法","40118"=>"media_id大小不合法","40119"=>"button类型错误","40120"=>"button类型错误","40121"=>"不合法的media_id类型","40132"=>"微信号不合法","40137"=>"不支持的图片格式","41001"=>"缺少access_token参数","41002"=>"缺少appid参数","41003"=>"缺少refresh_token参数","41004"=>"缺少secret参数","41005"=>"缺少多媒体文件数据","41006"=>"缺少media_id参数","41007"=>"缺少子菜单数据","41008"=>"缺少oauth code","41009"=>"缺少openid","42001"=>"access_token超时，请检查access_token的有效期，请参考基础支持-获取access_token中，对access_token的详细机制说明","42002"=>"refresh_token超时","42003"=>"oauth_code超时","43001"=>"需要GET请求","43002"=>"需要POST请求","43003"=>"需要HTTPS请求","43004"=>"需要接收者关注","43005"=>"需要好友关系","44001"=>"多媒体文件为空","44002"=>"POST的数据包为空","44003"=>"图文消息内容为空","44004"=>"文本消息内容为空","45001"=>"多媒体文件大小超过限制","45002"=>"消息内容超过限制","45003"=>"标题字段超过限制","45004"=>"描述字段超过限制","45005"=>"链接字段超过限制","45006"=>"图片链接字段超过限制","45007"=>"语音播放时间超过限制","45008"=>"图文消息超过限制","45009"=>"接口调用超过限制","45010"=>"创建菜单个数超过限制","45015"=>"回复时间超过限制","45016"=>"系统分组，不允许修改","45017"=>"分组名字过长","45018"=>"分组数量超过上限","46001"=>"不存在媒体数据","46002"=>"不存在的菜单版本","46003"=>"不存在的菜单数据","46004"=>"不存在的用户","47001"=>"解析JSON/XML内容错误","48001"=>"api功能未授权，请确认公众号已获得该接口，可以在公众平台官网-开发者中心页中查看接口权限","50001"=>"用户未授权该api","50002"=>"用户受限，可能是违规后接口被封禁","61451"=>"参数错误(invalid parameter)","61452"=>"无效客服账号(invalid kf_account)","61453"=>"客服帐号已存在(kf_account exsited)","61454"=>"客服帐号名长度超过限制(仅允许10个英文字符，不包括@及@后的公众号的微信号)(invalid kf_acount length)","61455"=>"客服帐号名包含非法字符(仅允许英文+数字)(illegal character in kf_account)","61456"=>"客服帐号个数超过限制(10个客服账号)(kf_account count exceeded)","61457"=>"无效头像文件类型(invalid file type)","61450"=>"系统错误(system error)","61500"=>"日期格式错误","61501"=>"日期范围错误","9001001"=>"POST数据参数不合法","9001002"=>"远端服务不可用","9001003"=>"Ticket不合法","9001004"=>"获取摇周边用户信息失败","9001005"=>"获取商户信息失败","9001006"=>"获取OpenID失败","9001007"=>"上传文件缺失","9001008"=>"上传素材的文件类型不合法","9001009"=>"上传素材的文件尺寸不合法","9001010"=>"上传失败","9001020"=>"帐号不合法","9001021"=>"已有设备激活率低于50%，不能新增设备","9001022"=>"设备申请数不合法，必须为大于0的数字","9001023"=>"已存在审核中的设备ID申请","9001024"=>"一次查询设备ID数量不能超过50","9001025"=>"设备ID不合法","9001026"=>"页面ID不合法","9001027"=>"页面参数不合法","9001028"=>"一次删除页面ID数量不能超过10","9001029"=>"页面已应用在设备中，请先解除应用关系再删除","9001030"=>"一次查询页面ID数量不能超过50","9001031"=>"时间区间不合法","9001032"=>"保存设备与页面的绑定关系参数错误","9001033"=>"门店ID不合法","9001034"=>"设备备注信息过长","9001035"=>"设备申请参数不合法","9001036"=>"查询起始值begin不合法");
	return $data[$errcode];
}

function msgtype($type){
	$data=array("image"=>"图片","mpnews"=>"图文","text"=>"文字","voice"=>"语音","mpvideo"=>"视频","wxcard"=>"卡卷","video"=>"视频");
	return $data[$type];
}


//保存图文消息图片
function mediaGetUrl($media_id){
	$token = session("token");
	if($token){
		$auth = new \Com\WechatAuth(C('WX_APPID'), C('WX_APPSECRET'), $token);
	} else {
		$auth  = new \Com\WechatAuth(C('WX_APPID'), C('WX_APPSECRET'));
		$token = $auth->getAccessToken();

		session(array('expire' => $token['expires_in']));
		session("token", $token['access_token']);
	}
	$media = $auth->mediaGet($media_id);
	$return=json_decode( $media, true);
	if($return["errcode"] == 42001  || $return['errcode'] == 40001){
		session("token", null);
		mediaGetUrl($media_id);
		return false;
	}
	$path='./Picture/Weixin/'.uniqid().'.jpg';
	Think\Storage::put($path,$media);
	return $path;
}

function imgMedia($media_id,$data=''){
	return dataF('MEDIA_DATA',$media_id,$data);
}

function msgData($msg_id,$data=''){
	return dataF('MSG_DATA',$msg_id,$data);
}

function getImgMedia($media_id){
	$media=imgMedia($media_id);
	if(!$media){
		$path=substr(mediaGetUrl($media_id), 1);
		imgMedia($media_id,array('path'=>$path,'url'=>''));
	}else{
		if(strpos($media['path'], './') !== false){
			$media['path']=substr($media['path'], 1);
		}
		$path=$media['url']?$media['url']:$media['path'];
	}
	return $path;
}

function dataF($name,$media_id,$data=''){
	$mediaData = F($name);
	if($data){
		if(!$mediaData) $mediaData=array();
		$data=array($media_id=>$data);
		$imgdata=array_merge($mediaData,$data);
		F($name,$imgdata);
	}else if(strtolower($data)=="del"){
		unset($mediaData[$media_id]);
		F($name,$mediaData);
	}else{
		return $mediaData[$media_id];
	}
}

function keyarray($item){
	foreach($item['content']['news_item'] as $k=>$list){
		$data[$k]['Title']=$list['title'];
		$data[$k]['Description']=msubstr(strip_tags($list['content']),0,30);
		$data[$k]['PicUrl']=getImgMedia($list['thumb_media_id']);
		$data[$k]['Url']=$list['url'];
	}
	return htmlspecialchars(addslashes(json_encode($data)));
}

 // 分析枚举类型配置值 格式 a:名称1,b:名称2
function parse_config_attr($string) {
    $array = preg_split('/[,;\r\n]+/', trim($string, ",;\r\n"));
    if(strpos($string,':')){
        $value  =   array();
        foreach ($array as $val) {
            list($k, $v) = explode(':', $val);
            $value[$k]   = $v;
        }
    }else{
        $value  =   $array;
    }
    return $value;
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}

function get_category($type) {
    switch ($type){
        case 1  : return    '公告';     break;
        case 2  : return    '帮助';     break;
        default : return    false;      break;
    }
}

function get_union_type($type) {
    switch ($type){
        case 1  : return    '网站对接';     break;
        case 2  : return    'Ucenter对接';     break;
        default : return    false;      break;
    }
}

function get_state($type) {
    switch ($type){
        case 0  : return    '进行';     break;
        case 1  : return    '开奖';     break;
		case 2  : return    '结束';     break;
        default : return    false;      break;
    }
}

function pay_recharge($type) {
    switch ($type){
        case 0  : return    '购买';     break;
        case 1  : return    '充值';     break;
        default : return    false;      break;
    }
}

function pay_state($type) {
    switch ($type){
        case 1  : return    '余额';     break;
        case 2  : return    '微信';     break;
		case 3  : return    '支付宝';     break;
		case 4  : return    '网银';     break;
		case 5  : return    '云支付';     break;
		case 6  : return    'PAYPAL';     break;
        default : return    false;      break;
    }
}

function user_record($id){
	$info=M('shop_record')->where('uid='.$id)->sum('number');
	return $info;
}
function user_period($id){
	$info=M('shop_period')->where('uid='.$id)->count('id');
	return $info;
}
function user_pay($id){
	$info=M('shop_order')->where('type>1 and uid='.$id)->sum('number');
	return $info;
}
function user_activity($id){
	$info=M('activity_log')->where('user_id='.$id)->sum('price');
	return $info;
}

/**
 * 获取活动类型
 * @param intger $type 类型
 * @param bool $all 是否返回全部类型
 */
function get_activity_type($type, $all = false){
    $list = array(
		1=>'用户注册',
        2=>'用户登陆',
        3=>'用户访问',
		4=>'用户投注',
		5=>'用户充值',
		6=>'用户晒单',
		7=>'用户分享',
		8=>'用户中奖',
		9=>'手动运行',
    );
    if($all){
        return $list;
    }
    return $list[$type];
}

// 获取数据的状态操作
function show_status_op($status) {
    switch ($status){
        case 0  : return    '启用';     break;
        case 1  : return    '禁用';     break;
        default : return    false;      break;
    }
}

function random($length, $chars = '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ') {
	$hash = '';
	$max = strlen($chars) - 1;
	for($i = 0; $i < $length; $i++) {
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}
?>