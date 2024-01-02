<?= $this->extend('layout/student/template/index'); ?>


<?= $this->section('content'); ?>


<div class="col-md-12 text-left text-white d-flex justify-content-between">
    <h3>Reading Test</h3>
    <h3 id="timer"></h3>
</div>

</div>


<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 30em;">

    <!-- Content Row -->
    <div class="row mb-5 justify-content-center" style="margin-top:-80px">

        <!-- Reading Test-->
        <div class="col-xl-6 col-md-6 col-sm-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow ">
                <div class="card-body">
                    <div class="col-12 p-3">
                        <div>

                            <h3>Questions 1-9</h3>
                            <p>
                                Carbon tetrachloride is a colorless and inflammable liquid that can be produced by combining carbon disulfide and chlorine. This compound is widely used in industry today because of its effectiveness as a solvent as well as its use in the production of propellants.
                                Line Despite its widespread use in industry, carbon tetrachloride has been banned for home use. In (5) the past, carbon tetrachloride was a common ingredient in cleaning compounds that were used
                                throughout the home, but it was found to be dangerous: when heated, it changes into a poisonous gas that can cause severe illness and even death if it is inhaled. Because of this dangerous characteristic, the United States revoked permission for the home use of carbon tetrachloride in 1970. The United States has taken similar action with various other chemical compounds.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow " id="page-content">
                <div class="card-body">
                    <div class="col-12 p-3">
                        <div>
                            <h5>1. The main point of this passage is that...</h5>
                            <ol type="a" class="ml-5">
                                <li>carbon tetrachloride can be very dangerous when it is heated</li>
                                <li>the government banned carbon tetrachloride in 1970</li>
                                <li>although carbon tetrachloride can legally be used in industry, it is not allowed in home products</li>
                                <li>carbon tetrachloride used to be a regular part of cleaning compounds</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                            <nav aria-label="Page navigation example">
                                <ul id="pagination-demo" class="pagination justify-content-center"></ul>
                            </nav>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>