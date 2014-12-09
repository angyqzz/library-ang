<?php include("templates/header.php"); ?>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Library Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><i class="fa fa-book"></i> Books</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container text-centered">
        <div class="thumb">
            <h1>I <span><i class="fa fa-heart text-danger"></i></span> my books</h1>
            <img src="http://4.bp.blogspot.com/-6y49yK5JeC4/UqMClFxIfKI/AAAAAAAAIjw/-w605OmfLKE/s1600/IMG_4700.jpg" alt="..." class="img-circle ">
            <p class="text-center" style="margin-top: 20px; color:#eee;"><em>Art by David Walker</em></p>
            <p style="margin-top: 20px;"><a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal">Add New Book</a> <a href="#" class="btn btn-primary" role="button">Add New Group</a></p>
        </div>
        <nav>
            <ul class="pagination">
                <li><a href="#">All</a></li>
                <?php foreach (range('A', 'Z') as $alpha) : ?>
                     <li><a href="#"><?php echo $alpha;?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>

        <div class="row">
            <div class="col-xs-6 col-sm-3 thumb">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media" style="margin-bottom: 20px">
                            <a class="media-left" href="#">
                                <img src="http://images.hngn.com/data/images/full/27757/batman-vs-superman.png" class="img-circle small-icon">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading" style=" margin-top: 6px;">Comics</h4>
                            </div>
                        </div>
                        <div class="caption">
                            <img src="http://images.hngn.com/data/images/full/27757/batman-vs-superman.png" class="img-circle">
                            <h2>Superman</h2>
                            <h3><small>James Franco</small></h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-success" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 thumb">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media" style="margin-bottom: 20px">
                            <a class="media-left" href="#">
                                <img src="http://rappingmanual.com/wp-content/uploads/2014/09/wheelman-action-scene.jpg" class="img-circle small-icon">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading" style=" margin-top: 6px;">Action</h4>
                            </div>
                        </div>
                        <div class="caption">
                            <img src="http://civileats.com/wp-content/uploads/2012/03/The-Hunger-Games-640x.jpg" class="img-circle">
                            <h2>Hunger Games</h2>
                            <h3><small>Jim Carry</small></h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-success" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add the extra clearfix for only the required viewport -->
            <div class="clearfix visible-xs-block"></div>

            <div class="col-xs-6 col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        Basic panel example
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 thumb">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media" style="margin-bottom: 20px">
                            <a class="media-left" href="#">
                                <img src="http://images.hngn.com/data/images/full/27757/batman-vs-superman.png" class="img-circle small-icon">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading" style=" margin-top: 6px;">Comics</h4>
                            </div>
                        </div>
                        <div class="caption">
                            <img src="http://media.dcentertainment.com/sites/default/files/GalleryTalent_1900x900_JimLee_HUSH_5334836c1d56a3.73192162.jpg" class="img-circle">
                            <h2>Hush</h2>
                            <h3><small>Someone Great</small></h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-success" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Book</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Author</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ISBN</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Img URL</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Comics
                            </label>
                            <label>
                                <input type="checkbox"> Action
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="angular.min.js"></script>
</body>
</html>