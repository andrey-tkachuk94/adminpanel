<div style="max-width: 300px; margin: 0 auto;">
    
    <style>
        .btn-default {
            background-color: grey;
            color: white;
        }
        h2 {
            text-align: center;
        }
        #submit {
            text-align: center;
        }
    </style>

<h2>Sign in</h2>

<?php if ($form['state'] == 'errors'): ?>
    <div class="alert alert-danger">
        <?php if ($form['global_error']): ?>
        <?php echo $form['global_error'] ?>
        <?php else: ?>
        Incorrect login and/or password!
        <?php endif; ?>
    </div>
<?php endif; ?>

<form role="form" method="post">
    <input type="hidden" name="login_form" value="1">
  <div class="form-group<?php echo !empty($form['errors']['username']) ? ' has-error' : '' ?>">
    <label for="exampleInputUsername1">Username</label>
    <input type="text" name="username" required class="form-control" id="exampleInputUsername1" placeholder="Enter username" value="<?php echo !empty($form['data']['username']) ? $form['data']['username'] : '' ?>">
  </div>
  <div class="form-group<?php echo !empty($form['errors']['password']) ? ' has-error' : '' ?>">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Enter password">
  </div>
    <div id="submit">
  <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>

</div>
