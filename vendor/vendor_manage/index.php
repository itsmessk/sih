<?php if ($_settings->chk_flashdata('success')): ?>
	<script>
		alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
	</script>
<?php endif; ?>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of Vendors</h3>
		<div class="card-tools">
			<a href="?page=vendor_manage/manage_account" class="btn btn-flat btn-primary"><span
					class="fas fa-plus"></span> Create New</a>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<table class="table table-bordered table-stripped" id="indi-list">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="10%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Vendor Account #</th>
						<th>Date Added</th>
						<th>Company Name</th>
						<th>Contact Person</th>

						<th>Address</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT *,c_name as `name` from `vendor` order by concat(c_name,', ',p_name) desc ");
					while ($row = $qry->fetch_assoc()):
						?>

						<tr><?php if(!$row['status'] == 0){ ?>
							<td class="text-center">
								<?php echo $i++; ?>
							</td>
							<td>
								<?php echo $row['vendor_number'] ?>
							</td>
							<td>
								<?php echo $row['date_added'] ?>
							</td>
							<td>
								<?php echo $row['name'] ?>
							</td>
							<td>
								<p class="m-0">
									<?php echo $row['p_name'] ?><br>
									<?php echo $row['contact_no'] ?>
								</p>
							</td>

							<td>
								<?php echo $row['address'] ?>
							</td>
							<td class="text-center">
								<?php if ($row['status'] == 1): ?>
									<span class="badge badge-success">Active</span>
								<?php else: ?>
									<span class="badge badge-secondary">Inactive</span>
								<?php endif; ?>
							</td>
							<td align="center">
								<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon"
									data-toggle="dropdown">
									Action
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu" role="menu">
									<a class="dropdown-item edit_data"
										href="./?page=vendor_manage/manage_account&id=<?php echo $row['id'] ?>"
										data-id="<?php echo $row['id'] ?>"> Edit</a>
									<a class="dropdown-item delete_data" href="javascript:void(0)"
										data-id="<?php echo $row['id'] ?>"> Delete</a>
								</div>
							</td>
						</tr>
					<?php } ?>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	var indiList;
	$(document).ready(function () {
		$('.delete_data').click(function () {
			_conf("Are you sure to delete this Account? All Transactions made will be also deleted.", "delete_account", [$(this).attr('data-id')])
		})
	})
	function delete_account($id) {
		start_loader();
		$.ajax({
			url: _base_url_ + "classes/Master.php?f=delete_account",
			method: "POST",
			data: { id: $id },
			dataType: "json",
			error: err => {
				console.log(err)
				alert_toast("An error occured.", 'error');
				end_loader();
			},
			success: function (resp) {
				if (typeof resp == 'object' && resp.status == 'success') {
					location.reload();
				} else {
					alert_toast("An error occured.", 'error');
					end_loader();
				}
			}
		})
	}
	$(function () {
		indiList = $('#indi-list').dataTable({
			columnDefs: [{
				targets: [6],
				orderable: false
			}],
		});
	})
</script>