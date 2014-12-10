<?php include("templates/header.php"); ?>

<?php

$servername = "localhost";
$username = "book-angelina";
$password = "0000";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("SET CHARACTER SET UTF8, collation_connection=utf8_general_ci");
$sql = "SELECT `title`, `author`, `description`, `image`, `ISBN`, `groupID` FROM `book` WHERE 1";
$result = $conn->query($sql);

$book = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($book, $row);
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<body ng-controller="BookShelfController as books">

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
          <ul class="nav navbar-nav" ng-init="nav='home'">
            <li ng-class="{ active:nav==='home' }"><a href ng-click="nav='home'"><i class="fa fa-book"></i> Books</a></li>
            <li ng-class="{ active:nav==='about' }"><a href ng-click="nav='about'">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!--book list -->
    <div class="container text-centered" ng-show="nav==='home'">
        <div class="thumb">
            <h1>I <span><i class="fa fa-heart text-danger"></i></span> my books</h1>
            <img src="http://4.bp.blogspot.com/-6y49yK5JeC4/UqMClFxIfKI/AAAAAAAAIjw/-w605OmfLKE/s1600/IMG_4700.jpg" alt="..." class="img-circle ">
            <p class="text-center" style="margin-top: 20px; color:#eee;"><em>Art by David Walker</em></p>
            <p style="margin-top: 20px;"><a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal">Add New Book</a> <a href="#" class="btn btn-primary" role="button">Add New Group</a></p>
        </div>
        <nav>
            <ul class="pagination" ng-init="tab=0">
                <li ng-class="{ active:tab===0 }"><a href ng-click="tab = 0">All</a></li>
                <li ng-class="{ active:tab===1 }"><a href ng-click="tab = 1">Comics</a></li>
                <li ng-class="{ active:tab===2 }"><a href ng-click="tab = 2">Action</a></li>
                <li ng-class="{ active:tab===3 }"><a href ng-click="tab = 3">Drama</a></li>
            </ul>
        </nav>

        <div class="book-view">
            <span class="badge" ng-click="view='grid'"><i class="fa fa-th"></i></span><span class="badge" ng-click="view='list'"><i class="fa fa-th-list"></i></span>
        </div>

        <?php include("templates/books-list.php");  ?>
    </div><!-- book-list -->


    <div class="container text-centered" ng-show="nav==='about'">
        <?php include("templates/about.php");  ?>
    </div>

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
    <script>
        var muutuja = <?=json_encode($book)?>;
        console.log(muutuja);
    </script>
<script src="test.js"></script>
</body>
</html>