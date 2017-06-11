<!doctype html>
<html lang="fa">
<head>
    @include('Template.links')
    <link href="/css/contactus.css" rel='stylesheet' type='text/css'/>
    <script src='ckeditor/ckeditor.js'></script>
    <script>
        tinymce.init({
            selector: '#content_message'
        });
    </script>


    <title>تماس با ما</title>

</head>
<body>
@include('Template.header')
@include('Template.notification')
@include('Template.contact')
@include('Template.footer')

</body>
</html>