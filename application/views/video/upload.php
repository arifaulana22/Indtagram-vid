
<link rel = "stylesheet" type = "text/css" href ="<?php echo base_url('assets/css/upload.css');?>">
<script src="<?php echo base_url('assets/js/upload2.js');?>"> </script>
<div>
<?php echo $error;?>

  	<?php echo form_open_multipart('video/upload');?>

    <input type="file" name="video" multiple>
    <p>Drag your files here or click in this area.</p>
    <button type="submit">Upload</button>
  </form>
</div>
