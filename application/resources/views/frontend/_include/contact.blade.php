@php
    $website = App\Website::first();
    $partner = App\Partner::all();
    $social  = App\Social::all();
@endphp

<div class="container-fluid base-color" id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 base-color-darker col-md-push-3">
                <h2>
                    Contact
                </h2>
            </div>
            <div class="col-md-3 col-md-pull-6 hidden-sm hidden-xs">
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>
                    Office
                </h5>
                {!! $website->address !!}

                <h5>
                    Phone
                </h5>
                {!! $website->phone !!}
                <p>
                    <a href="{{ $website->google_map_url }}">
                        <img src="{!! asset('amadeo/img/direction-img.png') !!}" style="height: 65px;">
                            <span style="font-size: 20px; font-weight: bold; font-family: 'Helvetica LT Std">
                                Get Direction
                            </span>
                        </img>
                    </a>
                </p>
            </div>
            <div class="col-md-3 col-md-push-6">
                <h5>
                    Follow
                </h5>
                <p>
                    @foreach($social as $list)
                        <a href="{{ $list->link }}"><img class="social-icon" src="{!! asset($list->image) !!}"/></a>
                    @endforeach
                </p>
                <h5>
                    Office
                </h5>
                <p>
                    @foreach($partner as $list)
                        <a href="{{ $list->link }}"><img class="logo-partner" src="{!! asset($list->image) !!}"/></a>
                    @endforeach
                </p>
            </div>
            <div class="col-md-6 col-md-pull-3 base-color-darker" style="padding-bottom: 20px;">
                <form class="input-message form-validation" style="padding-bottom: 10px;" method="post" action="{!! route('contact.store') !!}">
                    
                    <label for="email">
                        <span class="feedback" style="color: red"></span>
                    </label>
                    <input name="email" id="email" placeholder="Email Address*" type="email" />

                    <label for="name">
                        <span class="feedback" style="color: red"></span>
                    </label>
                    <input name="name" id="name" placeholder="Your Name*" type="text" />

                    <label for="phone">
                        <span class="feedback" style="color: red"></span>
                    </label>
                    <input name="phone" id="phone" placeholder="Your Phone" type="tel" />

                    <label for="messages">
                        <span class="feedback" style="color: red"></span>
                    </label>
                    <textarea name="messages" id="messages" placeholder="Message*" rows="5"></textarea>

                    <div class="captcha-block">
                        <label for="captcha">
                            <span class="captcha-feedback" style="color: red"></span>
                        </label>
                        <div class="g-recaptcha" data-sitekey="6LeCISkTAAAAANzblKXWYT-Hw0gvlhiD4_FDPNO7"></div>
                    </div>

                    <button class="base-color-darkest" type="submit">Submit</button>

                    {!! csrf_field() !!}
                    
                </form>
                <script type="text/javascript">
                    function validateEmail(email) {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(email);
                    }

                    function validatePhone(phone) {
                        var re = /[0-9-()+]{3,20}/;
                        return re.test(phone);
                    }

                    $(function() {
                        $('form.form-validation').submit(function() {
                            var invalid = 0;

                            var name     = $('input[name="name"]');
                            var email    = $('input[name="email"]');
                            var phone    = $('input[name="phone"]');
                            var messages = $('textarea[name="messages"]');
                            // validation name
                            if (name.val() == null || name.val() == "") {
                                invalid++;
                                name.prev().children('.feedback').html("(Name Required)");
                            } else {
                                name.prev().children('.feedback').html("");
                            }

                            // validation email
                            if (email.val() == null || email.val() == "") {
                                invalid++;
                                email.prev().children('.feedback').html("(Email Required)");
                            } else if (!validateEmail(email.val())) {
                                invalid++;
                                email.prev().children('.feedback').html("(Invalid Email)");
                            } else {
                                email.prev().children('.feedback').html("");
                            }

                            // validation phone
                            if (phone.val() != null && !validatePhone(phone.val())) {
                                invalid++;
                                phone.prev().children('.feedback').html("(Invalid Phone)");
                            } else {
                                phone.prev().children('.feedback').html("");
                            }

                            // validation messages
                            if (messages.val() == null || messages.val() == "") {
                                invalid++;
                                messages.prev().children('.feedback').html("(Messages Required)");
                            } else {
                                messages.prev().children('.feedback').html("");
                            }

                            if (grecaptcha.getResponse() == "") {
                                invalid++;
                                $('.captcha-feedback').html("(Please check captcha)");
                                console.log('invalid');
                            } else {
                                $('.captcha-feedback').html("");
                            }
                            if (invalid > 0) {
                                return false;
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
