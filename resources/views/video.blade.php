@include('head')
<body class="page-template page-template-templates page-template-page-flexible page-template-templatespage-flexible-php single single-page postid-7873 page page-id-7873 page-parent">
    <div class="wrapper js-wrapper">
@include('menu')
<section class="hero js-hero" data-module="hero" role="banner" aria-label="News">
               <div class="hero__background" >
                  <figure class="js-wrap image  image--cover hero__background-image" data-module="image">
                     <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset('2/wp-content/uploads/1.jpg')}}" data-retina="{{ asset('2/wp-content/uploads/1.jpg')}}" >
                  </figure>
               </div>
               <div class="container container--xl hero__container">
                  <div class="hero__wrapper">
                     <div class="hero__content">
                        <h1 class="main-title hero__title">On-Demand Videos</h1>
                     </div>
                  </div>
               </div>
            </section>
<br>

<section class="section-gutter hero-grid" role="region" aria-label="Content grid">
    <div class="container hero-grid__container">
    </div>
                        
                    
</section>



<section class="section-gutter card-video ">
        <div class="container card-video__container">
            <div class="card-video__inner">

                <div class="row">
                    <div class="column2" align="center" style="">
                        @foreach($videos as $video)
                          <video width="100%" video="100%" style="width:100%, height:100%" controls src="{{URL::asset($video->video)}}">
                        @endforeach
                    </div>
                    <div class="column" align="center" >
                       <ul>
                        @foreach($vidas as $vida)
                          <li>
                             <a target="blank" href="{{ route('video.single', ['id' => $vida->id]) }}"><img src="{{ URL::asset($vida->image) }}" width="100px" height="50px"></a>
                          </li>
                        @endforeach
                       </ul>
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
