<?php include("../header.php");

$index = 0;
$sql_key = "";
$sql_value = "";
foreach ($_POST as $key => $value) {
	$sql_key .= $key;
	$sql_value .= "'" . $value;
	if ( $index != (sizeof($_POST) - 1) ) {
        $sql_key .= ", ";
        $sql_value .= "', "; }
    else {
        $sql_value .= "'"; }
	$index++;
}
$sql = "INSERT INTO students (" . $sql_key . ") VALUES (" . $sql_value . ")";

$sql_success = true;
if ( !(mysqli_query($conn, $sql)) ) {
	$sql_success = false;
    $sql_error = mysqli_error($conn);
}

mysqli_close($conn);
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Student</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <?php if ($sql_success) { ?>
                  	<h2>Successfully added.</h2>
                      <p>Your request has been processed.</p>
                      <a href="<?php echo $shrms_home; ?>/add"><button type="button" class="btn btn-success btn-md">Add More</button></a>
                    <?php } else { ?>
                  	<h2 class="text-danger">There was an error in processing your request.</h2>
                      <p><?php echo $sql_error; ?></p>
                      <a href="<?php echo $shrms_home; ?>/add"><button type="button" class="btn btn-default btn-md">Try Again</button></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div> <!-- //row -->
            
          </div>
        </div>
        <!-- /page content -->
        
<?php include("../footer.php"); ?>