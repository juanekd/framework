<h2>Agregar usuario</h2>

<form action="<?php echo APP_URL."/users/add"; ?>" method="POST">
	
     <p>
	    <label for="username">Username</label>
	    <input type="text" name="username">
     </p>
     <p>
	    <label from="password">Password</label>
	    <input type="password" name="password">
     </p>
     <p>
	    <label for="rol">Rol</label>
	    <input type="text" name="rol">
     </p>
     <p>
	    <input type="submit">
     </p>
</form>