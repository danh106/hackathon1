@extends('Layout.Layout')
@section('body')
<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>ĐĂNG NHẬP</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item">Login</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content">
							<h4>
								KHÁCH HÀNG MỚI
							</h4>
							<p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn hàng trong tài khoản của mình, v.v</p>
							<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="/User/Register">
							Tạo một tài khoản
							</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
									<form id="/login" action="" method="post" class="tab-pane active col-12">
                    @csrf
										<h4 class="text-secondary">ĐĂNG NHẬP</h4>
								<p class="font-weight-600">Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập.</p>
										<div class="mb-4">
											<label class="label-title">Tài khoản *</label>
											<input name="username" required="" class="form-control" placeholder="Tên tài khoạn của bạn" type="Username">
										</div>
										<div class="mb-4">
											<label class="label-title">Mật khẩu *</label>
											<input name="password" required="" class="form-control " placeholder="Mật khẩu" type="Password">
										</div>
                    @if($errors->any())
                        <div style="color:red">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    @if (session("adminlogin")>=3) 
                        <div class="g-recaptcha d-flex justify-content-center" data-sitekey="6LcvRjcrAAAAALLxU8rFfzAZC0G6c_d78SXWO8p_"></div>
                    @endif
										<div class="text-left">
											<button type="submit" class="btn btn-primary btnhover me-2">Đăng nhập</button>
											<!-- <a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Quên mật khẩu</a>  -->
										</div>
									</form>
									<!-- <form id="forgot-password" class="tab-pane fade  col-12">
										<h4 class="text-secondary">FORGET PASSWORD ?</h4>
										<p class="font-weight-600">We will send you an email to reset your password. </p>
										<div class="mb-3">
											<label class="label-title">E-MAIL *</label>
											<input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="text-left"> 
											<a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">Back</a>
											<button class="btn btn-primary btnhover">Submit</button>
										</div>
									</form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
	</div>

@stop()