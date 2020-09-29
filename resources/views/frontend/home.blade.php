@include('frontend.layout.header')
@include('frontend.layout.sidebar')

<section class="slider-sec">
    <div class="mainslider">    
        <div class="slide"> 
            <a href="#" class="visible-xs"> 
                <img class="img-fluid firstoanimg visible-xs" src="{{url('public/frontend/images/mobile-banner1.jpg')}}" alt="Anyday Money" title="Anyday Money" />    
            </a>
            <img class="img-fluid firstoanimg hidden-xs" src="{{url('public/frontend/images/slideone.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            <div class="site-container banner-con hidden-xs">
                <div class="caption-sec">
                    <h2>Getting a loan is now<br>easier and quicker with</h2>
                    <h4>Anyday Money</h4>
                    <p class="easy-process">Quick & Easy Loan application process</p>
                    <p class="norepayment">No repayment or foreclosure charges</p>
                    <p class="no-distu">Direct disbursement to bank account</p>
                    <div class="action-btn">
                        <a href="#" title="Apply Now" class="redbtn ragister">Apply Now</a>             
                    </div>
                    <!-- end of action-btn-->
                </div>
            </div>
        </div>
        <div class="slide"> 
            <a href="#" class="visible-xs"> 
                <img class="img-fluid visible-xs" src="{{url('public/frontend/images/mobile-banner2.jpg')}}" alt="Anyday Money" title="Anyday Money" />    
            </a>
            <img class="img-fluid hidden-xs" src="{{url('public/frontend/images/peronalloan-home.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            <div class="site-container banner-con other-banner hidden-xs">
                <div class="caption-sec secondformate">
                    <h2>Personal Loans</h2>
                    <h4>Mid-month cash crunch?</h4>
                    <p class="normal-para">No more problem  now with  AnyDay Money Loans</p>    
                    <p class="easy-process">Quick & Easy Loan application process</p>
                    <p class="norepayment">No repayment or foreclosure charges</p>
                    <p class="no-distu">Direct disbursement to bank account</p>
                    <div class="action-btn">
                        <a href="#" title="Apply Now" class="redbtn ragister">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide"> 
            <a href="#" class="visible-xs">     
                <img class="img-fluid visible-xs" src="{{url('public/frontend/images/mobile-banner3.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            </a>    
            <img class="img-fluid hidden-xs" src="{{url('public/frontend/images/business-loan-home.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            <div class="site-container banner-con other-banner hidden-xs">
                <div class="caption-sec secondformate">
                    <h2>Business Loans</h2>
                    <h4>Need funds to manage<br> and grow your business?</h4>
                    <p class="normal-para">Apply for quick business loans</p>
                    <p class="easy-process">Quick & Easy Loan application process</p>
                    <p class="norepayment">No repayment or foreclosure charges</p>
                    <p class="no-distu">Direct disbursement to bank account</p>
                    <div class="action-btn">
                        <a href="#" title="Apply Now" class="redbtn ragister">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide"> 
            <a href="#" class="visible-xs">     
                <img class="img-fluid visible-xs" src="{{url('public/frontend/images/mobile-banner4.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            </a>    
            <img class="img-fluid hidden-xs" src="{{url('public/frontend/images/medicalloan-home.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            <div class="site-container banner-con other-banner hidden-xs">
                <div class="caption-sec secondformate">
                    <h2>Medical Loans</h2>
                    <h4>Sudden medical emergencies?</h4>
                    <p class="normal-para">Take care of your loved ones while we<br> take care of your financial worries </p>
                    <p class="easy-process">Quick & Easy Loan application process</p>
                    <p class="norepayment">No repayment or foreclosure charges</p>
                    <p class="no-distu">Direct disbursement to bank account</p>
                    <div class="action-btn">
                        <a href="#" title="Apply Now" class="redbtn ragister">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide"> 
            <a href="#" class="visible-xs">     
                <img class="img-fluid visible-xs" src="{{url('public/frontend/images/mobile-banner5.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            </a>
            <img class="img-fluid hidden-xs" src="{{url('public/frontend/images/education-lloan.jpg')}}" alt="Anyday Money" title="Anyday Money" />
            <div class="site-container banner-con other-banner hidden-xs">
                <div class="caption-sec secondformate">
                    <h2>Education Loans</h2>
                    <h4>Enabling higher education<br> to meet your life goals</h4>
                    <p class="easy-process">Quick & Easy Loan application process</p>
                    <p class="norepayment">No repayment or foreclosure charges</p>
                    <p class="no-distu">Direct disbursement to bank account</p>
                    <div class="action-btn">
                        <a href="#" title="Apply Now" class="redbtn ragister">Apply Now</a>
                    </div>
                </div>
            </div>
    </div>
