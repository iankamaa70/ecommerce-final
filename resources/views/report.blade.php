@include('head')
   <body class="page-template page-template-templates page-template-page-news-landing page-template-templatespage-news-landing-php single single-page postid-7757 page page-id-7757">
      <div class="wrapper js-wrapper">
            @include('menu')
         <div class="main js-main">
            <section class="hero js-hero" data-module="hero" role="banner" aria-label="News">
               <div class="hero__background" >
                  <figure class="js-wrap image  image--cover hero__background-image" data-module="image">
                     <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset('2/wp-content/uploads/1.jpg')}}" data-retina="{{ asset('2/wp-content/uploads/1.jpg')}}" >
                  </figure>
               </div>
               <div class="container container--xl hero__container">
                  <div class="hero__wrapper">
                     <div class="hero__content">
                        <h1 class="main-title hero__title">News</h1>
                     </div>
                  </div>
               </div>
            </section>
            <main id="main_content" itemprop="mainContentOfPage" tabindex="-1">
               
               <section class="section-gutter archive-list archive-list--landing" role="region" aria-label="All news">
                  <div class="container archive-list__container">
                     <div class="archive-list__wrapper">
                        <div class="archive-list__header">
                           <h2 class="secondary-title section-title-gutter">News</h2>
                        </div>
                        <div class="archive-list__articles js-load-more-container">

                           @foreach($reports as $report)
                           <article class="card-news">
                              <div class="card-news__inner">
                                 <div class="card-news__image-inner">
                                    <a class="button-link card-news__image-cta" href="cornell-tech-bloomberg-speaker-series-chad-dickerson-and-bradley-horowitz/index.html" title="Cornell Tech @ Bloomberg Speaker Series: Chad Dickerson and Bradley Horowitz">
                                       <figure class="js-wrap image  image--cover card-news__image-figure" data-module="image">
                                          <img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset($report->image) }}" data-retina="{{ asset($report->image) }}" >
                                       </figure>
                                    </a>
                                 </div>
                                 <div class="card-news__block-content">
                                    <h4 class="card-news__title">
                                       <a class="main-heading card-news__link" href="{{ route('report.single', ['id' => $report->id]) }}">{{ $report->name }}</a>
                                    </h4>
                                    <div class="card-news__footer">
                                       <a class="button-link" href="{{ route('report.single', ['id' => $report->id]) }}">
                                       <span>Read</span>
                                       <span class="icon-arrow">					
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </article>                          
                           @endforeach

                        </div>                       
                     </div>
                  </div>
               </section>

               
            </main>
         </div>

      @include('footer2')

      <script type='text/javascript' src="{{URL::asset('2/wp-content/themes/cornell-tech/assets/main.minbec1.js?ver=de091c')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/jquery.json.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/gravityforms.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/placeholders.jquery.min95b8.js?ver=2.3.2')}}"></script>
   </body>
</html>