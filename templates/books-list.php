
<div class="row" id="book-pins" ng-class="{ listView :view === 'list'}">
    <div ng-repeat="book in books.raamatud">
        <div class="thumb" ng-class="{ hide: tab!==book.groupID && tab!==0}">
            <div class="panel panel-default book-panel">
                <div class="panel-body">
                    <div class="media" style="margin-bottom: 20px">
                        <a class="media-left" href="#">
                            <img src="http://images.hngn.com/data/images/full/27757/batman-vs-superman.png" class="img-circle small-icon">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading" style=" margin-top: 6px;">{{book.group}}</h4>
                        </div>
                    </div>
                    <div class="caption">
                        <div class="book-info"><img ng-src="img/{{book.image}}" class="img-circle"></div>
                        <div class="book-info"><h2>{{book.title}}</h2></div>
                        <div class="book-info"><h3><small>{{book.author}}</small></h3></div>
                        <div class="book-info"><p>{{book.ISBN}}</p></div>
                        <div class="book-info"><p>{{book.description}}</p></div>
                        <div class="book-info"><p><a href="#" class="btn btn-success" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
    </div>
    <!-- Add the extra clearfix for only the required viewport -->
    <div class="clearfix visible-xs-block"></div>
</div>