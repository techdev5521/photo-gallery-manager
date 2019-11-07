<!-- Start accountModal.php -->

<!-- Edit Account Info Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="accountModal">Personal Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" name="firstName" id="firstName" class="form-control" value="<?php getSessionVariable("firstName") ?>" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" name="lastName" id="lastName" class="form-control" value="<?php getSessionVariable("lastName") ?>" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php getSessionVariable("email") ?>" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="tel" name="phone" id="phone" class="form-control" value="<?php getSessionVariable("phone") ?>" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save Changes</button>
			</div>
		</div>
	</div>
</div>

<!-- End accountModal.php -->