<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>
<body>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Contentnya</label>
        <textarea name="content" id="summernote" cols="30" rows="10" class="form-control1">
            {{-- {{$articles->content}} --}}
        </textarea>
    </div>
    
    <script>
        CKEDITOR.replace('content')
    </script>
    
    {{-- pindahkan code ini ke head --}}
    {{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> --}} 
</body>
</html>