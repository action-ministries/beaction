<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-content2">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2>Plan a Visit</h2>
                <p>Interested in ACTION Christian Center?  We'd love to meet you!</p>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name*</label>
                                <input type="text" class="form-control input-lg" id="firstname" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="emailadr">Email Address</label>
                                <input type="text" class="form-control input-lg" id="emailadr" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <label for="visitdt">Date of visit*</label>
                                <input type="text" class="form-control input-lg" id="visitdt" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="lastname">Last Name*</label>
                            <input type="text" class="form-control input-lg" id="lastname" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="phoneno">Phone Number</label>
                            <input type="text" class="form-control input-lg" id="phoneno" placeholder="Enter phone number">
                        </div>
                        <b>  Who's Attending here</b>
                        <div class="row">
                            <div class="col-sm-3 nopad">
                                <div class="form-group">
                                    <input type="number" class="form-control input-lg" name="adult-quantity" id="adult-quantity" min="1" max="10">
                                </div>
                            </div>
                            <div class="col-sm-3 align-self-center">
                                <label for="adult-quantity">Adults</label>
                            </div>
                            <div class="col-sm-3 nopad">
                                <div class="form-group">
                                    <input type="number" class="form-control input-lg" name="child-quantity" id="child-quantity" min="1" max="10">
                                </div>
                            </div>
                            <div class="col-sm-2 align-self-center">
                                <label for="child-quantity">Children</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <button type="submit" class="btn btn-primary btn-center">Submit</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#planModalButton").click(function(){
            $("#myModal").modal();
        });
    });
</script>