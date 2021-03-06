<!-- Start shippingDeleteModal<?php echo $row['ID']; ?>.php -->

<!-- Edit Shipping Record Modal -->
<div class="modal fade" id="shippingDeleteModal<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="shippingDeleteModal<?php echo $row['ID']; ?>" aria-hidden="true">
    <form action="doShippingDelete.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shippingDeleteModal<?php echo $row['ID']; ?>">Delete Shipping Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ID" id="ID" class="form-control" value="<?php echo $row['ID']; ?>" >
                    Are you sure you want to delete shipping info for <strong><?php echo $_SESSION['shipping'][$row['ID']]['shippingFirstName'] . " " . $_SESSION['shipping'][$row['ID']]['shippingLastName']; ?></strong> at <strong><?php echo $_SESSION['shipping'][$row['ID']]['shippingStreet']; ?></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End shippingDeleteModal<?php echo $row['ID']; ?>.php -->