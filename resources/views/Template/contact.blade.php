<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">صفحه اصلی</a>
                </li>
                <li>تماس با  ما </li>
            </ul>
        </div>
    </div>
</div>

<!--CONTACT-->
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <div id="gmap" class="contact-map">

                    <iframe  width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.5524641835427!2d51.255158210311656!3d35.56475352412744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f9206d7b99d3f85%3A0xadfc2de467a97405!2sNamaz+Square!5e0!3m2!1sen!2s!4v1498575603791"  ></iframe>
                    <br>
                    <small><a
                                href="https://www.google.com/maps/place/Namaz+Square/@35.5647535,51.2551582,17z/data=!4m5!3m4!1s0x3f9206d7b99d3f85:0xadfc2de467a97405!8m2!3d35.5622847!4d51.2541002"
                                style="color:#888;text-align:left;font-size:0.85em">View Larger Map</a></small>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">اطلاعات خودرا وارد کنید</h2>
                    <div class="status alert alert-success" style="display: none"></div>

                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" >
                        {{csrf_field()}}
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="ایمیل">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="نام">
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" name="title-_message" class="form-control" required="required"
                                   placeholder="موضوع">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="content_message" id="content_message" required="required" class="form-control" rows="8"
                                      placeholder="پیام شما">

                            </textarea>
                            <script>
                                CKEDITOR.replace( 'content_message' );
                            </script>

                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="ارسال">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">راه های ارتباطی</h2>
                    <address>
                        <p>آدرس</p>
                        <p>آدرس</p>
                        <p>آدرس</p>
                        <p>همراه: 09121234569</p>
                        <p>فکس: 1-714-252-0026</p>
                        <p>رایانامه: info@Melalkala.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">شبکه های اجتماعی</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/#contact-page-->