<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('template')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_reset_password');?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="Singin page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url('template')?>/assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
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
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="<?php echo base_url()?>" class="login-logo text-center pt-lg-25 pb-10">
							<img src="<?php echo base_url('uploads/'.$settings['logo'])?>" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside Title-->
					
						<!--end::Aside Title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url(<?php echo base_url('uploads/'.$settings['background'])?>)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column p-10">
					<!--begin::Top-->
					<!--div class="text-right d-flex justify-content-center">
						<div class="top-signin text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
							<span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
							<a href="javascript:;" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
						</div>
					</div-->
					<!--end::Top-->
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form">
							<!--begin::Form-->
							
							 <?php $attributes = ['class' => '', 'id' => 'kt_login_reset_form','method'=>'post'];
					echo form_open( base_url('Ajax/submit_reset_form'), $attributes);
					
										$input = [
												'type'  => 'hidden',
												'name'  => 'email',
												'id'    => 'email',
												'value' =>$exist[0]['email'],
												
												'class' => 'form-control'
												
										];
										echo form_input($input);
										$input = [
												'type'  => 'hidden',
												'name'  => 'token',
												'id'    => 'token',
												'value' =>$exist[0]['token'],
											
												'class' => 'form-control'
												
										];
										echo form_input($input);?>
								<!--begin::Title-->
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg"><?php echo lang('app.title_page_reset_password');?></h3>
									
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark"><?php echo lang('app.field_password');?></label>
									<?php 
										$input = [
												'type'  => 'password',
												'name'  => 'password',
												'id'    => 'password',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 rounded-lg border-0'
										];

										echo form_password($input);
										?>
									
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5"><?php echo lang('app.field_confirm_password');?></label>
										
									</div>
									<?php 
										$input = [
												'type'  => 'password',
												'name'  => 'confirm_password',
												'id'    => 'confirm_password',
												'required' =>true,
												
												'class' => 'form-control h-auto py-7 px-6 rounded-lg border-0'
										];

										echo form_password($input);
										?>
									
								</div>
								<div class="row">
									<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
								<?php $data=['name'    => 'submit_reset',
												'id'      => 'kt_login_reset_form_submit_button',
												'value'   => lang('app.btn_reset'),
												'type'=>'submit',
												'class' => 'btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3'
								];
								
								echo form_submit($data,lang('app.btn_reset'));?>
									<a href="<?php echo base_url('login')?>" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3"><?php echo lang('app.btn_cancel');?></a>
								</div>
								<!--end::Action-->
							 <?php echo form_close();?>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
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
		<!--script src="<?php echo base_url('template')?>/assets/js/pages/custom/login/login-3.js"></script-->
		<script>
				"use strict";

// Class Definition
var KTLogin = function() {
	var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15';

		var _handleFormForgot = function() {
		var form = KTUtil.getById('kt_login_reset_form');
		var formSubmitUrl = KTUtil.attr(form, 'action');
		var formSubmitButton = KTUtil.getById('kt_login_reset_form_submit_button');

		if (!form) {
			return;
		}

		FormValidation
		    .formValidation(
		        form,
		        {
		            fields: {
						password: {
						validators: {
							notEmpty: {
								message: '<?php echo lang("app.error_required_field")?>'
							}
						}
					},
					 confirm_password: {
							validators: {
								identical: {
									compare: function() {
										return form.querySelector('[name="password"]').value;
									},
									message: '<?php echo lang("app.error_match_password")?>'
								}
							}
						}
		            },
		            plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
	            		//defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap({
						//	eleInvalidClass: '', // Repace with uncomment to hide bootstrap validation icons
						//	eleValidClass: '',   // Repace with uncomment to hide bootstrap validation icons
						})
		            }
		        }
		    )
		    .on('core.form.valid', function() {
				// Show loading state on button
				KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "Please wait");
					var fields=$("#kt_login_reset_form").serializeArray();
				// Simulate Ajax request
						$.ajax({
							  url:formSubmitUrl,
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
								Swal.fire({
									text: "<?php echo lang('app.success_form_reset')?>",
									icon: "success",
									showCancelButton: false,
									buttonsStyling: false,
									confirmButtonText: "<?php echo lang('app.btn_login_modal')?>",
									
									customClass: {
										confirmButton: "btn font-weight-bold btn-primary",
										cancelButton: "btn font-weight-bold btn-default"
									}
								}).then(function (result) {
									if (result.value) {
										document.location.href="<?php echo base_url('login')?>";
									} else if (result.dismiss === 'cancel') {
										Swal.fire({
											text: "Your form has not been submitted!.",
											icon: "error",
											buttonsStyling: false,
											confirmButtonText: "<?php echo lang('app.error_form_btn')?>",
											customClass: {
												confirmButton: "btn font-weight-bold btn-primary",
											}
										});
									}
								});
							}
						});
				
				
				setTimeout(function() {
					KTUtil.btnRelease(formSubmitButton);
				}, 2000);
		    })
			.on('core.form.invalid', function() {
				Swal.fire({
					text: "Sorry, looks like there are some errors detected, please try again.",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function() {
					KTUtil.scrollTop();
				});
		    });
    }


	
    // Public Functions
    return {
        init: function() {
            
			_handleFormForgot();
			
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>