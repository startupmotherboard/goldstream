
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('template')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_messages')?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="Private chat example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('template')?>/assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="<?php echo base_url()?>">
				<img alt="Logo" src="<?php echo base_url('template')?>/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
				
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
						<?php echo view('customer/includes/aside_primary.php',array('menu'=>'messages'));?>
						
						<?php echo view('customer/includes/aside_secondary.php');?>
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						
						
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"><?php echo lang('app.title_page_messages')?></h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('customer/dashboard')?>" class="text-muted"><?php echo lang('app.menu_app');?></a>
											</li>
											<li class="breadcrumb-item">
												<a href="#" class="text-muted"><?php echo lang('app.menu_messages');?></a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<?php echo view('customer/includes/tool_bar.php');?>
								<!--end::Toolbar-->
							</div>
						</div>
						
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Chat-->
								<div class="d-flex flex-row">
						<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-350px w-xl-400px" id="kt_chat_aside">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Body-->
											<div class="card-body">
												<!--begin:Search-->
												<div class="input-group input-group-solid">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:<?php echo base_url('template')?>/assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<input type="text" class="form-control py-4 h-auto" placeholder="Email" />
												</div>
												<!--end:Search-->
												<!--begin:Users-->
												<div class="mt-7 scroll scroll-pull">
													<!--begin:User-->
												
													<div class="d-flex align-items-center justify-content-between mb-5">
														<div class="d-flex align-items-center">
															<div class="symbol symbol-circle symbol-50 mr-3">
															
																<span class="font-size-h3 symbol-label font-weight-boldest"><?php echo $admin['short_name']; ?></span>
															
															</div>
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg"><?php echo $admin['display_name'];?></a>
																<span class="text-muted font-weight-bold font-size-sm">Admin</span>
															</div>
														</div>
														<div class="d-flex flex-column align-items-end">
															<span class="text-muted font-weight-bold font-size-sm"><?php if($admin['last']!="") echo date('d M - H:i',strtotime($admin['last'])); else echo '--';?></span>
															<?php if($admin['unreaded']>0){?><span class="label label-sm label-success"><?php echo $admin['unreaded']?></span><?php } ?>
														</div>
													</div>
													<!--end:User-->
													
												</div>
												<!--end:Users-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Aside-->
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8" id="kt_chat_content">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header align-items-center px-4 py-3">
												
												<div class="text-center flex-grow-1">
													<div class="text-dark-75 font-weight-bold font-size-h5"><?php echo $admin_name?></div>
													<div>
														<span class="label label-sm label-dot label-success"></span>
														<span class="font-weight-bold text-muted font-size-sm">Admin</span>
													</div>
												</div>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="scroll scroll-pull" data-mobile-height="350">
													<!--begin::Messages-->
													<div class="messages">
														<!--begin::Message In-->
														<?php if(!empty($tab)){
															foreach($tab as $one){?>
														<div class="d-flex flex-column mb-5 <?php if($one['sender_name']==lang('app.you'))  echo 'align-items-start'; else echo 'align-items-end'?>">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<?php echo $one['sender_image']?>
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6"><?php echo $one['sender_name']?></a>
																	<span class="text-muted font-size-sm"><?php echo date('d M - H:i',strtotime($one['send_date']))?></span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px"><?php echo $one['msg']?></div>
														</div>
														
														<?php } }?>
													</div>
													<!--end::Messages-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer align-items-center">
												<!--begin::Compose-->
												<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message" name="message" id="message"></textarea>
												<div class="d-flex align-items-center justify-content-between mt-5">
													<!--div class="mr-3">
														<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
															<i class="flaticon2-photograph icon-lg"></i>
														</a>
														<a href="#" class="btn btn-clean btn-icon btn-md">
															<i class="flaticon2-photo-camera icon-lg"></i>
														</a>
													</div-->
													<div>
														<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6" onclick="send_message();"><?php echo lang('app.btn_send')?></button>
													</div>
												</div>
												<!--begin::Compose-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Chat-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--doc: add "bg-white" class to have footer with solod background color-->
					<?php echo view('customer/includes/footer.php')?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Quick Actions Panel-->
		<?php echo view('customer/includes/quick.php')?>
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?php echo base_url('template')?>/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<!--script src="<?php echo base_url('template')?>/assets/js/pages/custom/chat/chat.js"></script-->
		<!--end::Page Scripts-->
		<script>
			function send_message(){
				var message=$("#message").val();
					$.ajax({
						  url:"<?php echo base_url('Ajax/save_message')?>",
						  method:"POST",
						  data:{message:message}
						  
					}).done(function(data){
						var obj=JSON.parse(data);
						if(obj.error==false){
							$(".messages").append(obj.msg);
							$("#message").val("");
							$("#message").text("");
						}
					});
			}
		</script>
	</body>
	<!--end::Body-->
</html>