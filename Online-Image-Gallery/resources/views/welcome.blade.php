<!DOCTYPE html>
<html>
<head>
<title>G.O. Gallery</title>

<!--Legaturi pentru css js si fot-awsome &&(1)&&-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link href="/Assets/plugins/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="/Assets/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/Assets/js/main.js"></script> 
<script src="/Assets/plugins/bootstrap.js"></script> 

<!--&&(1)&&-->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="row">

            @foreach($imgdata as $img)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="/Public-Assets/{{$img->path}}"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="/Public-Assets/{{$img->path}}"
                             alt="Miau">
                    </a>
                </div>
            @endforeach

            </div>

            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>
    
                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 