
@php
    use Illuminate\Support\Str;
@endphp
@extends('Layout.Layout')
@section('body')
<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media" style="max-width: 200px;">
								<img src="{{$document->image}}" alt="book">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title">{{$document->title}}</h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
											<ul class="dz-rating">
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-muted"></i></li>	
							
													
											</ul>
										</div>
										<div class="social-area">
											<ul class="dz-social-icon style-3">
												<li><a href="https://www.facebook.com/dexignzone" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href="https://twitter.com/dexignzones" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
												<li><a href="https://www.google.com/intl/en-GB/gmail/about/" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="dz-body">
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
													<img src="{{$document?->author?->image}}" alt="book">
													<div>
														<span>Viết bởi</span>{{$document?->author?->name}}
													</div>
												</div>
											</li>
											<li><span>Nhà xuất bản</span>{{$document?->publisher?->name}}</li>
											<li><span>Year</span>{{$document?->publishdate?->format('d-m-Y')}}</li>
										</ul>
									</div>
									<div class="text-1 text-dark">{!!$document->description!!}</div>
									<div class="book-footer">
											
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xl-8">
						<div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Chi tiết tài liệu</a></li>
                                <li><a data-bs-toggle="tab" href="#developement-1">Nhận xét của người đọc</a></li>
                                <li><a data-bs-toggle="tab" href="#document-1">Xem tài liệu</a></li>
                            </ul>
							<div class="tab-content">
								<div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border book-overview">
                                        <tr>
                                            <th>Tên tài liệu</th>
                                            <td>{{$document->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Định dạng tài liệu</th>
                                            <td>{{pathinfo($document->documentpath, PATHINFO_EXTENSION)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tác gỉả</th>
                                            <td>{{$document?->author?->name}}</td>
                                        </tr>
										<tr>
                                            <th>Ngôn ngữ</th>
                                            <td>{{$document?->language?->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày xuất bản</th>
                                            <td>{{$document?->publishdate?->format('d-m-Y')}}</td>
                                        </tr>
										<tr>
                                            <th>Nhà xuất bản</th>
                                            <td>{{$document?->publisher?->name}}</td>
                                        </tr>
										<tr>
                                            <th>Số trang</th>
                                            <td>{{$document->pagecount}}</td>
                                        </tr>
                                        <tr class="tags">
                                            <th>Thể loại</th>
                                            <td>
                                                @foreach ($document->tbldocumentcategories as $item) 
                                                    <a href="javascript:void(0);" class="badge">{{$item->category->name}}</a>
                                                @endforeach
											</td>
                                        </tr>
                                    </table>
                                </div>
								<div id="developement-1" class="tab-pane">
                                    <div class="clear" id="comment-list">
										<div class="post-comments comments-area style-1 clearfix">
											<h4 class="comments-title">{{ $document->tblcomment ? count($document->tblcomment) : 0 }} Nhận xét</h4>
											<div id="comment">
												<ol class="comment-list">
                                                    @foreach ($document->tblcomments as $item) 
                                                        <li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
															<div class="comment-body" id="div-comment-4">
																<div class="comment-author vcard">
																	<img src="@i.User?.Image" alt="" class="avatar"/>
																	<cite class="fn">{{$item->user->name}}</cite> <span class="says">says:</span>
																	<div class="comment-meta">
																		<a href="javascript:void(0);">{{$item?->createddate?->format('d-m-Y')}}</a>
																	</div>
																</div>
																<div class="comment-content dlab-page-text">
																	<p>{{$item->detail}}</p>
																</div>
																<div class="reply">
																	<a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
																</div>
															</div>
														</li>
                                                    @endforeach
											 	</ol>
										  </div>
										  <div class="default-form comment-respond style-1" id="respond">
											 <h4 class="comment-reply-title" id="reply-title">Gửi Nhận xét <small> <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>
											 <div class="clearfix">
												<form method="post" id="comments_form" class="comment-form" novalidate>
													<input type="hidden" id="c_documentid" value="@Model.BookId">
												   <p class="comment-form-comment"><textarea id="c_detail" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
												   <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
													  <button id="c_submit" type="button" class="submit btn btn-primary filled">
													  Submit Now <i class="fa fa-angle-right m-l10"></i>
													  </button>
												   </p>
												</form>
											 </div>
										  </div>
									   </div>
									</div>
									
								</div>
                                <div id="document-1" class="tab-pane">
                                    <iframe src="/document/pdf/{{$document->documentid}}" style="width:100%; max-height:800px;height:800px;" frameborder="0"></iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 mt-5 mt-xl-0">
						<div class="widget">
							<h4 class="widget-title">Tài liệu liên quan</h4>
							<div class="row">
                                @foreach ($documentrelated as $item) 
                                    <div class="col-xl-12 col-lg-6">
										<div class="dz-shop-card style-5">
											<div class="dz-media">
												<img src="{{$item->document->image}}" alt="book">
											</div>
											<div class="dz-content">
												<h5 class="subtitle multi-line-ellipsis" style="font-size: 16px;">{{$item->document->title}}</h5>
												<ul class="dz-tags">
													{{$item->document?->author?->name}}
												</ul>
												<a href="/document/{{ Str::slug($item->document->title) }}/{{$item->document->documentid}}" class="btn btn-outline-primary btn-sm btnhover btnhover2">Chi tiết</a>
											</div>
										</div>
									</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Client Start-->
		<div class="bg-white py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->
		
		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6">
							<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
												<span>SUBSCRIBE</span>
												<i class="fa-solid fa-paper-plane"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter End -->
	</div>
<script>
    $(document).ready(function () {
		const notyf = new Notyf();
        $("#c_submit").click(function () {
            var _detail = $("#c_detail").val();
            var _documentid = $("#c_documentid").val();
            $.ajax({
                url: "/document/comment",
                type: "POST",
                data: {
                    detail: _detail,
                    documentid:_documentid
                },
                success: function (result) {
                    if (result.status==true) {
                        $("#c_detail").val("");
                        $("#c_documentid").val("");
						notyf.success('Gửi thành công');
                        setTimeout(function () {
							location.reload();
						}, 1000);
                    } else {
                        notyf.error('Gửi không thành công');
                    }
                },
				error: function (xhr) {
					if (xhr.status === 401) {
						notyf.error('Bạn chưa đăng nhập. Vui lòng đăng nhập để bình luận.');
					} else {
						notyf.error('Đã xảy ra lỗi. Vui lòng thử lại sau.');
					}
				}
            });
        });
    });
</script>
@stop()