<?php
/**
 * Created by PhpStorm.
 * User: janha_000
 * Date: 11/17/2018
 * Time: 4:04 PM
 */
?>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/usersform'); ?>
<!--insert user data -->
<h2>User Information</h2>
<label for="firstN">First Name</label>
<input type="text" name="firstN" /><br />

<label for="lastN">Last Name</label>
<input type="text" name="lastN" /><br />

<label for="userAdd1">Address 1</label>
<input type="text" name="userAdd1" /><br />

<label for="userAdd2">Address 2 (apt/bldg etc)</label>
<input type="text" name="userAdd2" /><br />

<label for="userCity">City</label>
<input type="text" name="userCity" /><br />

<label for="userState">State</label>
<input type="text" name="userState" /><br />

<label for="userZip">Zip code</label>
<input type="input" name="userZip" size="5"/><br />

<label for="userPhone">Phone</label>
<input type="input" name="userPhone" size="10" /><br />

<label for="userEmail">Title</label>
<input type="email" name="userEmail" /><br />

<!--insert data of the company-->
<h2>Company Information</h2>

<label for="compN">Company Name</label>
<input type="text" name="compN" /><br />

<label for="compAdd1">Company Address</label>
<input type="text" name="compAdd" /><br />

<label for="compCity">Company City</label>
<input type="text" name="compCity" /><br />

<label for="compState">State</label>
<input type="text" name="compState" /><br />

<label for="compZip">Zip code</label>
<input type="input" name="compZip" /><br />

<label for="compPhone">Phone</label>
<input type="input" name="compPhone" />

<label for="invoice">Invoice</label>
<input type="file" name="invoice" />

<input type="submit" name="submit" value="Create data" />

</form>

<a href ="login.php">Admin login</a>