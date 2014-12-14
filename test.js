/**
 * Created by angelina on 10.12.2014.
 */

// JS code

(function(){
    var app = angular.module('shelf',[]);
    app.controller('BookShelfController',function(){ //capitallettersup
        this.raamatud = books_array;
    });

    app.controller('GroupsController',function(){ //capitallettersup
        this.grupp = groups_array;
    });

    app.controller('FormController', function($scope, $http){
        $scope.formData= {};

        $scope.processForm = function() {
            alert('Are you sure you want to delete this book?');
            $http({
                method : 'POST',
                url : 'processing/process.php',
                data : $.param($scope.formData),
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
            })

                .success(function(data) {
                    console.log(data);

                    if (!data.success) {
                        // if not successful, bind errors to error variables
                    } else {
                        // if successful, bind success message to message
                        $scope.message = data.message;
                    }
                });
        }
    });


    var groups_array = gruppid;
    var books_array = muutuja;

})();
