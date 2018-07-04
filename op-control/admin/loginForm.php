<head>
  <title>OpenPress Login</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body class="bodyLogin">
      <form action="admin.php?action=login" method="post" style="width: 50%;" autocomplete="off" class="adminForm">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
<div class="adminLoginlogo"><a href="."><img id="logo" src="images/logo.png" alt="wgCMS" /></a></div>

        <ul>

          <li>
            <input type="text" name="username" id="username" placeholder="Username" required autofocus maxlength="20" />
          </li>

          <li>
            <input type="password" name="password" id="password" placeholder="Password" required maxlength="20" />
          </li>

        </ul>

        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>

      </form>
    </body>