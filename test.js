/**
 * Created by angelina on 10.12.2014.
 */

// JS code

(function(){
    var app = angular.module('shelf',[]);
    app.controller('BookShelfController',function(){ //capitallettersup
        this.raamatud = books;
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

    var books  = [
        {
            title : 'Superman',
            author : 'James Franco',
            description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            imageURL : 'http://images.hngn.com/data/images/full/27757/batman-vs-superman.png',
            group: 'Comics',
            groupID: 1,
            ISBN : '9217895698123'
        },
        {
            title : 'Hunger Games',
            author : 'Samuel Jackson',
            description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Action',
            groupID: 2,
            ISBN : '9217895698123'
        },
        {
            title : 'Hush',
            author : 'Jo Goldman',
            description : '...',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Comics',
            groupID: 1,
            ISBN : '9217895698123'
        },
        {
            title : 'Mis Action Käib?',
            author : 'Indrek Uibo',
            description : '...',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Drama',
            groupID: 3,
            ISBN : '9217895698123'
        },
        {
            title : 'Who is your monkey?',
            author : 'Mr. Buggalo',
            description : 'Peace of Shit',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'All',
            groupID: 0,
            ISBN : '9217895698123'
        },
        {
            title : 'Biography of Office Trash',
            author : 'Office Trash',
            description : '...',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Drama',
            groupID: 3,
            ISBN : '9217895698123'
        },
        {
            title : 'CSS: Shocking true',
            author : 'Drunk Designer',
            description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Drama',
            groupID: 3,
            ISBN : '9217895698123'
        }
        ,
        {
            title : 'CSS: Shocking true',
            author : 'Drunk Designer',
            description : '...',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Drama',
            groupID: 3,
            ISBN : '9217895698123'
        },
        {
            title : 'CSS: Shocking true',
            author : 'Drunk Designer',
            description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            imageURL : 'http://icons.iconarchive.com/icons/yohproject/crayon-cute/256/box-full-icon.png',
            group: 'Drama',
            groupID: 3,
            ISBN : '9217895698123'
        }
    ]

})();
