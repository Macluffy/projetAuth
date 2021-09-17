

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$data7[0]->titre4}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">{{$data4[0]->btn1}}</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">{{$data4[0]->btn2}}</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">{{$data4[0]->btn3}}</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">{{$data4[0]->btn4}}</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">{{$data4[0]->btn5}}</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">{{$data4[0]->btn6}}</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">{{$data4[0]->btn7}}</div>
                    </div>
                    <!-- Message input--> 
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">{{$data4[0]->btn8}}</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">{{$data4[0]->btn9}}</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">{{$data4[0]->btn10}}</div>
                            {{$data4[0]->btn11}}
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">{{$data4[0]->btn12}}</div></div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">{{$data4[0]->btn13}}</button>
                </form>
            </div>
        </div>
    </div>
</section>
