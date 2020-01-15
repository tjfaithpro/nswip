
@include('layout.header')
   

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>NIGERIA SCHOOL WEB IDENTITY PROJECT</h1>
                <span>Welcome to Nigeria School Web Identity Project Processing Website</span>
                              </div>
                  </div>                  
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                   
                        <h4>Let’s Talk More About NSWIP</h4>
                        <p>N-SWIP is an initiative from Tectainet Technologies and Oly-Florish Limited to promote Government directive on allocated SLD designated for Nigerian Schools,as well as encouraging school technology, exposing the students with the use of educative smart devices, this project is centered on “.SCH.NG.”SLD 
<p>.sch.ng Domains are primarily intended for Nigerian Primary schools, Secondary schools and other non-degree awarding institutions.</p>
<p>The .sch.ng SLD is a closed one and reserved for both primary and secondary schools as designated and approved by various levels of the Nigerian government. Also, schools accredited and approved by other agencies like the CPN are eligible for registration under this domain.</p>
<p></p>
<h4>Criteria to get .SCH.NG Domains</h4>

An applicant for a .sch.ng domain has to be government Approved School
<h4>Method of Application</h4>
A copy of the letter of approval from the government by the school to apply for website on sch.ng SLD
<p>Kindly go to payment page for payment instruction, then proceed to application</p>
 </p>
                        <div class="primary-button">
                          <a target="_blank"href="{{ url('/registration') }}">Start Registration</a>

                        </div>
                      </div>

                      <div class="content first-content">
                         <p class="text-center" style="text-align: center;">
                             Click Complete Application to complete your application after payment has been made</p>
                            <div class="primary-button" style="text-align: center;">
                               <a target="_blank" href="{{url('/completeRegistration')}}">Complete Registration</a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>About NSWIP</h1>
                <span>Get More Info About NSWIP</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{asset('img/left-about-image.jpg')}}">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>NSWIP Mission</h4>
                              <p>To encourage the purpose of .sch.ng as well as the standard identity of Nigeria Government aproaved schools on the web, on the allocated .sch.ng SLD for primary and secondary school by NIRA.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>NSWIP Help schools standard web presence, helping the school to develop interactive school website at extremily low cost, get the registered on the .sch.ng SLD</p>
                              <p>NSWIP developed website can be maintained over years without stress</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="{{asset('img/right-about-image.jpg')}}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Featured</h1>
                <span>Facilities that comes with NSWIP .sch.ng Process</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{asset('img/left-feature-image.png')}}">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
                              <h4>Facilities and Bonus on .SCH.NG Website Integration: <em>NSWIP</em></h4>
                              <p>The following futures will be on all .scn.ng website proccessed under this project</p>
                              <div class="feature-list">
                                <ul>
                                  <p>- Fully academic interactive and responsive website.</p>
                                  <p>- Unlimited Official Email Accounts (For Management desk, Staff and Students)</p>
                                  <p>- Self Managing Backend</p>
                                  <p>- Certificate of Approval</p>
                                  <p>- Access to your Website Cpanel </p>
                                  <p>- Upto 5 Subdomain </p
                                  ><p>- Academy Portal System(2nd Phase) </p>
                                  <p>- Smart Devices Integration(2nd Phase) </p>
                                </ul>
                              </div>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Our projects</h1>
                <span>Here you can check our recent projects</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                             <i><a href="http://canaanacademy.sch.ng" data-lightbox="image-1"><img src="{{asset('img/project-item-01.jpg')}}"></i></a></i>
                          </div>
                          <div class="col-md-3 project-item">
                            <i><a href="http://ezekiel.sch.ng" data-lightbox="image-1"><img src="{{asset('img/project-item-02.jpg')}}"></i></a></i>
                          </div>
                          <div class="col-md-3 project-item">
                           <i><a href="http://nasif-akofat.sch.ng" data-lightbox="image-1"><img src="{{asset('img/project-item-03.jpg')}}"></i></a></i>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-04.jpg" data-lightbox="image-1"><img src="{{asset('img/project-item-04.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-05.jpg" data-lightbox="image-1"><img src="{{asset('img/project-item-05.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-06.jpg" data-lightbox="image-1"><img src="{{asset('img/project-item-06.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-07.jpg" data-lightbox="image-1"><img src="{{asset('img/project-item-07.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-08.jpg" data-lightbox="image-1"><img src="{{asset('img/project-item-08.jpg')}}"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>




            {{-- REGISTER SECTION ======================================= --}}
   <li>
      <div class="heading register">
          <h1>Register Webiste</h1>
          <span>NSWIP Registration Proceesing Website</span> 
      </div>
      <div class="cd-half-width third-slide">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="content third-content">
                          <div class="row">
                            <div class="col-md-3 left-image">
                                <img src="{{asset('img/School.png')}}">
                            </div>
                            <div class="col-md-9">
                                <h2  style="text-align: center;">KINDLY READ THE INSTRUCTION BEFORE PROCCEEDING</h2>
                                <hr>
                                <div style="text-align:justify">
                                <p style="color:red"><b> Please note that your NSWIP processing and development takes 10 working days</b></p>

                                <p>Development and hosting  will be done within the said 10 working days from the first day of successful completion of process</p>

                                <p>Once the setup is completed, you shall be notified via email. Setup and procesing fee cost N12,800 to be paid in advance via bank to any of the following account. Ensure to make payment details with the School Name or ID Generated for your School</p>
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4" style="text-align:center">
                            <img src="{{asset('/img/remitaPay.jpeg')}}"/>
                              {{-- <h3>ACCOUNT DETIALS</h3>
                              <p>0148991672(GTBANK)</p>
                              <p>0696544334(ACCESSBANK)</p>
                              <p>0122211218(WEMABANK)</p>
                              <p>ACCOUNT NAME - TECTAINET TECHNOLOGIES</p> --}}
                            </div>
                            <div class="col-md-8">
                              <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center" style="text-align: center;">Fresh Application</p>
                              
                                    <div class="primary-button">
                                        <a target="_blank"href="{{ url('/registration') }}">Start Registration</a>
                                      </div>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                  <div class="col-md-12">
                                      <p class="text-center" style="text-align: center;">When payment is been made, kindly procceed by Clicking Complete Application</p>
                                      <div class="primary-button" style="text-align: center;">
                                                               <a target="_blank"href="{{url('/completeRegistration')}}">Complete Registration</a>
                                                               </div>
                                  </div>
                              </div>
                            </div>
                            
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </li>


            
            <li>
              <div class="heading">
                <h1>Contact us</h1>
                <span>You'll be responded within 48 hrs</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p>Do you need more information about NSWIP or have issues to resolve on it Visit 
                              <br><br>
                              <em>Suite 8, Elano Plaza, 30 Iju Road, Oyemekun Junction, Opposite Abundant Life Church, Agege Lagos State<br>Lagos Nigeria 10005</em>
                              </p>
                              <br><br>
                              <em>Desk: +2348188885466</p>
                               <em>Email: enquiries@nswip.org.ng</p>
                              <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form id="contact" action="" method="post">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->
        @include('layout.footer')