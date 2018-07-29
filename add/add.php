<?php include("../header.php"); ?>

<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';

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
                  <div class="x_title">
                    <h2>Manually Add a Student Health Record</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<h1><?php echo $sql_success ? "Successfully added." : $sql_error; ?></h1>
                  </div>
                </div>
              </div>
            </div> <!-- //row -->
            
          </div>
        </div>
        <!-- /page content -->
        
<?php include("../footer.php"); ?>