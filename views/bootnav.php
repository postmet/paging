<?php
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2015 Sangoma Technologies.
//
?>
<a href="config.php?display=paging" class="list-group-item <?php echo ($request['view'] == ''? 'hidden':'')?>"><i class="fa fa-list"></i>&nbsp; <?php echo _("List Page Groups") ?></a>
<?php
if($request['view'] == 'form'){
	echo '<table id="bnavgrid"></table>';
}
?>