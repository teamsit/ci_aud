    <title>View Data from Database</title>
    <form action="" method="post">
    <table border="1" cellpadding="10">
    <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Action</td>
    <td>Delete Record</td>
    </tr>
    <?php foreach($query as $row) 
          { ?>
            <tr>
             <?php //echo $row->user_id; ?>
            <td> <?php echo $row->title; ?></td>
            <td> <?php echo $row->content; ?></td>
            <td> <a href="<?php echo base_url(); ?>aud/view/<?php echo $row->id; ?>">View</a></td>
            <td> <a href="#">Edit</a></td>
            <td> <a href="#">Delete</a></td>
            </tr>
<script>
function myFunction() {
    var myWindow = window.open("<?php echo base_url(); ?>aud/view/<?php echo $row->id; ?>", "", "width=600, height=400, top=150, left=400,");
}
</script>    
    <?php } ?>

    </table>
    </form>