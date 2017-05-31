@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h1>Support</h1>
            </div>
          </div>
          <div class="content-page">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <ul class="tabbable faq-tabbable">
                  <li class="active">
                    <a href="#general" id="general-tab" data-toggle="tab" aria-expanded="false">FAQ</a>
                  </li>
                  <li class="">
                    <a href="#contact_us" id="contact_us-tab" data-toggle="tab" aria-expanded="false">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-9 col-sm-9">
                <div class="tab-content" style="padding: 0px">
                  <div class="tab-pane active" id="general">
                    <div class="panel-group" id="general-faq">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#penggunaan_akun" data-parent="#general-faq" data-toggle="collapse" class="accordion-toggle">
                              Using Your Account
                            </a>
                          </h4>
  										  </div>
                        <div class="panel-collapse collapse in" id="penggunaan_akun">
                          <div class="panel-body">
                            <ul>
                              <li>
                                <a href="#">Sign In</a> or <a href="#">Register new Account</a>
                              </li>
                              <li>
                                <a href="#">Forgot Password ?</a>
                              </li>
                              <li>
                                <a href="#">Profile settings, mobile number, address, email and mobile number preferences</a>
                              </li>
                              <li>
                                <a href="#">Purchase History</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#mencetak_voucher" data-parent="#general-faq" data-toggle="collapse" class="accordion-toggle collapsed">
                              Print Voucher
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="mencetak_voucher">
                          <div class="panel-body">
                            <ul>
                              <li>After receiving a purchase confirmation email, you will receive an email with a URL to download the voucher.</li>
                              <li>Or Access <a href="#">My Vouchers</a>.</li>
                              <li>Select the voucher that you want to download or print</li>
                              <li>Your voucher will be available until the event start</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#kehilangan_voucher" data-parent="#general-faq" data-toggle="collapse" class="accordion-toggle collapsed">
                              Lost Voucher
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="kehilangan_voucher">
                          <div class="panel-body">
                            <ul>
                              <li>If you buy online, you can re-print the voucher. print another just login to My Account and click on My Voucher</li>
                              <li>If you buy offline at Rajakarcis Outlet / Rajakarcis outlet Partners, go back to the outlets  you buy, and ask to reprint the voucher with new barcode.</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#refund" data-parent="#general-faq" data-toggle="collapse" class="accordion-toggle collapsed">
                              Refunds for rescheduled or canceled events
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="refund">
                          <div class="panel-body">
                            <ul>
                              <li>Tickets already purchased are non refundable.</li>
                              <li>When an event reschedule or canceled, we will immediately notify ticket holders and informing about the refund procedure after we receive information details from promoter.</li>
                              <li>When an event reschedule or canceled, Rajakarcis will refund the ticket based on ticket price. Any cost such as order procesing fee, ticket protector, and Credit Card procesing fee is non refundable</li>
                              <li>Details about cancellation event or refund procedure will publish via our twitter / email / telephone / website.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="contact_us">
                    <div class="panel-group" id="contact_us">
                      <!-- BEGIN 1 -->
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#contact-us" data-parent="#ticket-protection" data-toggle="collapse" class="accordion-toggle">
                              Contact us
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="general-protector">
                          <div class="panel-body">
                            <address>
                              <strong>Our office :</strong><br>
                              Universitas Gunadarma<br>
                              Kampus D<br>
                              Jl. Margonda Raya No.100 Pd. Cina, Beji, Kota Depok, Jawa Barat<br>
                              Bussiness hour : Monday – Friday, 10AM – 5PM<br>
                            </address>

                            <address>
                              <strong>For general inquiry, email us at</strong><br>
                              <a href="http://www.google.com/recaptcha/mailhide/d?k=01baG7GqAK3IClPCLHSyscXA==&amp;c=jshlgjURIHYS6fTc3Aq8EwpmgoYL9H10GkVjGLL8aJE=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501baG7GqAK3IClPCLHSyscXA\75\75\46c\75jshlgjURIHYS6fTc3Aq8EwpmgoYL9H10GkVjGLL8aJE\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">c...@kepohub.com</a>
                            </address>

                            <iframe style="border: 0;" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaYfRRgjsaS4RsqOo0WRv64c&key=AIzaSyDc6psDYYWpXUtNMMflCiKLiuya2I9kb6o" height="400" width="100%" frameborder="0"></iframe><p></p>
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
      </div>

      <div class="row margin-bottom-20">
        <div class="col-md-12">

        </div>
      </div>
@endsection
