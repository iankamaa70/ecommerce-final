@include('head')
  <body class="post-template-default single single-post postid-6649 single-format-standard">
  	<div class="wrapper js-wrapper">

  		@include('menu')
		  <div class="main js-main">

<article class="post">
  <main id="main_content" itemprop="mainContentOfPage" tabindex="-1">
    <section class="hero-basic" role="banner" aria-label="Mixing Mats and Computer Vision Makes Home Exercise Smarter">
	<div class="container hero-basic__container">
		<div class="hero-basic__inner">
							<p class="label-text hero-basic__subtitle">
					<a href="{{ route('report') }}">News </a>				</p>
										<h1 class="main-title hero-basic__title">{{ $report->name }}</h1>
										
								</div>
	</div>
</section>
<section class="container section-gutter-bottom" role="banner" aria-label="Hero image">
				<figure class="js-wrap image  image--cover hero-image--media-features carousel__image" data-module="image">
<img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset($report->image) }}" data-retina="{{ asset($report->image) }}"></figure>
			</section>
    	<div class="content section-gutter content--single-post" >
	<div class="container">
		<div class="content__wysiwyg wysiwyg">
			<div class="content__wysiwyg-inner">
				<p>
				<span style="font-weight: 400;">
				{!! $report->description !!}.
				</span>
				</p>
			</div>
		</div>
			</div>
</div>
<section class="post-footer" role="region" aria-label="Article footer">
	<div class="container post-footer__container">
		<div class="post-footer__inner">
			<div class="post-footer__inner-content">
									<div class="post-footer__back">
						<a href="{{ route('report') }}" class="label-text">< Back to News</a>
					</div>
												
							</div>
					</div>
	</div>
</section>

@include('footer2')
<script type='text/javascript' src="{{URL::asset('2/wp-content/themes/cornell-tech/assets/main.minbec1.js?ver=de091c')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/jquery.json.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/gravityforms.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/placeholders.jquery.min95b8.js?ver=2.3.2')}}"></script>
   </body>
</html>