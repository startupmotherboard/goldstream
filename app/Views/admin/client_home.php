
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('template')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_client')?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="User profile account information example" />
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
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
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
						<?php echo view('admin/includes/aside_primary.php',array('menu'=>'clients'));?>
						
						<?php echo view('admin/includes/aside_secondary.php');?>
					
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
									<!--begin::Mobile Toggle-->
									<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
										<span></span>
									</button>
									<!--end::Mobile Toggle-->
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"><?php echo lang('app.menu_client_home')?></h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('admin/dashboard')?>" class="text-muted"><?php echo lang('app.menu_app');?></a>
											</li>
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('admin/dashboard')?>" class="text-muted"><?php echo lang('app.menu_clients');?></a>
											</li>
											
											<li class="breadcrumb-item">
												<a href="#" class="text-muted"><?php echo lang('app.menu_client_home');?></a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<?php //echo view('admin/includes/tool_bar.php');?>
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Profile Account Information-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<?php echo view('admin/includes/client_details_aside.php',array('menu_profile'=>'home'));?>
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
									<?php 
									if(empty($list_home)){?>
										
									<div class="card card-custom mb-2">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark"><?php echo lang('app.menu_client_home');?></h3>
													
												</div>
												
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											 <?php $attributes = ['class' => '', 'id' => 'profile_form','method'=>'post', 'novalidate'=>"novalidate"];
												//echo form_open_multipart( base_url('admin/profile'), $attributes);
												
												?>
												<!--begin::Body-->
												
												<div class="card-body">
												<div class="row">
													<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
												</div>
													
													
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_city');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['city']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_bedrooms');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['bedrooms']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_price_range');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php $xx=json_decode($one_home['price_range'],true); echo $xx['min'].",".$xx['max'];?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_square');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['square']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_property_type');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['property_type']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_type_home');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['home_type']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_preferences');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['preferences']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_details');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['details']?>
															
														</div>
													</div>
													<div class="row">
														
														<div class="col-lg-12 col-xl-12">
															<h5 class="font-weight-bold mb-6"><?php echo lang('app.sub_title_list_buyers')?></h5>
														</div>
													</div>
													<?php if(!empty($one_home['list_buyers'])){
														foreach($one_home['list_buyers'] as $one_buyer){?>
														<div class="row">
															<div class="col-lg-3 col-xl-6"><i class="fa fa-user"></i>&nbsp;<?php echo $one_buyer['first_name'].' '.$one_buyer['last_name']?></div>
															<?php if($one_buyer['email']!=""){?><div class="col-lg-3 col-xl-6"><i class="far fa-envelope"></i>&nbsp;<?php echo $one_buyer['email']?></div><?php }?>
															<?php if($one_buyer['phone']!=""){?><div class="col-lg-3 col-xl-6"><i class="fas fa-phone-square-alt"></i>&nbsp;<?php echo $one_buyer['phone']?></div><?php }?>
															<?php if($one_buyer['birthdate']!=""){?><div class="col-lg-3 col-xl-6"><i class="fas fa-birthday-cake"></i>&nbsp;<?php echo $one_buyer['birthdate']?></div><?php }?>
														</div>
														<hr/>
													<?php } }?>
												</div>
												<!--end::Body-->
												
											
											
										</div>
									<?php
									}
									else{
									foreach($list_home as $one_home){?>
										<!--begin::Card-->
										<div class="card card-custom mb-2">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark"><?php echo lang('app.menu_client_home');?></h3>
													
												</div>
												
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											 <?php $attributes = ['class' => '', 'id' => 'profile_form','method'=>'post', 'novalidate'=>"novalidate"];
												//echo form_open_multipart( base_url('admin/profile'), $attributes);
												
												?>
												<!--begin::Body-->
												
												<div class="card-body">
												<div class="row">
													<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
												</div>
													
													
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_city');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['city']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_bedrooms');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['bedrooms']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_price_range');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php $xx=json_decode($one_home['price_range'],true); echo $xx['min'].",".$xx['max'];?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_square');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['square']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_property_type');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['property_type']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_type_home');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['home_type']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_preferences');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['preferences']?>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-6 col-lg-6 col-form-label"><?php echo lang('app.home_field_details');?></label>
														<div class="col-lg-6 col-xl-6 col-form-label">
														<?php echo $one_home['details']?>
															
														</div>
													</div>
													<div class="row">
														
														<div class="col-lg-12 col-xl-12">
															<h5 class="font-weight-bold mb-6"><?php echo lang('app.sub_title_list_buyers')?></h5>
														</div>
													</div>
													<?php foreach($one_home['list_buyers'] as $one_buyer){?>
														<div class="row">
															<div class="col-lg-3 col-xl-6"><i class="fa fa-user"></i>&nbsp;<?php echo $one_buyer['first_name'].' '.$one_buyer['last_name']?></div>
															<?php if($one_buyer['email']!=""){?><div class="col-lg-3 col-xl-6"><i class="far fa-envelope"></i>&nbsp;<?php echo $one_buyer['email']?></div><?php }?>
															<?php if($one_buyer['phone']!=""){?><div class="col-lg-3 col-xl-6"><i class="fas fa-phone-square-alt"></i>&nbsp;<?php echo $one_buyer['phone']?></div><?php }?>
															<?php if($one_buyer['birthdate']!=""){?><div class="col-lg-3 col-xl-6"><i class="fas fa-birthday-cake"></i>&nbsp;<?php echo $one_buyer['birthdate']?></div><?php }?>
														</div>
														<hr/>
													<?php }?>
												</div>
												<!--end::Body-->
												
											
											
										</div>
										<!--end::Card-->
									<?php } 
									}//end else have home details?>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Profile Account Information-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--doc: add "bg-white" class to have footer with solod background color-->
					<?php echo view('admin/includes/footer.php')?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<?php echo view('admin/includes/quick.php')?>
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
		<script src="<?php echo base_url('template')?>/assets/js/pages/widgets.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/pages/custom/profile/profile.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/pages/crud/forms/widgets/input-mask.js"></script>
		<!--end::Page Scripts-->
		<script>
		"use strict";
		$("#birthdate").inputmask("99/99/9999", {
				"placeholder": "dd/mm/yyyy",
				autoUnmask: true
			});
		$(".save_profile_btn").click(function(){
			
				var fields=$("#profile_form").serializeArray();
				// Simulate Ajax request
					$.ajax({
						  url:"<?php echo base_url('Ajax/validation_profile_perso')?>",
						  method:"POST",
						  data:fields
						  
					}).done(function(data){
							var obj=JSON.parse(data);
						if(obj.error==true){
								$("#error_alert").html(obj.validation);
								$("#error_alert").show('slow');
								Swal.fire({
									text: "<?php echo lang('app.error_form')?>",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "<?php echo lang('app.error_form_btn')?>",
									customClass: {
										confirmButton: "btn font-weight-bold btn-light"
									}
								}).then(function () {
									KTUtil.scrollTop();
								});
							
							}
							else{
								
								$("#error_alert").hide(0);
								$("#profile_form").submit();
							}
					});
		});
		</script>
	</body>
	<!--end::Body-->
</html>