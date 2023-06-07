<?php include('../config/nav.php')?>
<?php include('../config/sidebar.php')?>

<div class="col-md-10 ">
  <form method="post" class="form">
    <div class="col-md-4">
      <label for="land" class="form-label mt-3">Agent Name</label>
      <input type="text" class="form-control mb-1 in" id="land" name="aname">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Agent Location</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="aarea">
    </div>
    <div class="col-md-4">
      <label for="larea" class="form-label">Agent Contact</label>
      <input type="text" class="form-control mb-1 in" id="larea" name="acontact">
    </div>
    <div class="mb-3 col-md-4">
      <label for="formFile" class="form-label">Upload Land Photos</label>
      <input class="form-control" type="file" id="formFile">
  </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

<?php
if(isset($_POST['sub'])){
  $aname=$_POST['aname'];
  $aarea=$_POST['aarea'];
  $acontact=$_POST['acontact'];
if(!empty($aname)&& !empty($aarea)&& !empty($acontact)){
  $sql ="INSERT INTO land_agent (land_agent_name,land_agent_location,land_agent_contact) VALUES('$aname','$aarea','$acontact')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}




?>