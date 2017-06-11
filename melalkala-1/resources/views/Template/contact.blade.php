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

                    <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src=""></iframe>
                    <br>
                    <small><a
                                href="#"
                                style="color:#888;text-align:left;font-size:0.85em">...نقشه بزرگتر</a></small>

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