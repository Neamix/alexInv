@extends('Layouts.app')

@section('content')			

			
			<!-- 
			=============================================
				Fancy Hero Four
			============================================== 
			-->

			<div class="fancy-hero-four bg-event space-fix">
				<div class="bg-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-11 col-md-10 m-auto">
								<h6>Contact us</h6>
								<h2>Feel free to contact us or just say hi!</h2>
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.fancy-hero-four -->



			<!-- 
			=============================================
				Contact Style Two
			============================================== 
			-->
			<div class="contact-style-two">
				<div class="container">
					<div class="form-style-classic mt-150 md-mt-80">
						<form action="{{ route('contact.submit') }}" method="POST" id="contact-forms">
                            @csrf
                            <div class="messages"></div>
                            <div class="row controls">
                                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="input-group-meta form-group mb-60">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Michel" name="Fname" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="input-group-meta form-group mb-60">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Hawkins" name="Lname" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="input-group-meta form-group mb-60">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="saeslal@zouj.co.uk" name="email" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="input-group-meta form-group lg mb-40">
                                        <label>Your Message</label>
                                        <textarea placeholder="Your message here.." name="message" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                                    <button type="submit" class="theme-btn-two">Send Message</button>
                                </div>
                            </div>
                        </form>                        
					</div> <!-- /.form-style-classic -->
				</div>
			</div> <!-- /.contact-style-two -->
			

			<!-- Scroll Top Button -->
			<button class="scroll-top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

            @if(session('success'))
            <script>
               const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });
                    Toast.fire({
                    icon: "success",
                    title: "Someone from our team will replay to you shortly"
                    });
            </script>
        @endif
			
@endsection