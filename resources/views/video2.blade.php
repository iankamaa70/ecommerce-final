@include('head')
<body class="page-template page-template-templates page-template-page-flexible page-template-templatespage-flexible-php single single-page postid-7873 page page-id-7873 page-parent">
    <div class="wrapper js-wrapper">
@include('menu')
<section class="hero hero--small js-hero" data-module="hero" role="banner" aria-label="Videos">
	<div class="hero__background" style="background-color: #323A46">
			</div>
		<div class="container container--xl hero__container">
		<div class="hero__wrapper">
			<div class="hero__content">
													<h1 class="main-title hero__title">Videos</h1>
							</div>
		</div>
	</div>
</section>
<br>

<section class="section-gutter hero-grid" role="region" aria-label="Content grid">
    <div class="container hero-grid__container">
                        <h2 class="h2 hero-grid__title">Watch on demand videos.</h2>
                    
</section>

<section class="section-gutter card-video section-bg">
        <div class="container card-video__container">
            <div class="card-video__inner">
                <div class="card-video__video">
                    <div class="video js-video" data-video-iframe="video-5d480f228c18a" data-module="video">

                        <video width="575" height="350" controls src="{{URL::asset($video->video)}}">
                       

                        <div class="icon-play video__button">
                            <span class="video__inner"></span>
                         </div>
                    </div>
                </div>
                
                <div class="card-video__content">
                    <ul>
                      @foreach($vidas as $vida)
                      <li>
                        <h2><a href="{{ route('video.single', ['id' => $vida->id]) }}">{{ $vida->name }}</a></h2>
                      </li>
                      @endforeach
                    </ul>
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
