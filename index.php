<?php

	ob_start();
	session_start();
	
	include 'dbh.php'; 							// This is database handler for the website						
	//I added database handler here because I need it to show the wesite's statistics and some other functionalities.
	include 'admin/init.php';					// initializing sources for most directories as refernce for the future changes
	include $tmpl.'head.php';					// Header contaisn all needed heading such as bootstreap, style.css, and other intitilization needed for the website
	include $tmpl.'navbar_top.php';				//the navbar at the top of every page.
	include $func.'functions.php';				//back-end functions that would be needed to perform some devoloping tasks.
	include $tmpl.'banner.php';					//it contains the main logo for the website and newsbar. it is used in the main page only. 
	include $func.'scroll-to-top.php';			// it contains scroll to the top button.

?>
<body class="main-index"> <!-- main-index refers to main/index page, index.php -->
	<header>
		<div class="first_page_carousel">
			<section class="container-fluid">
				<article class="row">
					 <!-- ==Carousel================================================== -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item item0 active">
								<div class="carousel-caption">
									<h2 class="wow bounceIn"><?php echo "$webName"; ?></h2>
									<h3 class="wow bounceInUp">
										لتصميم المواقع وحلول التقنية
									</h3><br>
									<h5 class="wow bounceInUp">
										تصميم وتطوير المواقع والتطبيقات بإحترافية عالية
									</h5>
								</div>
							</div>
							<div class="item item1">
								<div class="carousel-caption">
									<h2><?php echo "$webName"; ?></h2>
									<h3>لتصميم المواقع وحلول التقنية</h3>
									<br>
									<h5>تجسيد لأفضل الخبرات وأحدث التقنيات البرمجية</h5>
								</div>
							</div>
							<div class="item item2">
								<div class="carousel-caption">
									<h2><?php echo "$webName"; ?></h2>
									<h3>لتصميم المواقع وحلول التقنية</h3>
									<br>
									<h5>الأختيار الأفضل لتصميم أفضل</h5>
								</div>
							</div>
							<div class="item item3">
								<div class="carousel-caption">
									<h2><?php echo "$webName"; ?></h2>
									<h3>لتصميم المواقع وحلول التقنية</h3>
									<br>
									<h4 style="color: #333; text-align: center;">
										تصميم الموقع المميز انعكاس للنشاط المميز!!
									</h4>
								</div>
							</div>
							<div class="item item4">
								<div class="carousel-caption">
									<h2><?php echo "$webName"; ?></h2>
									<h3>لتصميم المواقع وحلول التقنية</h3>
									<br>
									<h4 style="color: #333; text-align: center;">
										أبهر عملائك بموقع مميز يناسب عملك المميز!!
									</h4>
								</div>
							</div>
						</div>
						<!--.control -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!-- /.control -->
					</div>
					<!-- /.carousel -->
				</article>
			</section>
		</div>
	</header>
	<main>
		<div class="container-fluid">
			<section class="row">
			<!-- decoration column 100px -->
				<article class="empty_col-100">
				</article>
			<!-- decoration column 100px -->
			</section>
		</div>
		<div class="shortcuts">
			<div class="container text-center">
				<div class="row">
					<div>
						<div class="col-xs-12">
							<h3>خريطة الموقع</h3>
							<p>للوصول السريع اضغط على القسم المطلوب</p>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a  class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#services">
									<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> خدماتنا
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#selling">
									<span class="glyphicon glyphicon-tags" aria-hidden="true"></span> الإمتياز
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#after_selling">
									<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> طرق العمل 
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#our-products">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span> المميزات
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#sales">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span> العروض
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<div class="shorcuts_area">
								<a class="btn btn-primary btn-lg btn-block shortcuts_btn" role="button" href="#our-work">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span> آخر الأعمال
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<section class="row">
				<article class="empty_col-100">
				
				</article>
			</section>
		</div>
		<div id="services" class="our_services">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="selling text-center">
							<h2><i class="fa fa-arrow-circle-left fa-fw" aria-hidden="true"></i> خدمات رواد ٣٦٠  </h2>
							<h5>نفخر بتقديم خدماتنا ذات الجودة العالية بأسعار تنافسية بما يناسب عملائنا كالتالي:</h5>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-4 col-xs-12 service_hosting wow bounceInRight">
										<i class="fa fa-database fa-3x fa-fw" aria-hidden="true"></i><h3> خدمات الإستضافة </h3>
										<div class="service_content">
											<p> - موقع رواد يقدم العديد من خدمات الإستضافة بما يناسب أهداف الموقع.</p>
										</div>
										<div class="service_content">
											<p> - تقديم أفضل خدمات الإستضافة عن طريق شراكة مع أكبر الشركات العالمية.</p>
										</div>
										<div class="service_content">
											<p> - توفير خدمات البريد الإلكتروني وربطها بالموقع لجميع العملاء مجاناً.</p>
										</div>
										<div class="service_content">
											<p> - يمكن للعميل الإختيار من بين مجموعة من الباقات بأسعار مناسبة ومنافسة.</p>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12 service_webs wow fadeInUp">
										<i class="fa fa-desktop fa-3x fa-fw" aria-hidden="true"></i><h3> خدمات المواقع </h3>
										<div class="service_content">
											<p> - تصيميم مواقع متوافقة وتعمل على جميع الأجهزة الذكية والتابلت بشكل متجاوب.</p>
										</div>
										<div class="service_content">
											<p> - نقوم بتصميم موقعك الألكتروني ليدعم قواعد محركات البحث العالمية وال"SEO".</p>
										</div>
										<div class="service_content">
											<p> - نعمل على تصميم مواقع تطور من الهوية التجارية والالكترونية للعميل.</p>
										</div>
										<div class="service_content">
											<p> - نقدم تصاميم لمختلف المواقع باستخدام أحدث لغات البرمجة والتصميم.</p>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12 service_apps wow bounceInLeft">
										<i class="fa fa-mobile fa-3x fa-fw" aria-hidden="true"></i><h3> خدمات التطبيقات </h3>
										<div class="service_content">
											<p> - تصيميم تطبيقات الجوال لمختلف أنظمة التشغيل كالـ"iOS"والـ"Android" وغيرها.</p>
										</div>
										<div class="service_content">
											<p> - المقدرة على إنشاء تطبيقات ذات تنافسية عالية في جميع المتاجر المختلفة.</p>
										</div>
										<div class="service_content">
											<p> - تقديم الحلول لإنشاء تطبيق لموقعك الإلكتروني يتوافق مع قاعدة بيانات الموقع.</p>
										</div>
										<div class="service_content">
											<p> - إذا كان لديك فكرة وتود تحويلها لتطبيق فما عليك الا أن تقوم بمراسلتنا.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<section class="row">
					<article class="empty_col-120">
					</article>
				</section>
			</div>
			<div id="selling" class="after_selling">
				<div class="container">
					<div class="row text-center">
						<div class="col-xs-12">
							<h2><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> خدمات ما بعد البيع</h2>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="service">
								<i class="fa fa-comments-o fa-3x" aria-hidden="true"></i>
								<p><strong> طرق الدعم </strong>  سهلة وسريعة لكل العملاء على مدار الساعة من خلال قنواتنا المتعددة.</p>
							</div>
						</div>
						 <div class="col-sm-3 col-xs-6">
							<div class="service">
								<i class="fa fa-refresh fa-3x" aria-hidden="true"></i>
								<p><strong> التحديث مستمر </strong> على الدوام لجميع المواقع على خوادمنا لضمان الجودة والحماية.</p>
							</div>
						</div>
						 <div class="col-sm-3 col-xs-6">
							<div class="service">
								<i class="fa fa-certificate fa-3x" aria-hidden="true"></i>
								<p><strong> لدعم المصداقية </strong> و جودة العمل فإن للعميل الحق في استرجاع  امواله فترة 10 أيام</p>
							</div>
						</div>
						 <div class="col-sm-3 col-xs-6">
							<div class="service">
								<i class="fa fa-wrench fa-3x" aria-hidden="true"></i>
								<p><strong> استشارات هندسية </strong> ودعم فني للعميل بشكل مجاني بعد انشاء الموقع وخلال الاشتراك</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<section class="row">
				<article class="empty_col-120">
				</article>
			</section>
		</div>
		<section id="after_selling" class="first_page_designLevels">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<article class="designLevels">
							<div class="container-fluid">
								<div class="row">
									<h2 class="designLevels_topic text-center"><i class="fa fa-chevron-circle-left fa-fw"></i>مراحل التصميم</h2>
									<div class="col-sm-6 col-xs-12">
										<div class="designlvl">
											<div class="col-xs-1">
												<i class="fa fa-crosshairs fa-2x" aria-hidden="true"></i>
											</div>
											<div class="col-sm-9 col-xs-10">
												<h4> متطلبات الموقع</h4>
											</div>
											<div class="col-xs-12">
												<p>- تعتمد دراسة متطلبات الموقع على تحديد الهدف المطلوب من الموقع وتحديد الشريحة المستهدفة من المستخدمين وايجاد افضل طرق العرض.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="designlvl">
											<div class="col-xs-3 col-xs-1">
												<i class="fa fa fa-list-ul fa-2x"></i>
											</div>
											<div class="col-sm-9 col-xs-10">
												<h4>توزيع العمل</h4>
											</div>
											<div class="col-xs-12">
												<p>- يتم توزيع العمل على نخبة من المبرمجين ودراسة امكانية التطوير وترتيب جدول العمل ليتم تسليم المشروع وفق الجدول الزمني المتفق عليه.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="designlvl">
											<div class="col-xs-3 col-xs-1">
												<i class="fa fa-spinner fa-2x"></i>
											</div>
											<div class="col-sm-9 col-xs-10">
												<h4> البدء في التصميم</h4>
											</div>
											<div class="col-xs-12">
												<p>-يتم تصميم الموقع بجودة عالية وبشكل جذاب وعن طريق استخدام أحدث الأدوات وأحدث البرمجيات وتقنيات تصميم الويب 
												مع امكانية وسهولة التطوير في المستقبل.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="designlvl">
											<div class="col-xs-3 col-xs-1">
												<i class="fa fa-plug fa-2x"></i>
											</div>
											<div class="col-sm-9 col-xs-10">
												<h4>تجربة الموقع</h4>
											</div>
											<div class="col-xs-12">
												<p>- قبل تسليم الموقع يتم اختباره ليتوافق مع متصفحات الويب العالمية ويكون متجاوب مع مختلف المنصات الألكترونية كما يتم التأكد من خلوه من جميع الأحطاء.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<aside class="note_card">
							<h3><i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>معلومة:</h3>
							<div>
								<h4><strong>ما الفرق بين تصميم وتطوير المواقع الإلكترونية؟</strong></h4>
								<h5>
									<strong> تصميم المواقع </strong>هو ما يمكن للمستخدم أن يراه عند الدخول للموقع من شكل وتنوع للألوان واختيار التصميم والقوائم. من المهم أن يحتوي الموقع على صور ايقوانات مناسبة وجذابة اي ان التصميم يمثل الواجهة الأساسية للموقع فيجب أن يكون الشكل جذاباً بشكل بسيط وسهل الإستخدام.
								</h5>
								<h5>
									<strong> تطوير المواقع </strong>هو عملية انشاء وتحليل قاعدة بيانات الموقع وربط مدخلاته ومخرجاتة بالتصميم كما يشمل التطوير انشاء لوحة تحكم الموقع وامكانبية انشاء الحسابات وتوزيع الصلاحيات للأعضاء والتحكم بمحتوى الموقع. ايضا يتم تأمين الموقع من عبث المخربين والمخترقين.
								</h5>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<section id="our-products" class="container">
			<div class="row">
				<div class="our-products">
					<div class="col-sm-12">
						<h2>منتجاتنا</h2>
						<h4> يقدم موقع <?php echo $webName; ?> منتجات ذات جودة عالية تلبي احتياجات الأفراد والشركات.</h4>
					</div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>أحدث الأدوات البرمجية</strong>
							<p>
								برمجيات الموقع تواكب التقدم التكنولوجي للأدوات البرمجية فنحن نقوم بتحديث جميع ادواتنا وايضا تحديث برمجيات المواقع أولاً بأول.
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>منصات تشغيل متعددة</strong>
							<p>
								يتمتع مبرمجين رواد ٣٦٠ بالقدرة على تصميم المواقع والتطبيقات ذات الجودة العالية والتي تعمل على مختلف منصات التشغيل.
							</p>
						</div>
					</div>
					<div class="clearfix visible-xs-block"></div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>لغات برمجية متعددة</strong>
							<p>
								يقوم مبرمجونا بدمج  لغات البرمجة كـ(HTML, CSS, javaScript, PHP) مع قوالب ومكتبات أخرى لتصميم أفضل المواقع وفق المعايير العالمية.
							 </p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>البريد الألكتروني</strong>
							<p>
								خدمات البريد الإلكتروني تساعد الترويج ومراسلة العملاء من خلال سيرفرات عالية الكفاءة تضمن وصول الإعلانات إلى العملاء بأقل تكلفة.
							</p>
						</div>
					</div>
					<div class="clearfix visible-xs-block"></div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>التدريب والتنفيذ</strong>
							<p>
								نقوم بتصميم لوحة تحكم لإدارة الموقع ضمن التصميم حسب احتياج العميل ونضع خطة تدريب شاملة لتجنب اي مشاكل فنية قد تحصل في المستقبل 
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-6">
						<div class="product">
							<strong>الإشراف والإدارة</strong>
							<p>
								قدم لعملائنا خدماتنا المميزة في ادارة المواقع والترويج الاعلامي للصفحات الشخصية والتجارية بأسعار تنافسية بكل مهنية واحترافية عالية 
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="sales" class="sales">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>عروض المنتجات الخاصة</h2>
						<h4> يمكنك التعرف على العروض الخاصة المقدمة من موقع <?php echo $webName; ?>.</h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							<div class="panel panel-primary"> 
								<div class="panel-heading panel-primary"><h4>تصميم الصفحة الشخصية</h4></div>
								<div class="panel-body"><h5> نقوم بتصميم الصفحة الشخصية بشكل جذاب يقوم بالتعريف بمواهبك ويعرض هواياتك وكما يقوم بعرض نشاطك في اغلب وسائل التواصل الإجتماعي بشكل آلي.</h5></div>
								<div class="panel-footer panel-primary">تصميم واجهة إحترافية</div>
								<div class="panel-footer panel-primary">شعار شخصي خاص</div>
								<div class="panel-footer panel-primary">البوم الصور الشخصية</div>
								<div class="panel-footer panel-primary">اضافة الأحداث اليومية</div>
								<div class="panel-footer panel-primary">سيرة ذاتية إحترافية</div>
								<div class="panel-footer panel-primary"><p>السعر:</p><p>500 R.S</p></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							
							<div class="panel panel-primary"> 
								<div class="panel-heading panel-primary"><h4>تصميم موقع العائلة</h4></div>
								<div class="panel-body"><h5> احصل على تصميم عصري لمجلس العائلة ومطور بشكل احترافي جميل يخدم اجتماعات العائلة ويلبي احتياجاتها عن طريق توفر العديد من الأقسام الإعلامية .</h5></div>
								<div class="panel-footer panel-primary">تصميم حتى 3 صفحات</div>
								<div class="panel-footer panel-primary">بنرات مجلس العائلة</div>
								<div class="panel-footer panel-primary">تنسيقات عديدة</div>
								<div class="panel-footer panel-primary">لوحة تحكم عربية</div>
								<div class="panel-footer panel-primary">والعديد من الأقسام</div>
								<div class="panel-footer panel-primary"><p>السعر:</p><p>900 R.S</p></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							
							<div class="panel panel-primary"> 
								<div class="panel-heading panel-primary"><h4>تصميم موقع شركة</h4></div>
								<div class="panel-body"><h5> موقعك الإلكتروني مهم جداً لنشاطك التجاري حيث انه يمثل واجهة اعلامية وتسويقية فنحن نقوم بتصميمه بشكل عصري يسهل من العملية الإنتاجية للشركة.</h5></div>
								<div class="panel-footer panel-primary">تصميم موقع شامل</div>
								<div class="panel-footer panel-primary">تصميم الهوية والشعارات</div>
								<div class="panel-footer panel-primary">بريد الكتروني لكل موظف</div>
								<div class="panel-footer panel-primary">لوحة تحكم عربية</div>
								<div class="panel-footer panel-primary">والعديد من الخدمات</div>
								<div class="panel-footer panel-primary"><p>السعر:</p><p>2000 R.S</p></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							
							<div class="panel panel-primary"> 
								<div class="panel-heading panel-primary"><h4>تصميم متجر إلكتروني</h4></div>
								<div class="panel-body"><h5> تزامناً مع تطور التقنية اصبحت المتاجر الألكترونية من اساسيات التجارة العالمية مما جعلها من اهتماماتنا لنصل لعمل تصميم احترافي يترقي بالطموحات.</h5></div>
								<div class="panel-footer panel-primary">تصميم شامل للصفحات</div>
								<div class="panel-footer panel-primary">شعار الموقع وبنرات</div>
								<div class="panel-footer panel-primary">نظام قسائم الكترونية</div>
								<div class="panel-footer panel-primary">لوحة تحكم عربية</div>
								<div class="panel-footer panel-primary">تدريب شامل للإدارة</div>
								<div class="panel-footer panel-primary"><p>السعر:</p><p>2500 R.S</p></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<h6><strong>ملاحظة </strong>الخدمات السابقة تشمل عروض التصميم فقط الرجاء زيارة قسم خدمات الاستضافة للمزيد من التفاصيل.</h6>
					</div>
				</div>
			</div>
		</section>
		<section id="our-work" class="our-work">
			<div class="container">
				<div class="row">
					<h2 class="upper">احدث أعمالنا في <span class="main-color">تصميم المواقع</span></h2>
					<p>هنا نقدم لكم اخر أعمالنا ونفخر دوماً بأن نكون شريك لنجاحكم</p>
					<div class="col-sm-6 col-xs-12">
						<div class="item-box text-center">
							<div class="item">
								<img src="<?php echo $img; ?>backgrounds/IMG_020.jpg" class="" alt="support">
								<div class="over">
									<h3>جمعية متاحف الأحساء</h3>
									<h4>الموقع يهتم بجديد متاحف الأحساء لدعم السياحة في المملكة</h4>
									<a class="btn btn-default" href="#" role="button">زيارة  الموقع</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php include $tmpl.'footer.php'; ?>