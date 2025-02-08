@extends('layouts/frontend_main')

@section('styles')
@endsection

@section('content')
    <!--====||  Main Section Start ||====-->
    <main class="lg:pt-[130px] pt-[50px] overflow-hidden">
        <!--====|| Hero Section Start ||====-->
        <section class="hero  md:pt-[80px] pt-[50px]">
            <div class="container mx-auto !px-0">
                <h1 class="font-medium inline-block" style="border-bottom: 1px solid #175BCC;" data-aos="fade-up"
                    data-aos-duration="1000"><span class="gradient-heading">
                        Privacy Policy</span>
                </h1>
            </div>
        </section>
        <!--====|| Hero Section End ||====-->

       <!--====|| Privacy policy Start ||====-->
        <section class="privacy-policy  md:py-[80px] py-[50px] relative z-10" id="privacy-policy">
            <!--Frame Integration Start-->
            <div class="container mx-auto">
                <div class="inner">
                  
                    <div>
                        <h3 class="font-bold">Introduction:</h3>
                        <p>At Docmedilink ("we" or "us"), we are dedicated to safeguarding
                            the privacy of the personal information ("information") you
                            entrust to us, including Protected Health Information (PHI). Our
                            software solutions serve healthcare organizations and related
                            entities ("clients"). This Privacy Practices Notice ("Notice")
                            outlines how we collect, use, and disclose your information, and
                            it details your rights regarding this data. We are legally
                            obligated to provide you with this Notice and to adhere to its
                            terms. This Notice is effective as of February 2024.</p>

                        <div class="item mt-md-5 mt-3">
                            <h3 class="font-bold">Information We Collect</h3>
                            <p class="mb-3 font-semibold">We collect information that you voluntarily provide through
                                your interactions with our website and customer support
                                channels. This information may include:</p>
                            <ul class="list-disc ps-7">
                                <li>Contact details (name, email address, phone number)</li>
                                <li>Company information (name, address, if applicable)</li>
                                <li>Technical data (IP address, browser type)</li>
                                <li>Information regarding your company’s operations (e.g.,
                                    software usage data)</li>
                            </ul>
                            <p class="mt-5 font-semibold">Additionally, we collect and store PHI provided by our
                                clients through the use of our software solutions or direct
                                interactions with authorized personnel. This PHI may
                                include:</p>
                            <ul class="list-disc ps-7">
                                <li>Patient demographics (name, address, date of birth)</li>
                                <li>Medical history and diagnoses (where applicable)</li>
                                <li>Treatment information (where applicable)</li>
                                <li>Insurance information</li>
                            </ul>
                            <p class="mt-3 mb-3">We do not collect or store PHI directly from patients; this
                                data is provided by their healthcare providers with proper
                                authorization.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">How We Use Your Information and PHI</h3>
                            <p class="mb-3  font-semibold">Your information is used for the following purposes:</p>
                            <ul class="list-disc ps-7">
                                <li>To deliver and support our software solutions</li>
                                <li>To communicate with you about your account, services, and
                                    updates</li>
                                <li>To personalize your experience on our website</li>
                                <li>To enhance our software and services</li>
                                <li>To comply with legal and regulatory obligations</li>
                            </ul>
                            <p class="mt-5 mb-3 font-semibold">We use and disclose PHI exclusively to provide and support
                                our software solutions for our clients. This may include:
                            </p>
                            <ul class="list-disc ps-7">
                                <li>Processing and storing PHI on behalf of our clients</li>
                                <li>Generating reports and analytics for our clients</li>
                                <li>Providing technical support related to PHI</li>
                                <li>Facilitating ePrescribing services, including transmitting
                                    prescription information securely between healthcare
                                    providers, pharmacies, and other relevant entities.</li>
                            </ul>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">ePrescribing and Privacy</h3>
                            <p class="mb-3">As part of our commitment to improving healthcare delivery,
                                Docmedilink provides ePrescribing services. These services
                                enable the secure transmission of prescription information
                                between healthcare providers, pharmacies, and other authorized
                                entities. When facilitating ePrescribing, we handle PHI with
                                the highest standards of privacy and security, ensuring that
                                all transmitted data is protected and only accessible to
                                authorized parties.</p>
                            <p>We adhere to all relevant legal and regulatory requirements
                                for ePrescribing, including HIPAA and other applicable laws.
                                We will not use or disclose prescription information for any
                                purpose other than to provide and support our ePrescribing
                                services, unless authorized by the individual or as required
                                by law.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">SMS and Mobile Data Privacy </h3>
                            <p class="mb-3">Docmedilink offers SMS-based services for appointment
                                reminders, product tracking, and order confirmations. Mobile
                                opt-in data will not be shared with third parties and will
                                solely be used for the purpose of delivering these services.
                                Standard message and data rates may apply. For assistance,
                                reply HELP or contact our support team. To opt out, reply STOP
                                at any time.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">Message Frequency Disclosure </h3>
                            <p class="mb-3">For recurring message programs, messages will be sent based
                                on the user’s subscription or notification preferences.
                                Message frequency may vary based on account activity or
                                service needs.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">How We Share Your Information and PHI</h3>
                            <p class="mb-3">We may share your information with our service providers who
                                assist in operating our business and supporting our software.
                                These service providers are required to maintain the
                                confidentiality and security of your information and PHI and
                                may only use it for authorized purposes.</p>
                            <p>We will not sell or share your information or PHI with third
                                parties for marketing purposes. We may disclose your
                                information or PHI if required by law, such as in response to
                                a court order or subpoena.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">Your Rights Regarding Your Information and PHI</h3>
                            <p class="mb-3">Your rights regarding your information include:</p>
                            <ul class="list-disc ps-7">
                                <li><span class="fw-bold">Right to Access:</span> You may
                                    request access to your information by submitting a written
                                    request to [Designated Contact Person or Department]. We
                                    will provide you with a copy of your information in a
                                    readily understandable format.</li>
                                <li><span class="fw-bold">Right to Rectify:</span> You may
                                    request corrections to any inaccurate or incomplete
                                    information we hold about you. We will review your request
                                    and respond within a reasonable timeframe.</li>
                                <li><span class="fw-bold">Right to Erasure:</span> You may
                                    request that we delete your information, subject to certain
                                    legal and regulatory exceptions.
                                </li>
                                <li><span class="fw-bold">Right to Restrict Processing:</span>
                                    You may request that we restrict the processing of your
                                    information for specific purposes. We will consider your
                                    request and respond within a reasonable timeframe.</li>
                                <li><span class="fw-bold">Right to Object:</span> You may
                                    object to the processing of your information for specific
                                    purposes, such as direct marketing. We will honor your
                                    request unless we have compelling legitimate grounds to
                                    continue processing your information.</li>
                            </ul>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">Your Rights Regarding PHI</h3>
                            <p class="mb-3">Individuals whose PHI we store and process on behalf of our
                                clients should contact their healthcare provider directly to
                                exercise their rights under HIPAA. These rights may
                                include:</p>
                            <ul class="list-disc ps-7">
                                <li><span class="fw-bold">Right to Access:</span> The right to
                                    access, inspect, and copy their medical records.</li>
                                <li><span class="fw-bold">Right to Amend:</span> The right to
                                    request corrections to inaccurate or incomplete information
                                    in their medical records.</li>
                                <li><span class="fw-bold">Right to an Accounting of Disclosures:</span>
                                    The right to receive a list of entities to whom their PHI
                                    has been disclosed.
                                </li>
                                <li><span class="fw-bold">Right to Request Restrictions:</span>
                                    The right to request limitations on how their PHI is used or
                                    disclosed.</li>
                                <li><span class="fw-bold">Right to Request Confidential Communications:</span>
                                    The right to request that communications regarding their PHI
                                    be sent in a specific manner.</li>
                            </ul>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">Changes to This Notice</h3>
                            <p class="mb-3">We reserve the right to modify this Notice at any time. We
                                will notify you of any changes by posting the revised Notice
                                on our website and providing a copy upon request.</p>
                        </div>

                        <div class="item md:mt-5 mt-3">
                            <h3 class="font-bold">Contact Us</h3>
                            <p class="mb-3">If you have any questions regarding this Notice, your privacy
                                rights, or our ePrescribing services, please contact our
                                Administrator or Support team.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!--====|| Privacy Policy End ||====-->
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
