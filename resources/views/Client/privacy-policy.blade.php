@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active"> Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="section-content m-b-60 text-center">
                            <h5 class="section-content__title">Privacy Policy</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="privacy-policy-section">
                        <div class="text-area">
                            <h5 class="font--bold">Who we are?</h5>
                            <div class="para__text">
                                <p>Our website address is: <a href="https://hasthemes.com/">HasTheme</a></p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">What personal data we collect and why we collect it?</h5>
                            <h6 class="font--bold">Comments</h6>
                            <div class="para__text">
                                <p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>
                                <p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>
                            </div>

                            <h6 class="font--bold">Media</h6>
                            <div class="para__text">
                                <p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>
                            </div>

                            <h6 class="font--bold">Cookies</h6>
                            <div class="para__text">
                                <p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>
                                <p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>
                                <p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
                                <p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>
                            </div>
                            <h6 class="font--bold">Embedded content from other websites</h6>
                            <div class="para__text">
                                <p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
                                <p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">How long we retain your data</h5>
                            <div class="para__text">
                                <p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
                                <p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">What rights you have over your data</h5>
                            <div class="para__text">
                                <p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>
                            </div>
                        </div>
                        <div class="text-area">
                            <h5 class="font--bold">Where we send your data</h5>
                            <div class="para__text">
                                <p>Visitor comments may be checked through an automated spam detection service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
@endsection



