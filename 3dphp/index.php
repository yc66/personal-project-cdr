<?php 
  define('IN_TG',true);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>	
	<link type="text/css" rel="stylesheet" href="style/basic.css">
	<link type="text/css" rel="stylesheet" href="style/index.css">
	<link rel="shortcut icon" href="images/favico.ico">
	<meta charset="UTF-8">
<title>index</title>
</head>
<body>
	<!-- header -->
	<?php 
	 require dirname(__FILE__).'/includes/header.inc.php';
	?>
	<!-- content -->
	<div id="content">
		<!-- top -->
		<div id="content_top">
			<div class="top_left">
				<div class="ck-slide">
					<ul class="ck-slide-wrapper">
						<li>
							<a href="javascript:"><img src="images/banner.jpg" alt=""></a>
						</li>
						<li style="display:none">
							<a href="javascript:"><img src="images/banner.jpg" alt=""></a>
						</li>
						<li style="display:none">
							<a href="javascript:"><img src="images/banner.jpg" alt=""></a>
						</li>
						<li style="display:none">
							<a href="javascript:"><img src="images/banner.jpg" alt=""></a>
						</li>
						<li style="display:none">
							<a href="javascript:"><img src="images/banner.jpg" alt=""></a>
						</li>
					</ul>
				<a href="javascript:;" class="ctrl-slide ck-prev">上一张</a> <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
				<div class="ck-slidebox">
					<div class="slideWrap">
						<ul class="dot-wrap">
							<li class="current"><em>1</em></li>
							<li><em>2</em></li>
							<li><em>3</em></li>
							<li><em>4</em></li>
							<li><em>5</em></li>
						</ul>
					</div>
				</div>
			</div>
			</div>
			<div class="top_right">
				<ul>
					<li class="top">
						<span class="mark"></span>
						<a href="#"><strong>我</strong> /要3D打印</a>
						<img src="images/r_1.png" alt="鸭子">
					</li>
					<li class="center">
						<span class="mark_left"></span>
						<a href="#" class="left"><strong>我</strong> /要设计</a>
						<img src="images/r_1.png" alt="鸭子" class="left">
					</li>
					<li class="top">
						<span class="mark"></span>
						<a href="#"><strong>3D打印</strong> /是什么?</a>
						<img src="images/r_1.png" alt="鸭子">
					</li>
				</ul>
			</div>
		</div>
		<!-- top -->
		<!-- super -->
		<div id="super">
			<div class="main_top">
				<span class="left_border"></span>
				<span class="right_border"></span>
				<p class="big">3D打印优势</p>
				<p class="small">Advantage of 3D printing</p>
			</div>
			<dl>
				<dd><img src="images/s_1.gif"></dd>
				<dt><a href="#">周期短</a></dt>
				<dd class="title"><a href="#">生产周期短，随时可以按需求打印。</a></dd>
			</dl>
			<dl>
				<dd><img src="images/s_2.gif"></dd>
				<dt><a href="#">成本低</a></dt>
				<dd class="title"><a href="#">降低生产成本，制造复杂物品无需增加成本。</a></dd>
			</dl>
			<dl>
				<dd><img src="images/s_3.gif" /></dd>
				<dt><a href="#">空间无限</a></dt>
				<dd class="title"><a href="#">突破物品形状上的制作需求，满足个性化需求。</a></dd>
			</dl>
			<dl>
				<dd><img src="images/s_1.gif" /></dd>
				<dt><a href="#">精准度高</a></dt>
				<dd class="title"><a href="#">非常准确地复制规模精细的，设计元素和错综复杂的细节。</a></dd>
			</dl>
			<dl>
				<dd><img src="images/s_5.gif" /></dd>
				<dt><a href="#">操作简单</a></dt>
				<dd class="title"><a href="#">无需另行组装，部件一体化完成。</a></dd>
			</dl>
			<dl>
				<dd><img src="images/s_1.gif" /></dd>
				<dt><a href="#">材料无限组合</a></dt>
				<dd class="title"><a href="#">不同材料混合在一起，可以形成色调种类繁多，具有独特属性和功能的新材料。</a></dd>
			</dl>
		</div>
		<!-- super -->	
		<!-- develop -->
		<div id="develop">
			<div class="main_top">
				<span class="left_border"></span>
				<span class="right_border"></span>
				<p class="big">唯识开发中心</p>
				<p class="small">The main object and development center</p>
				<div id="logo">
					<img src="images/logo.png" />
				</div>
			</div>
			<div id="d_left">
				<div class="lightblue basic" id="first_b">
					<h1><a href="javascript:;">关于3D打印</a></h1>
					<p><a href="javascript:;">About 3D</a></p>
					<p><a href="javascript:;">printing</a></p>
				</div>
				<div class="pink basic" id="first_c" onClick="">
					<h1><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;合作团队</a></h1>
					<p><a href="javascript:;">Cooperation</a></p>
					<p><a href="javascript:;">&nbsp;team</a></p>
				</div>
				<div class="blue basic" id="first_eeeeee">
					<h1><a href="javascript:;">原材料介绍</a></h1>
					<p><a href="javascript:;">&nbsp;&nbsp;Material</a></p>
					<p class="p1"><a href="javascript:;">&nbsp;&nbsp;Introduction</a></p>
				</div>
				<div class="Darkgrey basic" id="first_h">
					<h1><a href="javascript:;">全球化服务</a></h1>
					<p><a href="javascript:;">The globaliza</a></p>
					<p class="p1"><a href="javascript:;">tionservice</a></p>
				</div>
				<div class="grey basic" id="first_hhhhhh">
					<h1><a href="javascript:;">实验室服务</a></h1>
					<p class="p1"><a href="javascript:;">Laboratory</a></p>
					<p class="p1"><a href="javascript:;">services</a></p>
				</div>
			</div>

			<div id="d_right">
				<img src="images/d_2.jpg" alt="服务">
				<div id="server">
					<p class="p0"><a href="#">3D打印（3DP)即快速成型技术的一种，它是一种以数字模型文件为基础，运用粉末状金属或塑料等可粘合材料，通过逐层打印的方式来构造物体的技术。</a></p>
					<p class="p1"><a href="#">3D打印技术出现在20世纪90年代中期，实际上是利用光固化和纸层叠等技术的最新快速成型装置。它与普通打印工作原理基本相同，打印机内装有液体或粉末等“打印材料”，与电脑连接后，通过电脑控制把“打印材料”一层层叠加起来，最终把计算机上的蓝图变成实物。这打印技术称为3D打印汽车Urbee3D打印汽车Urbee3D立体打印技术。</a></p>
				</div>
			</div>
      <div id="d_right_1">
				<img src="images/d_1.jpg" alt="服务">
				<div id="server">
					<p class="p0"><a href="#">唯识创梦科技有限公司是一家专业经营与3d打印相关项目的科技公司，主要经营业务有3D打印培训教育推广培训，教育培训主要分为青少年培训教育和成人桌面级教育，培训到位、体系化课程。</a></p>
					<p class="p1"><a href="#">团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍团队介绍</a></p>
				</div>
			</div>
      <div id="d_right_2">
				<img src="images/d_5.jpg" alt="服务">
				<div id="server">
					<p class="p0"><a href="#">3D打印技术是一种通过计算机控制，可以打印从鞋子到珠宝、枪支和航空航天部件的生产方法。其基本规则是用一种堆叠累积的制造技术，不像加工、车削、铣削和锯切是将不要的部分切除掉，保留需要的部分。</a></p>
					<p class="p1"><a href="#">所使用材料有：ABS/PLA（卷材），光明树脂液体，尼龙粉末，金属粉末，陶瓷粉末，石膏粉末等材料。</a></p>
				</div>
      </div>
		  <div id="d_right_3">
				<img src="images/d_1.jpg" alt="服务">
				<div id="server">
					<p class="p0"><a href="#">个性化定制频道能够满足消费者各种智慧创造的需求3d打印设备主要经营杭州先临公司和上海铭展打印机，这两家生产厂家的机器功能全面、加工稳定性强、成型外形表现好。</a></p>
					<p class="p1"><a href="#">加工服务频道依托中国3D打印技术研究院，有强力技术及各种功能性工业级3D打印机支持，实现各种商业化加工服务要求。</a></p>
				</div>
			</div>
			<div id="d_right_4">
				<img src="images/d_2.jpg" alt="服务">
				<div id="server">
					<p class="p0"><a href="#">个性化定制频道能够满足消费者各种智慧创造的需求3d打印设备主要经营杭州先临公司和上海铭展打印机，这两家生产厂家的机器功能全面、加工稳定性强、成型外形表现好。</a></p>
					<p class="p1"><a href="#">加工服务频道依托中国3D打印技术研究院，有强力技术及各种功能性工业级3D打印机支持，实现各种商业化加工服务要求。</a></p>		
				</div>
			</div>
		</div>
		<!-- develop   -->	
		<!-- example  -->
		<div id="example">
			<div class="main_top">
				<span class="left_border"></span>
				<span class="right_border"></span>
				<p class="big">3D打印样品案列</p>
				<p class="small">3D printing sample case</p>
			</div>
			<p class="p0">唯识3D打印服务案例展示，我们提供最优质的产品和最专业的服务，我们的模型是您最佳的选择</p>
			<div id="top">
				<ul>
					<li class="bg first_e" id="first"><a href="javascript:;">建筑案例</a></li>
					<li id="first_w"><a href="javascript:;">工业案例</a></li>
					<li id="first_e"><a href="javascript:;">医疗案例</a></li>
					<li id="first_u"><a href="javascript:;">设计案例</a></li>
				</ul>
			</div>
			<div id="produce">
				<dl>
					<dd><img src="images/p_6.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_3.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_4.jpg" alt="产品	1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_5.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl class="d_c">
					<dd><img src="images/p_16.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
			</div>
		
			<div id="produce_1">
				<dl>
					<dd><img src="images/p_6.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_7.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_12.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_9.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl class="d_c">
					<dd><img src="images/p_10.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
			</div>
			<div id="produce_2">
				<dl>
					<dd><img src="images/p_11.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p title="，目前克隆人一直被认为是一种禁忌，通过这种技术来复制人类，是危险的，应该被杜绝。不过目前却出现一种另类的“克隆人”技术，就是3D打印克隆技术。巴西博士研究生豪尔赫·洛佩斯首创的利用一种称为快速成型技术，将超声波、和磁共振成像扫描成真人大小的石膏模型，在孩子未出生时，父母可以看到并“克隆”一个真人大小的未出生婴儿的模型。">“克隆”是一项生物技术，简单的可以理解为“复制”，不过这项技术备受争议，尤其是将其应用在“克隆人”方面...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_12.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p title="日前，在日本太平洋横滨国际会展中心举行的“MEDTEC JAPAN 2012”上，以色列的欧贝杰(Objet Geometries)公司在日本的销售代理商FASOTEC，介绍了2012年4月刚刚开始在日本提供的“医疗工程服务”。这是一项根据图像诊断设备拍摄的图像数据来制作逼真三维人体模型的服务，主要面向想利用三维人体模型实施模拟手术及培训的医疗机构。该服务是FASOTEC与神户大学研究生院医学研究科共同开发的业务。三维人体模型利用欧贝杰的三维打印机来制作。特点是可混合两种材料进行造型，只要其中一种材料选用透明材料，便能制成可从外部确认人体内部骨骼及肿瘤等的模型。另外，使用各种硬度不同的材料，还可再现不同人体部位的不同触感。">日前，在日本太平洋横滨国际会展中心举行的“MEDTEC JAPAN 2012”上。</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_13.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_14.png" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl class="d_c">
					<dd><img src="images/p_15.jpg" alt="产品1"></dd>
					<dt><a href="#">3D打印作品</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
			</div>
			<div id="produce_3">
				<dl>
					<dd><img src="images/p_11.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_9.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_12.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl>
					<dd><img src="images/p_13.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
				<dl class="d_c">
					<dd><img src="images/p_16.jpg" alt="产品1"></dd>
					<dt><a href="#">3D</a></dt>
					<dd><a href="#"><p>建筑设计作品中往往包含许多奢华而复杂的几何形状。追求个性和时尚的你是否曾经想过将这...</p></a></dd>
					<div id="more">
						<a href="#"><div id="moree"></div></a>
					</div>
				</dl>
			</div>

		</div>
		<!-- example  -->		
		<!-- school -->
		<div id="school">
			<div class="main_top">
				<span class="left_border"></span>
				<span class="right_border"></span>
				<p class="big">3D打印视频教程</p>
				<p class="small">3D printing video tutorial</p>
			</div>
			<div id="course">
				<h1>在线教程</h1>
				<dl>
					<dt><a href="#">在唯识，您只需要上传您的3D设计，您将得到</a></dt>
					<dd><a href="#">20多种材料的即时报价，金属、塑料、陶瓷。</a></dd>
					<dd><a href="#">20多种3D文件格式支撑，STL、OBJ、STP、IGS等。</a></dd>
					<dd><a href="#">自动检测、自动修复、自动转化、自助下单。</a></dd>
					<dd><a href="#">专业的3D设计建议。</a></dd>
				</dl>
			</div>
			<div id="video">
				<img src="images/video.png" alt="视频"></img>
			</div>
		</div>
		<!-- school -->
	</div>
	<!-- footer -->
	<?php 
	 require dirname(__FILE__).'/includes/footer.inc.php';
	?>
	<script type="text/javascript" src="js/basic.js"></script>
	

	<!-- public -->
	<script type="text/javascript" src="js/public_h.js" ></script>
	<script type="text/javascript" src="js/public_h2.js" ></script>
		<script type="text/javascript">
			$.nicenav(260);
		</script>
	<!-- public -->
    
	<!-- adv -->
	<script src="js/jquery-1.8.3.min.js"></script>
	<!--<script src="js/slide.min.js"></script>-->
    <script src="js/slide.js"></script>
	<script>
		$('.ck-slide').ckSlide({
			autoPlay: true,
			dir: 'x',
			interval:3000
			
		});
	</script>
	<!-- adv -->
</body>
</html>