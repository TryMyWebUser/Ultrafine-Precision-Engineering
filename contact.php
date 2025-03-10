<?php

    include "temp/header.php";

?>

        <main>
            <!-- Breadcrumb area start  -->
            <div class="breadcrumb__area breadcrumb-space overly theme-bg-heading-primary overflow-hidden">
                <div class="breadcrumb__background" data-background="assets/imgs/breadcrumb/breadcrumb.jpg"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12">
                            <div class="breadcrumb__content text-center">
                                <h1 class="breadcrumb__title color-white title-animation">Contact Us</h1>
                                <div class="breadcrumb__menu d-inline-flex justify-content-center">
                                    <nav>
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="index.php">
                                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 5.9L7.5 1L14 5.9V13.6C14 13.9713 13.8478 14.3274 13.5769 14.5899C13.306 14.8525 12.9386 15 12.5556 15H2.44444C2.06135 15 1.69395 14.8525 1.42307 14.5899C1.15218 14.3274 1 13.9713 1 13.6V5.9Z"
                                                                stroke="white"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path d="M5.33398 15V8H9.66732V15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                        Home
                                                    </a>
                                                </span>
                                            </li>
                                            <li class="active"><span>Contact Us</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb area start  -->

            <!-- "contact-us  area start -->
            <section class="contact-us section-space">
                <div class="container">
                    <div class="row mb-minus-30">
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-us__info-item">
                                <div class="contact-us__icon">
                                    <img src="assets/imgs/contact-us/location.svg" alt="image not found" />
                                </div>
                                <div class="contact-us__text">
                                    <h4 class="text-capitalize mb-10">Our Location</h4>
                                    <a href="https://maps.app.goo.gl/irHJhT7SyEunYPfdA">32A/42,Sri Nagar, Hope College, Peelamedu, Coimbatore - 641 004</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-us__info-item">
                                <div class="contact-us__icon">
                                    <img src="assets/imgs/contact-us/email.svg" alt="image not found" />
                                </div>
                                <div class="contact-us__text">
                                    <h4 class="text-capitalize mb-10">Email address</h4>
                                    <a href="mailto:htecbe@gmail.com">htecbe@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-us__info-item">
                                <div class="contact-us__icon">
                                    <img src="assets/imgs/contact-us/phone.svg" alt="image not found" />
                                </div>
                                <div class="contact-us__text">
                                    <h4 class="text-capitalize mb-10">Phone number</h4>
                                    <a href="tel:+919600401004">+91 96004 01004</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- "contact-us  area end -->

            <!--contact-map-->
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d619.3593274651113!2d76.97095718946844!3d11.028920248970161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8585bc46c6a43%3A0xcc3e71d269d77da8!2sULTRA%20FINE%20PRECISION%20ENGINEERING!5e1!3m2!1sen!2sin!4v1741600036082!5m2!1sen!2sin" height="530" style="border:0; width: -webkit-fill-available;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--contact-map-->

            <!--get-in-touch-->
            <section class="get-in-touch get-in-touch__space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="get-in-touch__text">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="get-in-touch__contact-form">
                                <h3 class="mb-20">Get in touch</h3>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="get-in-touch__form-input">
                                            <input name="name" id="lname" type="text" placeholder="full Name*" />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="get-in-touch__form-input">
                                            <input name="email" id="email" type="email" placeholder="Email here*" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="get-in-touch__form-input-select d-flex flex-column">
                                            <select name="subject" id="subject">
                                                <option value="">subject *</option>
                                                <option value="order">Event Order</option>
                                                <option value="objection">Objection</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="get-in-touch__form-input">
                                            <div class="validation__wrapper-up position-relative">
                                                <textarea name="textarea" id="textarea" placeholder="write note*"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="rr-btn">
                                            <span class="btn-wrap">
                                                <span class="text-one">Send Message</span>
                                                <span class="text-two">Send Message</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--get-in-touch-->

        </main>

<?php

    include "temp/footer.php";

?>