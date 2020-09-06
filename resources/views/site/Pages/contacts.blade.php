@extends('site.layout.app')

@section('content')
    <div class="banner">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2060.8379211472125!2d36.43353020000001!3d-0.7178336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182917f689710a69%3A0x3eb08e790e921925!2sparkview%20complex!5e0!3m2!1sen!2ske!4v1599424931335!5m2!1sen!2ske" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100 h-100"></iframe>
        </div>
    </div>

    <section class="about my-3 bg-secondary p-4 text-white">
        <div class="container">
            <div class="text-center">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h3>Let's Get In Touch!</h3>
                <form action="/message" method="POST" role="form">
                    <input type="hidden" name="_token" value="KZ7I863ULlwQBzDRLPenst0r3YaoxCSlIdkRHRZv">                <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="input1">Name</label>
                            <input type="text" id="input1" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input2">Email Address</label>
                            <input type="email" id="input2" class="form-control" name="email" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input3">Phone Number</label>
                            <input type="phone" id="input3" class="form-control" name="contact" required>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label for="input4">Message</label>
                            <textarea id="input4" rows="6" class="form-control" name="message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" value="contact" name="save">
                            <button class="btn btn-primary" type="submit" disabled>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h3>Rowa Insurance Agency</h3>
                <p>
                    P.O Box *** -20117.<br>
                    Naivasha, Kenya.<br>
                </p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 0724 527 020</p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:maryrowa@rowainsurance.com">maryrowa@rowainsurance.com</a></p>
                    <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:info@rowainsurance.com">info@rowainsurance.com</a></p>
                    <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 8:00 AM to 5:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li class="tooltip-social facebook-link"><a title="Facebook" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        
                        <li class="tooltip-social twitter-link"><a title="Twitter" data-placement="top" data-toggle="tooltip" href="#twitter-profile"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        
                    </ul>
                </div>
            </div><!-- /.row -->
        </div>
    </section>

@endsection