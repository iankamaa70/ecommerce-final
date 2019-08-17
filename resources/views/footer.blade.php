<footer>
            <div class="footer-v1">
               <div class="footer-outer-1">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 company-info">
                           <div class="logo">
                              <h1>S.I.S.D.A.C</h1>
                           </div>
                           <p>
                              
                           </p>
                           
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 foot-menu information">
                           <div class="foot-menu-outer">
                              <div class="foot-title">
                                 <h4 class="title">information</h4>
                              </div>
                              <div class="list-links">
                                 <ul class="foot-link list-unstyled">
                                    <li><a href="/give">Giving</a></li>
                                    <li><a href="/shop">Store</a></li>
                                    <li><a href="{{ route('event') }}">Events</a></li>
                                    <li><a href="{{ route('report') }}">News</a></li>
                                    <li><a href="{{ route('video') }}">Watch on demand</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 latest-tweet">
                           <div class="foot-title">
                              <h4 class="title">latest tweet</h4>
                           </div>
                           <div class="social-network">
                              <h4 class="title">folow us on</h4>
                              <div class="footer-social">
                                 <ul class="social-links list-unstyled list-inline">
                                    <li><a href="{{ $settings-> fb}}" class="link"><span class="icon facebook"><i class="fa fa-facebook"></i></span></a></li>
                                    <li><a href="{{ $settings->twitter }}" class="link"><span class="icon twitter"><i class="fa fa-twitter"></i></span></a></li>
                                    <li><a href="{{ $settings->youtube }}" class="link"><span class="icon google-youtube"><i class="fa fa-youtube"></i></span></a></li>
                                    <li><a href="{{ $settings->li }}" class="link"><span class="icon linkedin"><i class="fa fa-linkedin"></i></span></a></li>
                                    <li><a href="{{ $settings->ig }}" class="link"><span class="icon instagram"><i class="fa fa-instagram"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="contact more-info">
                                       <div class="contact-outer">
                                          <div class="foot-title">
                                             <h4 class="title">more info</h4>
                                          </div>
                                          <div class="location media">
                                             <span class="map icon media-left"> <i class="fa fa-map-marker"></i> </span> 
                                             <div class="content media-body">
                                                <address>{{ $settings->contact_address }}</address>
                                             </div>
                                          </div>
                                          <div class="phone-no media"> <span class="phone icon media-left"> <i class="fa fa-phone"></i> </span> <span class="content media-body"> <span class="contact-no">{{ $settings->contact_phone }}</span></div>
                                          <div class="email-id media"></div>
                                       </div>
                                    </div>
                        <div class="clearfix"></div>

                       

                     </div>
                  </div>
               </div>
               <div class="footer-outer-2 outer-top-vs">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-6">
                           <p class="copy-rights">copyright <i class="fa fa-copyright"></i> 2019 <a href="#"></a> all the rights reserved.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>