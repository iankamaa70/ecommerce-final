@include('header')

		<div class="breadcrumb">
            <div class="container">
               <div class="breadcrumb-inner">
                  <ul class="list-inline list-unstyled">
                     <li><a href="/shop">Home</a></li>
                     <li><a href="/cart">Cart</a></li>
                     <li class='active'>Checkout</li>
                  </ul>
               </div>
            </div>
         </div>

         <div class="body-content">
            <div class="container">
               <div class="row checkout outer-bottom-sm wow fadeInUp">
                  <div class="col-md-9 checkout-steps">
                     <div class="panel-group" id="accordion-checkout" role="tablist" aria-multiselectable="true">
                       <h3 class="checkout-title">checkout</h3>

                       @if ($errors->any())
                                
                       <div class="error">Please correct the following errors to proceed</div>
               
                       @endif
                        
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-checkout" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="step">1</span>Billing Information  </a> </h4>
                           
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                
                                 <div class="row billing">

                                    <form action="{{route('cart.create.order')}}" method="POST">
                                       @csrf
                                    <div class="col-md-6 col-sm-6 form-rimbus">                                       
                                          <div role="form" class="register-form form-group"> <label for="firstname" class="info-title">First Name <span>*</span></label>
                                              <input value="{{old('billingfirstname')}}" type="text" id="billingfirstname" name="billingfirstname" class="form-control text-input"> </div>                                       
                                          @if ($errors->has('billingfirstname'))
                                             <div class="error">{{ $errors->first('billingfirstname') }}</div>
                                          @endif
                                       </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group"> <label for="exampleInputlastname" class="info-title">Last Name <span>*</span></label>
                                              <input value="{{old('billinglastname')}}"  type="text" id="billinglastname" name="billinglastname" class="form-control text-input"> 
                                              @if ($errors->has('billinglastname'))
                                             <div class="error">{{ $errors->first('billinglastname') }}</div>
                                          @endif </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputaddress" class="info-title">Address Line 1 <span>*</span></label>
                                              <input value="{{old('billingaddress1')}}"  type="text" id="billingaddress1" name="billingaddress1" class="form-control text-input"> 
                                              @if ($errors->has('billingaddress1'))
                                             <div class="error">{{ $errors->first('billingaddress1') }}</div>
                                          @endif</div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputaddress2" class="info-title">Address Line 2</label>
                                              <input value="{{old('billingaddress2')}}"  name="billingaddress2" type="text" id="billingaddress2" class="form-control text-input"> 
                                              @if ($errors->has('billingaddress2'))
                                             <div class="error">{{ $errors->first('billingaddress2') }}</div>
                                          @endif</div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputcompanyname" class="info-title">Country <span>*</span></label> 
                                             <input value="{{old('country')}}"  type="text" name="country" id="billingcountry" class="form-control text-input"> 
                                             @if ($errors->has('country'))
                                             <div class="error">{{ $errors->first('country') }}</div>
                                          @endif</div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputcitytown" class="info-title">city/town <span>*</span></label>
                                              <input value="{{old('billingtown')}}"  type="text" name="billingtown" id="billingtown" class="form-control text-input">
                                              @if ($errors->has('billingtown'))
                                             <div class="error">{{ $errors->first('billingtown') }}</div>
                                          @endif </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group"> <label for="exampleInputstate" class="info-title">state <span>*</span></label>
                                              <input value="{{old('billingstate')}}"  type="text" name="billingstate" id="billingstate" class="form-control text-input">
                                             @if ($errors->has('billingstate'))
                                             <div class="error">{{ $errors->first('billingstate') }}</div>
                                          @endif </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputpostcode" class="info-title">postcode <span>*</span></label> 
                                             <input value="{{old('billingpostcode')}}"  type="text" name="billingpostcode" id="billingpostcode" class="form-control text-input">
                                             @if ($errors->has('billingpostcode'))
                                             <div class="error">{{ $errors->first('billingpostcode') }}</div>
                                          @endif </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputemailid" class="info-title">email-address <span>*</span></label>
                                              <input value="{{old('billingemail')}}"  type="text" name="billingemail" id="billingemail" class="form-control text-input">
                                             @if ($errors->has('billingemail'))
                                             <div class="error">{{ $errors->first('billingemail') }}</div>
                                          @endif </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-rimbus">
                                          <div role="form" class="register-form form-group">  <label for="exampleInputmobile" class="info-title">mobile <span>*</span></label>
                                              <input value="{{old('billingmobile')}}"  type="text" name="billingmobile" id="billingmobile" class="form-control text-input"> 
                                             @if ($errors->has('billingmobile'))
                                             <div class="error">{{ $errors->first('billingmobile') }}</div>
                                          @endif</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                         
                          
                           <div class="col-md-6 col-sm-6 form-rimbus"> <button style="margin-top:20px;" class="btn-upper btn btn-primary" type="submit">continue</button> </div>
                        </form>
                        </div>                       
                     </div>

                 <span style="float: right;">
                    <!-- -->
                 </span>
                  </div>


                  <div class="col-md-3 checkout-sidebar">
                     <div class="panel-group">
                        <h3 class="checkout-title">categories</h3>
                        <div class="panel panel-default">
                           <div class="panel-body">
                              <ul class="nav nav-checkout-progress list-unstyled">
                                 <li><a href="#">Billing Address</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         @include('footer')
      
      
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{URL::asset('1/assets/js/jquery-1.11.2.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap-slider.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/owl.carousel.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/bootstrap-hover-dropdown.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/jquery.custom-select.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/echo.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/lightbox.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/pace.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/jquery.easing-1.3.min.js')}}"></script> 
      <script src="{{URL::asset('1/assets/js/wow.min.js')}}"></script> 
      <script src="{{URL::asset('assets/js/scripts.min.js')}}"></script> 
      <script src="{{URL::asset('switchstylesheet/switchstylesheet.js')}}"></script> 
      
      <script type="text/javascript">
         $("#same_address").change(function(){
           if($("#same_address").is(":checked")){
                  console.log("changed");

            $("#shippingfirstname").val($("#billingfirstname").val());
            $("#shippinglastname").val($("#billinglastname").val());
            $("#shippingaddress1").val($("#billingaddress1").val());
            $("#shippingaddress2").val($("#billingaddress2").val());
            $("#shippingtown").val($("#billingtown").val());
            $("#shippingstate").val($("#billingstate").val());
            $("#shippingpostcode").val($("#billingpostcode").val());
            $("#shippingemail").val($("#billingemail").val());
            $("#shippingmobile").val($("#billingmobile").val());

           }
         })
      </script>
   </body>
</html>