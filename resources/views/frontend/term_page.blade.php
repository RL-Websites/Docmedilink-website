@extends('layouts/frontend_main')

@section('styles')
@endsection

@section('content')
    <!--====||  Main Section Start ||====-->
    <main class="lg:pt-[130px] pt-[50px] overflow-hidden">
        <!--====|| Hero Section Start ||====-->
        <section class="hero">
            <img class="hero__img" src="assets/img/clinicians.webp" alt="Hero Image" data-aos="fade-left"
                data-aos-duration="800" />
            <div class="hero__content hero__content--alt !px-0">
                <h1 class="font-medium inline-block" style="border-bottom: 1px solid #175BCC;" data-aos="fade-up"
                    data-aos-duration="1000"><span class="gradient-heading">
                        Clinicians</span>
                </h1>
                <h4 class="font-bold h4-alt mt-3" data-aos="fade-up" data-aos-duration="1200">Empowering healthcare
                    providers to
                    <br />
                    <span class="text-primary"> Expand Their Reach </span>
                </h4>
            </div>
        </section>
        <!--====|| Hero Section End ||====-->

       <!--====|| Terms and Conditions Start ||====-->
         <section class="terms-and-condition  md:pt-[80px] pt-[50px] relative z-10" id="terms-and-condition">
            <!--Frame Integration Start-->
            <div class="container mx-auto">
                <div class="inner">
                    <h3>Terms &amp; Conditions</h3>
                    <div>
                        <p class="fw-bold text-hint">Introduction:</p>
                        <p>These Terms &amp; Conditions ("Terms") govern your access to and
                            use of Docmedilink's web-based software solutions ("Software")
                            designed to streamline operations for healthcare providers. By
                            accessing or using the Software, you ("you" or "User") agree to
                            be bound by these Terms.</p>

                        <div class="item">
                            <p class="fw-bold mb-2">1. Description of Services</p>
                            <p class="mb-3">Docmedilink offers a suite of Software solutions tailored for
                                various healthcare professionals:</p>
                            <ul class="ms-4 d-flex flex-column gap-1">
                                <li><span class="fw-bold">MD/DC/Lac:</span> A comprehensive
                                    patient data management system for medical offices, enabling
                                    efficient record-keeping, appointment scheduling, billing,
                                    and enhancing overall patient experience.</li>
                                <li><span class="fw-bold">Pharm:</span> Designed for pharmacies
                                    to optimize medication management, including functionalities
                                    for prescription fulfillment and seamless integration with
                                    existing billing systems.</li>
                                <li><span class="fw-bold">DME (Durable Medical Equipment):</span>
                                    Developed for medical equipment suppliers, providing tools
                                    for managing equipment sales, rentals (if applicable), and
                                    ensuring efficient delivery.</li>
                                <li><span class="fw-bold">ePrescribing Services:</span> Our
                                    Software includes ePrescribing functionality, enabling
                                    healthcare providers to securely transmit prescription
                                    information directly to pharmacies. This feature is designed
                                    to improve accuracy, efficiency, and patient safety in the
                                    prescription process.
                                </li>
                            </ul>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">2. User Accounts and Security</p>
                            <p class="mb-3">You may be required to create an account to access certain
                                features of the Software. You are responsible for maintaining
                                the confidentiality of your account credentials and are fully
                                responsible for all activities that occur under your account.
                                Docmedilink will not be liable for any loss or damage arising
                                from your failure to comply with these security
                                obligations.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">3. Access and Use</p>
                            <p class="mb-3">We grant you a non-exclusive, non-transferable right to
                                access and use the Software for its designated purpose within
                                your healthcare practice. You agree not to:</p>
                            <ul class="ms-4 d-flex flex-column gap-1">
                                <li>Sell, license, sublicense, or distribute the Software to
                                    any third party.</li>
                                <li>Use the Software for any purpose other than its intended
                                    use within the healthcare field you practice.</li>
                                <li>Attempt to modify, reverse engineer, decompile,
                                    disassemble, or access the source code of the Software.</li>
                            </ul>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">4. Intellectual Property</p>
                            <p>The Software and all associated intellectual property rights,
                                including copyrights, trademarks, and patents, are owned by
                                Docmedilink or its licensors. You agree not to infringe upon
                                any of our intellectual property rights.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">5. Data Storage and Security</p>
                            <p>Docmedilink is committed to data security. We store your data
                                on secure servers and maintain regular backups. However, we
                                cannot guarantee the absolute security of data transmission
                                over the internet. You acknowledge that you are transmitting
                                data at your own risk.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">6. Integration with Third-Party Systems</p>
                            <p>Our Software may integrate with existing billing systems and
                                potentially with third-party solutions like legal case
                                management software. We will collaborate with you to determine
                                the best integration options to meet your specific needs.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">7. Term and Termination</p>
                            <p>These Terms will remain in effect until terminated by either
                                party. We may terminate these Terms at any time for any
                                reason, with or without notice. You may terminate these Terms
                                by discontinuing your use of the Software.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">8. Fees and Payment</p>
                            <p>Docmedilink offers various subscription plans for our
                                Software. The specific fees associated with your chosen plan
                                will be communicated to you before your subscription begins.
                                You agree to pay the applicable fees on time and in accordance
                                with the chosen payment schedule.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">9. Disclaimer of Warranties</p>
                            <p>The Software is provided "as is" without warranties of any
                                kind, express or implied. Docmedilink disclaims all
                                warranties, including but not limited to, warranties of
                                merchantability, fitness for a particular purpose, and
                                non-infringement.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">10. Limitation of Liability</p>
                            <p>Docmedilink will not be liable for any damages arising out of
                                or related to your use of the Software, including but not
                                limited to direct, indirect, incidental, consequential, or
                                punitive damages.</p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">11. Indemnification</p>
                            <p>You agree to indemnify and hold harmless Docmedilink, its
                                officers, directors, employees, agents, and licensors from and
                                against any and all claims, demands, losses, liabilities,
                                costs, or expenses (including attorneys' fees) arising out of
                                or related to your use of the Software.
                            </p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">12. Governing Law and Dispute Resolution</p>
                            <p>These Terms will be governed by and construed in accordance
                                with the laws of the State of New York. Any dispute arising
                                out of or related to these Terms will be resolved by binding
                                arbitration in accordance with the rules of the American
                                Arbitration Association.
                            </p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">13. ePrescribing and Related Services</p>
                            <p>Docmedilink’s Software includes ePrescribing capabilities,
                                allowing healthcare providers to electronically transmit
                                prescriptions to pharmacies. By using this feature, you
                                acknowledge and agree that you are responsible for ensuring
                                the accuracy and appropriateness of all prescription
                                information submitted through the Software. Docmedilink will
                                not be held liable for any errors or issues arising from the
                                use of ePrescribing features. Users must comply with all
                                applicable laws and regulations regarding electronic
                                prescribing, including HIPAA and other federal or state
                                privacy and security laws.
                            </p>
                        </div>

                        <div class="item">
                            <p class="fw-bold mb-2">14. Infobip SMS Campaign Policy</p>
                            <p class="mb-3">To enhance communication and keep patients informed,
                                Docmedilink integrates Infobip SMS Campaign services. These
                                services allow us to provide:
                            </p>
                            <ul class="ms-4 d-flex flex-column gap-1 mb-4">
                                <li><span class="fw-bold">Product Tracking Updates:</span>
                                    Notifications on the status of patient orders.</li>
                                <li><span class="fw-bold">Order Confirmations:</span>
                                    Acknowledgment of successfully placed orders.</li>
                                <li><span class="fw-bold">Appointment Reminders:</span> Timely
                                    reminders for scheduled appointments.</li>
                            </ul>
                            <p class="fw-bold mb-2">Infobip Compliance Additions:</p>
                            <ol class="ms-4 d-flex flex-column gap-1">
                                <li><span class="fw-bold">Call-to-Action:</span> All messages
                                    include clear identification of Docmedilink as the
                                    sender.</li>
                                <li><span class="fw-bold">HELP Instructions:</span> Users may
                                    reply with "HELP" for support or contact us at
                                    info@docmedilink.com</li>
                                <li><span class="fw-bold">STOP Instructions:</span> Users can
                                    opt out of receiving SMS notifications by replying "STOP" to
                                    any message.</li>
                                <li><span class="fw-bold">Message Frequency Disclosure: </span>
                                    Notifications will be sent as required, but recurring
                                    notifications will follow the disclosed schedule.</li>
                                <li><span class="fw-bold">Cost Disclosure: </span> "Message and
                                    data rates may apply" will be included in all relevant SMS
                                    campaigns.</li>
                                <li><span class="fw-bold">Privacy Assurance: </span> Mobile
                                    opt-in data will not be shared with third parties, in
                                    alignment with our Privacy Policy.</li>
                            </ol>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">15. Entire Agreement</p>
                            <p>These Terms constitute the entire agreement between you and
                                Docmedilink regarding your use of the Software and supersede
                                all prior or contemporaneous communications and proposals,
                                whether oral or written.
                            </p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">16. Updates and Changes to the Terms</p>
                            <p>We reserve the right to modify these Terms at any time.
                                Changes will be effective upon posting on our website.
                                Continued use of the Software constitutes acceptance of any
                                updates.
                            </p>
                        </div>

                        <div class="item mt-md-5 mt-3">
                            <p class="fw-bold mb-2">17. Contact Us</p>
                            <p>If you have any questions about these Terms, please contact
                                our Administrator or Support team at
                                <span class="fw-semibold">info@docmedilink.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--====|| Terms and Conditions End ||====-->
    </main>
    <!--====||  Main Section End ||====-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const $input = $('#time');
            const $error = $('<p class="text-danger pt-1">You cannot select a past time and date.</p>');
            $error.hide();
            $input.after($error);

            const validateTime = () => {
                const now = new Date();
                const selectedTime = new Date($input.val());

                if (selectedTime < now) {
                    $error.show();
                    $input.val('');
                } else {
                    $error.hide();
                }
            };

            $input.on('change blur', validateTime);
        });
    </script>

    <script type="text/javascript">
        function formatPhoneOnChange(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            // Limit to 12 digits
            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            // Format the number as (XXX) XXX-XXXX
            if (value.length > 3 && value.length <= 6) {
                value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
            } else if (value.length > 6) {
                value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
            }

            input.value = value;
        }

        $(document).ready(function() {
            $('#contact_phone').on('input', function() {
                formatPhoneOnChange(this);
            });

            // Form submission handler
            $('#clinicForm').on('submit', function(e) {
                e.preventDefault();

                // Remove previous error messages
                $('.text-danger').remove();

                var $submitButton = $('button[type="submit"]');
                $submitButton.prop('disabled', true).text('Submitting...');

                var contactName = $('#contact_name').val();
                var contactEmail = $('#contact_email').val();
                var contactPhone = $('#contact_phone').val();

                var isValid = true;

                // Validate Contact Name (Only letters and spaces)
                const namePattern = /^[A-Za-z\s]+$/;
                if (!contactName || !namePattern.test(contactName)) {
                    $('#contact_name').after(
                        '<p class="text-danger pt-1">Name is required.</p>'
                    );
                    isValid = false;
                }

                // Validate Contact Email (Simple email pattern)
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!contactEmail || !emailPattern.test(contactEmail)) {
                    $('#contact_email').after(
                        '<p class="text-danger pt-1">Valid email is required.</p>'
                    );
                    isValid = false;
                }

                const phonePattern = /^\(\d{3}\) \d{3}-\d{4,6}$/; // Allowing up to 12 digits
                if (!contactPhone) {
                    $('#contact_phone').after('<p class="text-danger pt-1">Phone is required.</p>');
                    isValid = false;
                } else if (!phonePattern.test(contactPhone)) {
                    $('#contact_phone').after(
                        '<p class="text-danger pt-1">Valid phone number is required.</p>');
                    isValid = false;
                }

                // If validation fails, stop submission
                if (!isValid) {
                    $submitButton.prop('disabled', false).text('Submit');
                    return;
                }

                var formData = {
                    clinic_name: $('#clinic_name').val(),
                    contact_name: contactName,
                    contact_email: contactEmail,
                    contact_phone: contactPhone,
                    specialization: $('#specialization').val(),
                    practice_size: $('#practice_size').val(),
                    telehealth: $('#telehealth').val(),
                    preferred_demo_time: $('#time').val(),
                    about_us: $('#about_us').val(),
                    submitButton: 'clinicians'
                };

                // Send the form data using Axios
                axios.post("{{ url('clinicians-form-submissions') }}", formData)
                    .then(function(response) {
                        $('#contact').append(`
                            <div class="form-modal hidden lg:p-20 md:p-10 p-5 md:mt-0 mt-5 flex flex-col items-center text-center h-full absolute top-0 right-0 bottom-0 left-0">
                                <div class="form-modal--content">
                                    <div class="success-animation">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold mt-5">Thank You</h3>
                                    <p class="mt-2 text-lg">Thank you for submitting your information! We've emailed you the details, and our team will get in touch with you shortly.</p>
                                </div>
                            </div>
                        `);

                        $('.form-modal').removeClass('hidden').fadeIn();

                        setTimeout(function() {
                            $('.form-modal').fadeOut(function() {
                                $(this).remove();
                            });
                        }, 3000);

                        $('#clinicForm')[0].reset();
                    })
                    .catch(function(error) {
                        toastr.error('There was an error with your submission.');
                    })
                    .finally(function() {
                        $submitButton.prop('disabled', false).text('Submit');
                    });
            });
        });
    </script>
@endsection
