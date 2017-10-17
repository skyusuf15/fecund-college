@extends('layouts.app')


@section('page-content')
<!-- contact -->
	<div class="mail">
					<div class="mail-grid1">
                        <div class="container">

                            <h3 class="tittle-w3">Contact <span>Info</span></h3>

                            <div class="col-md-4 mail-agileits-w3layouts">

                                <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>

                                <div class="contact-right">

                                    <p>Phone</p><span>+234 7066931889</span>

                                </div>

                            </div>

                            <div class="col-md-4 mail-agileits-w3layouts">

                                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>

                                <div class="contact-right">

                                    <p>Email</p><a href="mailto:fecundcollege@gmail.com

">

                                        fecundcollege@gmail.com

                                    </a>

                                </div>

                            </div>

                            <div class="col-md-4 mail-agileits-w3layouts">

                                <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>

                                <div class="contact-right">

                                    <p>Address</p><span>SHOP 41,<br /> IMOTA SHOPPING COMPLEX,<br /> IFAKO GBAGADA. LAGOS.</span>

                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
					</div>
					
				<div class="col-md-7 map ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6455495560404!2d3.3861276142434744!3d6.566343795250935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d7d5ca3af85%3A0xb1bd83b5a59533a2!2s57+Yetunde+Brown+Rd%2C+Gbagada%2C+Lagos!5e0!3m2!1sen!2sng!4v1495813214204" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					<div class="col-md-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Send a </span>Message</h3>
                        <form id="contact_form" method="POST">

                            {{ csrf_field() }}

                             <div class="form-group">
                                <div class="col-xs-9">

                                   
                                @if (count($errors))
                                    <ul id="errors">
                                        @foreach($errors->all() as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                @endif

                                </div>
                            </div>
                            
                            <input type="text" name="guest_name" placeholder="Name" required="" value="{{ old('guest_name') }}" />

                            <input type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}" />

                            <textarea name="message" placeholder="Type Your Text Here...." required="" >{{ old('message') }}</textarea>

                            <input type="submit" id="send_msg" value="Submit">

                        </form>
					</div>
					<div class="clearfix"></div>
				</div>
	<div class="contact-btm-w3ls">
				<h3 class="tittle-w3"><span>Get in touch </span>with us</h3>
				<ul>
                    <li><a href="https://www.facebook.com/Fecundcollege/" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/fecundcollege/?hl=en" target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>		
				</ul>
				
					<div class="clearfix"></div>
			</div>
<!-- //contact -->
@endsection



@section('script')
<script src="js/load.js"></script>
@endsection