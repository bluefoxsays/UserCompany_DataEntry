<?php
/**
 * Created by PhpStorm.
 * User: janha_000
 * Date: 11/18/2018
 * Time: 10:45 PM
 */?>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/usersform'); ?>
<label for="username">First Name</label>
<input type="text" name="firstN" /><br />

<label for="password">Password</label>
<input type="text" name="password" /><br />

</form>