<?php include('../../includes/conf.php');
  get_header();
  get_side();
?>
<div class="col-md-10 table-responsive p-3">
<?php 
    $sql = "SELECT * FROM dev natural join project_status";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table class='table table-light align-middle text-center table-bordered'>
            <thead>
                <tr> 
                <th>Project Name</th> 
                    <th>Project Status</th>
                    <th>Project Cost</th>
                    <th>Assaingend  Developer</th>
                    <th> Spened</th>
                </tr>
            </thead>
       <?php while ($row = $result->fetch_assoc()) {?>
            <tbody>
            <tr>
                <td><?=$row['project_name']?></td>
                <td><?=$row['p_status']?></td>
                <td><?=$row['project_price']?></td>
                <td><?=$row['land_agent_name']?></td>
                <td><?=$row['spened']?></td>    
            <tr>
            
            
            </tbody>
            <?php }?>
        </table>
        <?php }
                
        ?>