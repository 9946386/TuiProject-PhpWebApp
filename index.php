<?php include 'connection.php' ?>
<?php include 'header.php' ?>

<!-- Page Title -->
<div class="container-sm text-dark px-3 p-4">
    <div class="row justify-content webDate">
        <h6 class="todaysDate col-6 align-self-center" id="todaysDate"></h6>
    </div>
</div>

<!-- Truck Job Table -->
<div class="container-fluid bg-secondary vh-100 darkContainer">
    <div class="container px-4 p-3 webDailyPlanTruckCard vh-100">
        <div class="row gy-2">
            <div class="col-12">
                <div class="card mainPageJobCard">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-11">
                                <h5 class="card-title">Driver
                                </h5>
                            </div>
                            <div class="col-1">
                                <a href="pages/webAddJob.php" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pt-3">


                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                        <tr class="table-light">
                                            <th scope="col" class="col-2">Job</th>
                                            <th scope="col">Type</th>
                                            <th scope="col" class="col-2">Order #</th>
                                            <th scope="col" class="col-2">Reference</th>
                                            <th scope="col">Pallets</th>
                                            <th scope="col">Weight (kg)</th>
                                            <th scope="col" class="col-2">Status</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                            <tr>
                                                <th scope="row">Upper Hutt Mega</th>
                                                <td>Delivery</td>
                                                <td>SEM173666</td>
                                                <td>TUI181500</td>
                                                <td>18</td>
                                                <td>17565</td>
                                                <td>Loaded</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kapiti Mega</th>
                                                <td>Delivery</td>
                                                <td>SOM112677</td>
                                                <td>TUI181501</td>
                                                <td>7</td>
                                                <td>4980</td>
                                                <td>Loaded</td>
                                            </tr>
                                        </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>