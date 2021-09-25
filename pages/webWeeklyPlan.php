<?php include '/connection.php' ?>
<?php include '/pages/pagesHeader.php' ?>

<!-- Page Title -->
<div class="container-sm text-dark px-3 p-4 truckList">
        <div class="row m-auto align-items-center">
            <div class="col text-center">
                <button class="btn btn-primary rounded-pill active" aria-pressed="true">Truck 1</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-primary rounded-pill">Truck 2</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-primary rounded-pill">Truck 3</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-primary rounded-pill">Truck 4</button>
            </div>
        </div>
    </div>

    <!-- Truck's Weekly Job List -->
    <div class="container-fluid bg-secondary darkContainer">
        <div class="container py-5 px-4 p-3 webWeeklyPlanTruckCard ">
            <div class="row gy-2"> 
                <div class="col-12">
                    <!-- Monday -->
                    <div class="card mondayJobCard my-1">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-11">
                                    <h5 class="card-title">Monday ...</h5>
                                </div>
                                <div class="col-1">                            
                                    <a href="/pages/webAddJob.php" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
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
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tuesday -->
                    <div class="card tuesdayJobCard my-2">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-11">
                                    <h5 class="card-title">Tuesday ...</h5>
                                </div>
                                <div class="col-1">                            
                                    <a href="/pages/webAddJob.html" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
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
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wednesday -->
                    <div class="card wednesdayJobCard my-2">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-11">
                                    <h5 class="card-title">Wednesday ...</h5>
                                </div>
                                <div class="col-1">                            
                                    <a href="/pages/webAddJob.html" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
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
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Thursday -->
                    <div class="card thursdayJobCard my-2">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-11">
                                    <h5 class="card-title">Thursday ...</h5>
                                </div>
                                <div class="col-1">                            
                                    <a href="/pages/webAddJob.html" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
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
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Friday -->
                    <div class="card fridayJobCard my-2">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-11">
                                    <h5 class="card-title">Friday ...</h5>
                                </div>
                                <div class="col-1">                            
                                    <a href="/pages/webAddJob.html" class="btn btn-primary btn-sm text-light rounded-pill">Add Job</a>
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
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '/footer.php' ?>