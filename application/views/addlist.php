<?php //$this->load->helper('url'); ?>
<title>Add Listing</title>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    height: "300px",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
<script type="text/javascript">
jQuery(function(){

    jQuery('#display-success').show();
    jQuery('#display-success').fadeOut(1600); 
    
});
</script>   

	<form action="<?php echo base_url(); ?>aud/add/" method="post" name="reg_form" onsubmit="return register(reg_form)" enctype="multipart/form-data">
        <div id="display-success"><?php echo form_error('name'); ?></div>
        <div class="lb">
            <label for="name" class="title-prompt-text">Add New Article</label>
        </div>
        <div class="lb">
              <input type="text" name="name" value="<?php if(isset($row['name'])) echo $row['name']; echo set_value('name'); ?>" placeholder="Enter title here" />
        </div>
        <div class="lb">
    		<textarea name="content" style="width:100%"></textarea>	
        </div>
        <div class="lb">
            <input type="submit" class="btn" name="submit" value="Publish" />
        </div>
	</form>
