/**
 * Created by angelina on 10.12.2014.
 */

// JS code

(function(){
    var app = angular.module('shelf',[]);
    app.controller('BookShelfController',function(){ //capitallettersup
        this.raamatud = books_array;
    });

    app.controller('GroupController', function(){
        this.gruppid = groups;
    });


    var groups = [
        {
            name : "Comics",
            groupID : 1,
            imgURL : 'http://images.hngn.com/data/images/full/27757/batman-vs-superman.png'
        },

        ]
    
    var books_array = muutuja;

})();
