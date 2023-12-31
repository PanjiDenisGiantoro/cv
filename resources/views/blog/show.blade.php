
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>
        Panji Denis Giantoro - Blog Detail
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/jpreloader.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets') }}/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
    <a href="javascript:history.back()" id="btn-exit" class="clicked">
        <span class="line-1"></span>
        <span class="line-2"></span>
    </a>
    <div class="transition"></div>

    <!-- content begin -->
    <div class="no-bottom no-top light">
        <div id="top"></div>
        <!-- section begin -->
        <!-- section begin -->
        <section id="section-main" class="light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title date">{{$data->title}}<span>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}
                            </span></h2>
                        <div class="title-underline"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="blog-read">

                            <img alt="" src="{{ url($data->featured_image) }}" class="img-rounded img-fullwidth">

                            <div class="post-text">
                                <p>{!! $data->body !!}</p>
                            </div>

                        </div>

{{--                        <div id="blog-comment">--}}
{{--                            <h4>Comments (5)</h4>--}}

{{--                            <div class="spacer-half"></div>--}}

{{--                            <ol>--}}
{{--                                <li>--}}
{{--                                    <div class="avatar">--}}
{{--                                        <img src="{{ asset('assets') }}/images/misc/avatar.png" alt="" /></div>--}}
{{--                                    <div class="comment-info">--}}
{{--                                        <span class="c_name">John Smith</span>--}}
{{--                                        <span class="c_date">15 January 2020</span>--}}
{{--                                        <span class="c_reply"><a href="#">Reply</a></span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>--}}
{{--                                    <ol>--}}
{{--                                        <li>--}}
{{--                                            <div class="avatar">--}}
{{--                                                <img src="{{ asset('assets') }}/images/misc/avatar.png" alt="" /></div>--}}
{{--                                            <div class="comment-info">--}}
{{--                                                <span class="c_name">John Smith</span>--}}
{{--                                                <span class="c_date">15 January 2020</span>--}}
{{--                                                <span class="c_reply"><a href="#">Reply</a></span>--}}
{{--                                                <div class="clearfix"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt--}}
{{--                                                explicabo.</div>--}}
{{--                                        </li>--}}
{{--                                    </ol>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <div class="avatar">--}}
{{--                                        <img src="{{ asset('assets') }}/images/misc/avatar.png" alt="" /></div>--}}
{{--                                    <div class="comment-info">--}}
{{--                                        <span class="c_name">John Smith</span>--}}
{{--                                        <span class="c_date">15 January 2020</span>--}}
{{--                                        <span class="c_reply"><a href="#">Reply</a></span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>--}}
{{--                                    <ol>--}}
{{--                                        <li>--}}
{{--                                            <div class="avatar">--}}
{{--                                                <img src="{{ asset('assets') }}/images/misc/avatar.png" alt="" /></div>--}}
{{--                                            <div class="comment-info">--}}
{{--                                                <span class="c_name">John Smith</span>--}}
{{--                                                <span class="c_date">15 January 2020</span>--}}
{{--                                                <span class="c_reply"><a href="#">Reply</a></span>--}}
{{--                                                <div class="clearfix"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt--}}
{{--                                                explicabo.</div>--}}
{{--                                        </li>--}}
{{--                                    </ol>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <div class="avatar">--}}
{{--                                        <img src="{{ asset('assets') }}/images/misc/avatar.png" alt="" /></div>--}}
{{--                                    <div class="comment-info">--}}
{{--                                        <span class="c_name">John Smith</span>--}}
{{--                                        <span class="c_date">15 January 2020</span>--}}
{{--                                        <span class="c_reply"><a href="#">Reply</a></span>--}}

{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>--}}
{{--                                </li>--}}
{{--                            </ol>--}}

                            <div class="spacer-single"></div>

                            <div id="comment-form-wrapper">
                                <h4>Leave a Comment</h4>
                                <div class="comment_form_holder">
                                    <div id="contact_form" class="form-default">

                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" />

                                        <label>Email <span class="req">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <div id="error_email" class="error">Please check your email</div>

                                        <label>Message <span class="req">*</span></label>
                                        <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                        <div id="error_message" class="error">Please check your message</div>
                                        <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                        <div id="mail_failed" class="error">Error, email not sent</div>

                                        <p id="btnsubmit">
                                            <input type="submit" id="send" value="Send" class="btn btn-custom" /></p>
                                    </div>
                                </div>
                            </div>
{{--                        </div>--}}

                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
</div>

<div id="selector">
    <div class="sc-opt sc-mt">
        <div class="sc-icon"><i class="fa fa-eyedropper"></i></div>
        <span class="opt tc1" data-color="scheme-01"></span>
        <span class="opt tc2" data-color="scheme-02"></span>
        <span class="opt tc3" data-color="scheme-03"></span>
        <span class="opt tc4" data-color="scheme-04"></span>
        <span class="opt tc5" data-color="scheme-05"></span>
        <span class="opt tc6" data-color="scheme-06"></span>
    </div>

</div>

<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/jpreLoader.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/wow.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.isotope.min.js"></script>
<script src="{{ asset('assets') }}/js/easing.js"></script>
<script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
<script src="{{ asset('assets') }}/js/validation.js"></script>
<script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets') }}/js/enquire.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.plugin.js"></script>
<script src="{{ asset('assets') }}/js/typed.js"></script>
<script src="{{ asset('assets') }}/js/typed-custom.js"></script>
<script src="{{ asset('assets') }}/js/designesia.js"></script>

</body>

</html>
