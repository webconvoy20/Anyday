@include('frontend.layout.header')
@include('frontend.layout.sidebar')
    <div class="innerpage-banner text-center partnerpage contact-banner">
        <img src="{{url('public/frontend/images/contact-banner.jpg')}}" class="img-fluid" title="" alt="" style="    border-bottom: 1px solid #d2d2d2;" />
        <div class="site-container">
            <div class="breadcumbs-sec">
            </div>
        </div>
    </div>
    <div class="inner-page-con partner-page contact-page">
        <div class="site-container flex-none">
            <div class="contact-details">
                <div class="contact-point mobile">
                    <div class="inner-point">
                        <div class="icon-box"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <h2>CONTACT DETAILS</h2>
                        <p>Please call or email contact form and we will be happy to assist you.</p>
                        <a href="tel:+91 9540394440"><h3>+91 9540394440</h3></a>
                    </div>
                </div>
                <div class="contact-point mobile">
                    <div class="inner-point">
                            <div class="icon-box"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <h2>EMAIL</h2>
                        <p>Please call or email contact form and we will be happy to assist you.</p>
                        <a href="mailto:+91 9540394440"><h3>support@anydaymoney.com</h3></a>
                    </div>
                </div>
                <div class="contact-point mobile">
                    <div class="inner-point">
                            <div class="icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <h2>ADDRESS</h2>
                        <p>Please call or email contact form and we will be happy to assist you.</p>
                        <h3>AnyDay Fintech Private Ltd., 101-104, Metro House, Mangaldas Road, Pune -411001</h3>
                    </div>
                </div>
            </div>
        </div>

        <section class="form-section contactform">
            <h2 class="text-center second-title"><span><strong>Contact </strong> Us</span></h2>
            <p class="text-center">Please call or email contact form and we will be happy to assist you.</p>
            <div class="enquiry-form">
                <form action="{{url('add-contact-form')}}" method="post" name="loginform" id="login-form">
                    @csrf
                    <div class="form-box half">
                        <input type="text" title="Full Name" name="full_name" placeholder="Full Name" required>
                        {{ $errors->first('full_name') }}
                    </div>
                    <div class="form-box half">
                        <input type="text" title="Email" name="email" placeholder="Email" required>
                        {{ $errors->first('email') }}
                    </div>
                    <div class="form-box">
                        <input type="text" title="Phone" name="phone" placeholder="Phone"required>
                        {{ $errors->first('phone') }}
                    </div>
                    
                    <div class="form-box">
                        <textarea name="message" placeholder="Message" required></textarea>
                        {{ $errors->first('message') }}
                    </div>
                    <div class="form-action">
                        <input type="submit" title="Submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>      
        </section>
        <section class="map-section">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=AnyDay%20Fintech%20Private%20Ltd.,%20101-104,%20Metro%20House,%20Mangaldas%20Road,%20Pune+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <script type='text/javascript' src='script.js?id=1c908b3e06f1be9ffcf0dc1b713d2510f638dac8'></script> 
        </section>
    </div>
@include('frontend.layout.footer')

<script>
    @if(session('success'))
        toastr.success("{{session('success')}}");
    @elseif(session('error'))
        toastr.error("{{session('error')}}");
    @endif
</script>