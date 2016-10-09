<script>
// auto logout
setTimeout(function() {
    top.location.href = '<?php echo URL::base() ?>admin/logout';
}, <?php echo $config['auto_logout_time_miliseconds'] ?>);
</script>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='<?php echo URL::base() ?>admin/index'>Admin panel</a>
    </div>
    <ul class="nav navbar-nav">
      <li id="home" class="active"><a href='<?php echo URL::base() ?>admin/index'>Home</a></li>
      <li id="general"><a href='<?php echo URL::base() ?>admin/general'>General content</a></li>
      <li id="paid"><a href='<?php echo URL::base() ?>admin/paid'>Paid content</a></li>
      <li id="users"><a href='<?php echo URL::base() ?>admin/users'>Users management</a></li>
    </ul>
      <ul class="nav navbar-right">
          <li><a href='<?php echo URL::base() ?>admin/logout'>Logout</a></li>
      </ul>
  </div>
</nav>
