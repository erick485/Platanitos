<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/semantic.min.js"></script>
  <script type="text/javascript" src="js/semantic.js"></script>
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript" src="js/tablesort.js"></script>
  <script type="text/javascript" src="js/waypoints.js"></script>

</head>
<body ng-app="quipuApp">
 <div class="main container">
 	<div class="ui small black inverted menu">
      <a class="active item">
        <i class="green home icon"></i> Home
      </a>
      <a class="item">
        <i class="blue mail icon"></i> Messages
      </a>1
      <div class="right menu">
        <div class="item">
          <div class="ui icon input">
            <input type="text" placeholder="Search...">
            <i class="search link icon"></i>
          </div>
        </div>
        <div class="ui dropdown item">
          Language <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item">English</a>
            <a class="item">Russian</a>
            <a class="item">Spanish</a>
          </div>
        </div>
        <div class="item">
            <div class="ui orange button" id="signUP"><i class="user icon"></i> Sign Up</div>
        </div>
      </div>
    </div>
</div>

<div class="container">
    <div ng-view>

    </div>
</div>

 <div class="ui small modal" id="mod">
     <div class="header">
         Login
       </div>
       <div class="content">
         <div class="ui form segment">
               <div class="field">
                 <label>Username</label>
                 <div class="ui left labeled icon input">
                   <input type="text" placeholder="Username" name="name">
                   <i class="user icon"></i>
                   <div class="ui corner label">
                     <i class="asterisk icon"></i>
                   </div>
                 </div>
               </div>
               <div class="field">
                 <label>Password</label>
                 <div class="ui left labeled icon input">
                   <input type="password" name="pass">
                   <i class="lock icon"></i>
                   <div class="ui corner label">
                     <i class="asterisk icon"></i>
                   </div>
                 </div>
               </div>
               <div class="ui green submit button">Login</div>
             </div>
       </div>
     </div>

<script src="resources/components/requirejs/require.js" data-main="resources/scripts/main.js"></script>
</body>
</html>