</section>
<section class="product-sec">
    <h2 class="sub-title text-center"><span>Products</span></h2>
    <div class="site-container">
        <div class="pro-column text-center">
            <div class="inner-col addmoney">
                <div class="img-box">
                </div>
                <h2>Personal Loan</h2>
                <a href="personal-loan.html">Learn More ></a>
            </div>
        </div>
        <div class="pro-column text-center">
            <div class="inner-col business">
                <div class="img-box">
                </div>
                <h2>Business Loan</h2>
                <a href="business-loan.html">Learn More ></a>
            </div>
        </div>
        <div class="pro-column text-center">
            <div class="inner-col medical">
                <div class="img-box">
                </div>
                <h2>Medical Loan</h2>
                <a href="medicalloan.html">Learn More ></a>
            </div>
        </div>
        <div class="pro-column text-center">
            <div class="inner-col education">
                <div class="img-box">
                </div>
                <h2>Education Loan</h2>
                <a href="education-loan.html">Learn More ></a>
            </div>
        </div>
    </div>
</section>
<section class="why-anyday">
    <h2 class="sub-title text-center"><span>Why Anyday Money</span></h2>
    <p class="subtitle text-center">A wide range of features and benefits</p>

    <div class="site-container text-center">
        <div class="whybox easy-paperless">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>Easy, paperless<br> application process</h2>
            </div>
        </div>
        <div class="whybox quick-app">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>Quick <br> Approval</h2>
            </div>
        </div>
        <div class="whybox flexible-tuner">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>Flexible<br> tenures</h2>
            </div>
        </div>
        <div class="whybox no-collaterals">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>No<br>collaterals</h2>
            </div>
        </div>
        <div class="whybox minimum-doc">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>Minimum <br> Documentation</h2>
            </div>
        </div>
        <div class="whybox no-prepaymnet">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>No Pre-payment<br>charges</h2>
            </div>
        </div>
        <div class="whybox no-foreclosure">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>No foreclosure<br> charges</h2>
            </div>
        </div>
        <div class="whybox easy-process">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>Easy Application <br> Process</h2>
            </div>
        </div>
        <div class="whybox no-hiddencharge">
            <div class="whyinner">
                <div class="whyimgbox">
                </div>
                <h2>No hidden<br> charges</h2>
            </div>
        </div>
    </div>
</section>
<section class="how-its-work text-center" id="howapply">
    <h2 class="sub-title text-center"><span>How to Apply?</span></h2>
    <p class="text-center">4 easy and quick steps to apply for <br>Anyday Money Loan</p>
    <div class="site-container">    
        <div class="step-box quick-appli">
            <div class="step-inner">
                <div class="stepimgbox">
                </div>
                <!-- end of whyimgbox -->
                <h2>Quick Application</h2>
                <p>Enter basic details to<br>build your profile</p>
            </div>
            <!-- end of whyinner -->
        </div>
        <div class="step-box Pre-approved">
            <div class="step-inner">
                <div class="stepimgbox">
                </div>
                <h2>Pre-approved eligibility</h2>
                <p> Your eligibility will be<br/>calculated on the basis<br/>of your profile details</p>
            </div>
        </div>
        <div class="step-box submit-doc">
            <div class="step-inner">
                <div class="stepimgbox">
                </div>
                <h2>Submit documents</h2>
                <p>Upload necessary<br/>documents digitally<br/>for quick credit approval</p>
            </div>
        </div>
        <div class="step-box disbursement">
            <div class="step-inner">
                <div class="stepimgbox">
                </div>
                <h2>Disbursement</h2>
                <p>Approved loan amount<br/>credited to your<br/>bank account </p>
            </div>
        </div>
    </div>
    <a href="#" class="redbtn ragister">Apply Now</a>
