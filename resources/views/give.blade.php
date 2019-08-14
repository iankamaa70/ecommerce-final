 <style>
{
   .box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
}

.paypal {
  &-logo {
    font-family: Verdana, Tahoma;
    font-weight: bold;
    font-size: 26px;

    i:first-child {
      color: #253b80;
    }

    i:last-child {
      color: #179bd7;
    }
  }
  
  &-button {
    padding: 15px 30px;
    border: 1px solid #FF9933;
    border-radius: 5px;
    background-image: linear-gradient(#FFF0A8, #F9B421);
    margin: 0 auto;
    display: block;
    min-width: 138px;
    position: relative;
    
    &-title {
      font-size: 14px;
      color: #505050;
      vertical-align: baseline;
      text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);
    }
    
    .paypal-logo {
      display: inline-block;
      text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);
      font-size: 20px;
    }
  }
}
}
 </style> 
  @include('head')
   <body class="page-template page-template-templates page-template-page-flexible page-template-templatespage-flexible-php single single-page postid-7840 page page-id-7840 page-parent page-child parent-pageid-7724">
   <div class="wrapper js-wrapper">
     @include('menu')
     
     <div class="main js-main">
<section class="hero js-hero" data-module="hero" role="banner" aria-label="Johnson Cornell Tech MBA">
   <div class="hero__background" >
      <figure class="js-wrap image  image--cover hero__background-image" data-module="image">
<img class="image__img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-normal="{{ asset('2/wp-content/uploads/1.jpg')}}" data-retina="{{ asset('2/wp-content/uploads/1.jpg')}}"></figure>
   </div>
      <div class="container container--xl hero__container">
      <div class="hero__wrapper">
         <div class="hero__content">
                              <ul class="breadcrumb">
               <li class="breadcrumb__item"><a class="label-text breadcrumb__link" href="../../index.html">Giving</a></li>
               <li class="breadcrumb__item"><a class="label-text breadcrumb__link" href="../index.html">Donate</a></li>
         </ul>
                           <h1 class="main-title hero__title">You can always give without loving, but you can never love without giving.</h1>
                     </div>
      </div>
   </div>
</section>
   <div class="hero-after-group">
      
<nav class="local-nav" data-module="local-nav">
   <div class="container local-nav__container">
      <div class="local-nav__wrapper">
                     <h2 class="h3 sub-title-2 local-nav__headline">Giving</h2>
                  
      </div>
   </div>
</nav>

   <div class="section-gutter hero-icons">
      <div class="container">
         <div class="hero-icons__list">
               <div class="hero-icons__item">
                  <div class="hero-icons__item-inner">
                        <figure class="js-wrap image  image--contain hero-icons__image-figure image--loaded" data-module="image">
                        </figure>
                     <div class="hero-icons__content">
                        <h3 class="sub-title-2 heading-demi hero-icons__title"></h3>
                           <div class="p hero-icons__description"></div>
                     </div>
                  </div>
               </div>
               <div class="hero-icons__item">
                  <div class="hero-icons__item-inner">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank _top">
    <input type="hidden" name="cmd" value="_donations" />
    <input type="hidden" name="business" value="allanjiru@gmail.com" />
    <input type="hidden" name="item_name" value="Donate/ give to church" />
    <input type="hidden" name="currency_code" value="USD" />
    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;width: 100%;">
        <span style="font-family: Verdana, Tahoma;font-weight: bold;font-size: 26px;">
          <i style="color: #253b80">Pay</i><i style="color: #179bd7">Pal</i>
        </span>
        
        <br />
        
        <button style="padding: 15px 30px;border: 1px solid #FF9933;border-radius: 5px;background-image: linear-gradient(#FFF0A8, #F9B421);margin: 0 auto;display: block;min-width: 138px;position: relative;" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">
          <span style="font-size: 14px;color: #505050;vertical-align: baseline;text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);">
            Pay now with
          </span>
          <span style="display: inline-block;text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6);font-size: 20px;">
            <i style="color: #253b80">Pay</i><i style="color: #179bd7">Pal</i>
          </span>
        </button>
      </div>
 </form>
                     <div class="hero-icons__content">
                     </div>
                  </div>
               </div>

               
                           
               <div class="hero-icons__item">
                  <div class="hero-icons__item-inner">
                        <figure class="js-wrap image  image--contain hero-icons__image-figure image--loaded" data-module="image">
                        </figure>
                     <div class="hero-icons__content">
                        <h3 class="sub-title-2 heading-demi hero-icons__title"></h3>
                           <div class="p hero-icons__description"></div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
   </div>
      <main id="main_content" itemprop="mainContentOfPage" tabindex="-1">
      <div class="content section-gutter" >
   <div class="container">
      <div class="content__wysiwyg wysiwyg">
                  <div class="content__wysiwyg-inner">
            <div class="p-large" style="text-align: left;">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
            </div>

         </div>
      </div>
         </div>
</div>
   
      
   </main>
         </div>
         @include('footer2')

      <script type='text/javascript' src="{{URL::asset('2/wp-content/themes/cornell-tech/assets/main.minbec1.js?ver=de091c')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/jquery.json.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/gravityforms.min95b8.js?ver=2.3.2')}}"></script>
      <script type='text/javascript' src="{{URL::asset('2/wp-content/plugins/gravityforms/js/placeholders.jquery.min95b8.js?ver=2.3.2')}}"></script>
   </body>
</html>
