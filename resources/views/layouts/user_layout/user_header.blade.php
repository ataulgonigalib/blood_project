<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{URL::to('/user/view-information')}}"><i class="icon-user"></i>My profile</a></li>
        <li class="divider"></li>
        <li><a href="{{URL::to('/user/logout')}}"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{URL::to('/user/setting')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{URL::to('/user/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