</section>
<section class="calculater-sec">
    <h2 class="sub-title text-center"><span>Calculate your EMI</span></h2>
    <p class="text-center subtitle">Check Your Loan EMI With The Calculator Given As Per Your Convenience. You Can Check <br>Your Repayment Amount By Choosing Loan Amount, Tenure And Interest </p>
    <div class="site-container">
        <div class="cal-box">
            <div class="left-side">
                <div class="form-field">
                    <div class="select-box">
                        <select>
                            <option>Select Loan Type</option>
                            <option>Personal Loan</option>
                            <option>Business Loan</option>
                            <option>Medical Loan</option>
                            <option>Education Loan</option>
                        </select>
                    </div>
                </div>
                <div class="range-box">
                <div class="slidecontainer">
                    <p>Loan Amount <span id="loan-amount">&#x20B9;10,00,000</span> <label class="last-span">INR</label></p> 
                    <div id="amount-slider"></div>
                    <div class="slidertext">
                    </div>          
                </div>
                <!-- end of slidecontainer -->              

                <div class="slidecontainer">
                    <p>Loan Tenure <span id="loan-period">10</span> <label class="last-span">Months</label></p> 
                    <div id="period-slider"></div>
                    <div class="slidertext">
                    </div>          
                </div>
                <!-- end of slidecontainer -->

                <div class="slidecontainer">
                    <p>Interest Rate <span id="loan-rate">12%</span></p>    
                    <div id="rate-slider"></div>
                    <div class="slidertext">
                    </div>          
                </div>
                <!-- end of slidecontainer -->
                </div>
            </div>
            <!-- end of left-side -->
            <div class="right-side">
                <div class="inner-right">
                <div class="total-amount">
                    <p>Total Amount</p>
                    <h2>10,00,000<span>INR</span></h2>
                </div>
                <div class="emi-details">
                    <div class="monthly-emi">
                        <p>Monthly EMI</p>
                    <h2>35,100<span>INR</span></h2>
                    </div>
                    <!-- end of monthly-emi -->
                    <div class="interest-rate">
                        <p>Interest Amount</p>
                    <h2>7000<span>INR</span></h2>
                    </div>
                    <!-- end of interest-rate -->
                </div>
                <!-- end of emi-details -->
                <a href="#" class="redbtn">Apply Now</a>
            </div>
            </div>
            <!-- end of right-side -->
        </div>
    </div>
</section>
<section class="download-app">
    <div class="site-container">
        <div class="left-side">
            <img src="{{url('public/frontend/images/anyday-logo.svg')}}" title="Anyday Money" alt="Anyday Money">
            <h2>Download<br> <strong>AnyDay Money</strong> <br> Mobile App</h2>
            <p>Loans to suit all your short-term needs</p>
            <div class="app-img">
                <a href="https://play.google.com/store/apps/details?id=in.publicam.advancesalary" target="_blank"><img class="img-fluid" src="{{url('public/frontend/images/googleplay.png')}}" title="" alt=""></a>
                <a href="https://apps.apple.com/in/app/anyday-money/id1445823067" target="_blank"><img class="img-fluid" src="{{url('public/frontend/images/app-store-img.png')}}" title="" alt=""></a>
            </div>
        </div>
    </div>      
</section>
<section class="testimonial-sec">
    <h2 class="sub-title text-center"><span>Testimonials</span></h2>
    <div class="center slider">
        <div>
            <div class="testimonial-box">
                <img class="img-fluid" src="{{url('public/frontend/images/tsimo-star.png')}}" title="" alt="">
                <p class="testi-con">This app is genuine and people are really helpful. They would understand your need and go extra mile to assist you.Super Awesome! Keep up the good work!</p>
                <h5 class="authername">Sourav Tiwari</h5>
                
            </div>
        </div>
        <div class="testimonial-box">
            <img class="img-fluid" src="{{url('public/frontend/images/tsimo-star.png')}}" title="" alt="">
            <p class="testi-con">Great App to apply personal loans for salaried class. Simple user interface and great customer service. Credit staff user friendly.</p>
            <h5 class="authername">Monika Shah</h5>
        </div>
        <div class="testimonial-box">
            <img class="img-fluid" src="{{url('public/frontend/images/tsimo-star.png')}}" title="" alt="">
            <p class="testi-con">Super awesome credit services or I would say one of the best services so far. Just one phone call and meet up with documents and all was done in just 24hrs and the amount was in my account .....a big thank you once again</p>
            <h5 class="authername">Rahul Devan</h5>
        </div>
        <div class="testimonial-box">
            <img class="img-fluid" src="{{url('public/frontend/images/tsimo-star.png')}}" title="" alt="">
            <p class="testi-con">Very efficient and excellent service and really helpful application when you need money on urgent basis. Excellent app really helpful.</p>
            <h5 class="authername">Mahesh Bhosale</h5>
        </div>
    </div>
</section>

@include('frontend.layout.footer')
