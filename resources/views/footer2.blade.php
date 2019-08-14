         <footer class="footer">
            <div class="footer__wrapper">
               <div class="container footer__container">
                  <div class="footer__inner">
                     <div class="footer__block-main">
                        <div class="footer__block-menu">
                           <div class="footer__widget" id="footer-about">
                              <h4 class="label-text footer__widget-title" data-module="toggle-class" data-toggle-class='{"target": "#footer-about", "class": "footer__widget--activate"}'>Links<span class="icon-triagle-down footer__widget-icon"></span></h4>
                              <ul id="menu-about-footer" class="footer__menu">
                                 <li id="menu-item-10316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10316"><a href="/give" aria-label="Giving">Giving</a></li>
                                 <li id="menu-item-10319" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10319"><a href="/shop" aria-label="Store">Store</a></li>
                                 <li id="menu-item-10317" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10317"><a href="{{ route('event') }}" aria-label="Events">Events</a></li>
                                 <li id="menu-item-10318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10318"><a href="jobs/index.html" aria-label="Watch on demand">Watch on demand</a></li>
                              </ul>
                           </div>
                           <div class="footer__block-newsletter">
                              <h4 class="label-text footer__widget-title" data-module="toggle-class" data-toggle-class='{"target": "#footer-resources", "class": "footer__widget--activate"}'>Contact Us<span class="icon-triagle-down footer__widget-icon"></span></h4>
                              <ul id="menu-resources-footer" class="footer__menu">
                                 <li id="menu-item-10321" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10321"><a  aria-label="Terms &#038; Conditions">Email: info@email.com</a></li>
                                 <li id="menu-item-10322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10322"><a  aria-label="Privacy Policy">Phone: 1 234 567 8912</a></li>
                                 <li id="menu-item-10323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10323"><a  aria-label="Accessibility">Loop Road, New York, NY 10044</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="footer__block-newsletter">
                           <h4 class="label-text footer__widget-title">Connect with us</h4>
                           <div class="newsletter">
                              <div class="newsletter__wrapper">
                                 <div class="newsletter__block newsletter__block--input-group gravity-form gravity-form--newsletter">
                                    <div class='gf_browser_chrome gform_wrapper newsletter__input-group_wrapper' id='gform_wrapper_1' >
                                       <a id='gf_1' class='gform_anchor' ></a>
                                       <form method='post' class='newsletter__input-group' action='/subscribe'>
                                          {{csrf_field()}}
                                          <div class='gform_body'>
                                             <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                                                <li id='field_1_1'  class='gfield field_sublabel_below field_description_above gfield_visibility_visible' >
                                                   <label class='gfield_label' for='input_1_1' >Email Address</label>
                                                   <div class='ginput_container ginput_container_email'>
                                                      <input name='email' type='text' class='medium' required="required"   placeholder='Email Address'  aria-invalid="false"/>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class='gform_footer top_label'> <button class="gform_button button" type="submit" >Subscribe</button>
                                          </div>
                                       </form>
                                    </div>  
                                 </div>
                              </div>
                           </div>
                           <div class="footer__block-social">
                              <ul class="social-links social-links--footer">
                                 <li class="social-links__item">
                                    <a class="social-links__link" href="https://www.facebook.com/" target="_blank" title="facebook"><span class="icon-facebook"></span></a>
                                 </li>
                                 <li class="social-links__item">
                                    <a class="social-links__link" href="https://twitter.com/" target="_blank" title="twitter"><span class="icon-twitter"></span></a>
                                 </li>
                                 <li class="social-links__item">
                                    <a class="social-links__link" href="https://www.youtube.com/" target="_blank" title="youtube-play"><span class="icon-youtube-play"></span></a>
                                 </li>
                                 <li class="social-links__item">
                                    <a class="social-links__link" href="https://www.linkedin.com/" target="_blank" title="linkedin"><span class="icon-linkedin"></span></a>
                                 </li>
                                 <li class="social-links__item">
                                    <a class="social-links__link" href="https://www.instagram.com" target="_blank" title="instagram"><span class="icon-instagram"></span></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  
                  </div>
               </div>
            </div>
         </footer>
      </div>