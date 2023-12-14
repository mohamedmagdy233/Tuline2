<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>AdminLTE 3 </title>

  <script src="https://use.fontawesome.com/2698787284.js"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

  <link rel="shortcut icon" type="image/jpg" href="{{asset('img/logo.png')}}"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 
  @if(Session::has('success'))
  <div class="alert alert-success session-msg">
      <p class="m-0">{{ Session::get('success') }}</p>
  </div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger session-msg">
  <p class="m-0">{{ Session::get('danger') }}</p>
</div>
@endif

  @include('admin.inc.navbar')

  @include('admin.inc.sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
  @foreach ($errors->all() as $error )
  <div class="alert alert-danger">
    {{$error}}
  </div>
  @endforeach
    @yield('content')
    <!-- /.content -->
  </div>



<!--
<script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{{-- 119px --}}<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>


<script src="{{ asset('js/style.js') }}"></script>

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/adminlte.js') }}"></script>
<script src="{{ asset('js/add.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

{{--<script>
  // This sample still does not showcase all CKEditor 5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
      // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
      toolbar: {
          items: [
              'exportPDF','exportWord', '|',
              'findAndReplace', 'selectAll', '|',
              'heading', '|',
              'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
              'bulletedList', 'numberedList', 'todoList', '|',
              'outdent', 'indent', '|',
              'undo', 'redo',
              '-',
              'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
              'alignment', '|',
              'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
              'specialCharacters', 'horizontalLine', 'pageBreak', '|',
              'textPartLanguage', '|',
              'sourceEditing'
          ],
          shouldNotGroupWhenFull: true
      },
      // Changing the language of the interface requires loading the language file using the <script> tag.
      // language: 'es',
      list: {
          properties: {
              styles: true,
              startIndex: true,
              reversed: true
          }
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
      heading: {
          options: [
              { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
              { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
              { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
              { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
              { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
              { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
              { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
          ]
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
      placeholder: 'Welcome to CKEditor 5!',
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
      fontFamily: {
          options: [
              'default',
              'Arial, Helvetica, sans-serif',
              'Courier New, Courier, monospace',
              'Georgia, serif',
              'Lucida Sans Unicode, Lucida Grande, sans-serif',
              'Tahoma, Geneva, sans-serif',
              'Times New Roman, Times, serif',
              'Trebuchet MS, Helvetica, sans-serif',
              'Verdana, Geneva, sans-serif',
              'cairo, Geneva, sans-serif',
              'Markazi Text, Geneva, sans-serif',
          ],
          supportAllValues: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
      fontSize: {
          options: [ 10, 12, 14, 'default', 18, 20, 22 ],
          supportAllValues: true
      },
      // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
      // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
      htmlSupport: {
          allow: [
              {
                  name: /.*/,
                  attributes: true,
                  classes: true,
                  styles: true
              }
          ]
      },
      // Be careful with enabling previews
      // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
      htmlEmbed: {
          showPreviews: true
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
      link: {
          decorators: {
              addTargetToExternalLinks: true,
              defaultProtocol: 'https://',
              toggleDownloadable: {
                  mode: 'manual',
                  label: 'Downloadable',
                  attributes: {
                      download: 'file'
                  }
              }
          }
      },
      // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
      mention: {
          feeds: [
              {
                  marker: '@',
                  feed: [
                      '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                      '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                      '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                      '@sugar', '@sweet', '@topping', '@wafer'
                  ],
                  minimumCharacters: 1
              }
          ]
      },
      // The "super-build" contains more premium features that require additional configuration, disable them below.
      // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
      removePlugins: [
          // These two are commercial, but you can try them out without registering to a trial.
          // 'ExportPdf',
          // 'ExportWord',
          'CKBox',
          'CKFinder',
          'EasyImage',
          // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
          // Storing images as Base64 is usually a very bad idea.
          // Replace it on production website with other solutions:
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
          // 'Base64UploadAdapter',
          'RealTimeCollaborativeComments',
          'RealTimeCollaborativeTrackChanges',
          'RealTimeCollaborativeRevisionHistory',
          'PresenceList',
          'Comments',
          'TrackChanges',
          'TrackChangesData',
          'RevisionHistory',
          'Pagination',
          'WProofreader',
          // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
          // from a local file system (file://) - load this site via HTTP server if you enable MathType
          'MathType'
      ]
  });
</script>
<script src="https://cdn.tiny.cloud/1/pypifh5vmq0cuvsne9du82sv6tqo2yh48d5co4i1n2yflxlp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ]
        });
      </script>--}}
</body>
</html>
