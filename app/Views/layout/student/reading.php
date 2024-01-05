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
                    <div class="col-12 p-3" style="font-size: 1.1em;">
                        <div class="artikel">

                            <img src="<?= base_url() ?>/templates/img/r1_out.jpg" alt="" width="100%" />


                        </div>
                        <div class="artikel">

                            <img src="<?= base_url() ?>/templates/img/r2_out.jpg" alt="" width="100%" />


                        </div>
                        <div class="artikel">
                            <h3>Questions 1 - 9</h3>
                            <p style="text-indent: 45px;">
                                Carbon tetrachloride is a colorless and inflammable liquid that can be produced by combining carbon disulfide and chlorine. This compound is widely used in industry today because of its effectiveness as a solvent as well as its use in the production of propellants.</p>
                            <p style="text-indent: 45px;">

                                Despite its widespread use in industry, carbon tetrachloride has been banned for home use. In the past, carbon tetrachloride was a common ingredient in cleaning compounds that were used
                                throughout the home, but it was found to be dangerous: when heated, it changes into a poisonous gas that can cause severe illness and even death if it is inhaled. Because of this dangerous characteristic, the United States revoked permission for the home use of carbon tetrachloride in 1970. The United States has taken similar action with various other chemical compounds.</p>



                        </div>
                        <div class="artikel">

                            <h3>Questions 10 - 19</h3>
                            <p style="text-indent: 45px;">
                                The next artist in this survey of American artists is James Whistler; he is included in this survey of American artists because he was born in the United States, although the majority of his artwork was completed in Europe. Whistler was born in Massachusetts in 1834, but nine years later his father Line moved the family to St. Petersburg, Russia, to work on the construction of a railroad. The family (5) returned to the United States in 1849. Two years later Whistler entered the U.S. military academy at West Point, but he was unable to graduate. At the age of twenty-one, Whistler went to Europe to study art despite familial objections, and he remained in Europe until his death.
                            </p>
                            <p style="text-indent: 45px;">

                                Whistler worked in various art forms, including etchings and lithographs. However, he is most famous for his paintings, particularly Arrangement in Gray and Black No. 1: Portrait of the Artist's (10) Mother or Whistler's Mother, as it is more commonly known. This painting shows a side view of Whistler's mother, dressed in black and posing against a gray wall. The asymmetrical nature of the portrait, with his mother seated off-center, is highly characteristic of Whistler's work.</p>

                        </div>
                        <div class="artikel">

                            <h3>Questions 20 - 25</h3>
                            <p style="text-indent: 45px;">
                                The locations of stars in the sky relative to one another do not appear to the naked eye to change, and as a result stars are often considered to be fixed in position. Many unaware stargazers falsely assume that each star has its own permanent home in the nighttime sky.
                            </p>
                            <p style="text-indent: 45px;">

                                In reality, though, stars are always moving, but because of the tremendous distances between stars themselves and from stars to Earth, the changes are barely perceptible here. An example of a rather fast-moving star demonstrates why this misconception prevails; it takes approximately 200 years for a relatively rapid star like Bernard's star to move a distance in the skies equal to the diameter of the earth's moon. When the apparently negligible movement of the stars is contrasted with the movement of the planets, the stars are seemingly unmoving.</p>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 col-sm-6 mb-4" style="text-decoration: none;z-index: 2;" id="myDiv">
            <div class="card  shadow " id="page-content">
                <div class="card-body">
                    <div class="col-12 p-3">
                        <div class="exam">
                            <img src="<?= base_url() ?>/templates/img/r3_out.png" alt="" width="100%" />
                        </div>
                        <div class="exam">
                            <img src="<?= base_url() ?>/templates/img/r4_out.jpg" alt="" width="100%" />
                        </div>
                        <div class="exam">
                            <h5>1. The main point of this passage is that...</h5>
                            <ol type="a" class="ml-5">
                                <li>carbon tetrachloride can be very dangerous when it is heated</li>
                                <li>the government banned carbon tetrachloride in 1970</li>
                                <li>although carbon tetrachloride can legally be used in industry, it is not allowed in home products</li>
                                <li>carbon tetrachloride used to be a regular part of cleaning compounds</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw1">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw1">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw1">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw1">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="exam">
                            <h5>2. The word "widely" in line 2 could most...</h5>
                            <ol type="a" class="ml-5">
                                <li>grandly</li>
                                <li>extensively</li>
                                <li>largely</li>
                                <li>hugely</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw2">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw2">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw2">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw2">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>3. The word "banned" in line 4 is closest in meaning to...</h5>
                            <ol type="a" class="ml-5">
                                <li>forbidden</li>
                                <li>allowed</li>
                                <li>suggested</li>
                                <li>instituted</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw3">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw3">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw3">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw3">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>4. According to the passage, before 1970 carbon tetrachloride was...</h5>
                            <ol type="a" class="ml-5">
                                <li> used by itself as a cleanser</li>
                                <li>banned in industrial use</li>
                                <li>often used as a component of cleaning products</li>
                                <li>not allowed in home cleaning products
                                </li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>5. It is stated in the passage that when carbon tetrachloride is heated, it becomes...</h5>
                            <ol type="a" class="ml-5">
                                <li>harmful</li>
                                <li>colorless</li>
                                <li>a cleaning compound</li>
                                <li>inflammable</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw4">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>6. The word "inhaled" in line 7 is closest in meaning to...</h5>
                            <ol type="a" class="ml-5">
                                <li>warmed</li>
                                <li>breathed in</li>
                                <li>carelessly used</li>
                                <li>blown</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw6">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw6">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw6">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw6">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>7. The word "revoked" in line 8 could most
                                easily be replaced by...</h5>
                            <ol type="a" class="ml-5">
                                <li>gave</li>
                                <li>granted</li>
                                <li>instituted</li>
                                <li>took away</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw7">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw7">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw7">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw7">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>8. It can be inferred from the passage that one role of the U.S. government is to...</h5>
                            <ol type="a" class="ml-5">
                                <li>regulate product safety </li>
                                <li>prohibit any use of carbon tetrachloride</li>
                                <li>instruct industry on cleaning methodologies</li>
                                <li>ban the use of any chemicals</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw8">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw8">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw8">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw8">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>9. The paragraph following the passage most likely discusses
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>additional uses for carbon tetrachloride</li>
                                <li>the banning of various chemical
                                    compounds by the U.S. government</li>
                                <li>further dangerous effects of carbon tetrachloride</li>
                                <li>the major characteristics of carbon tetrachloride</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw9">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw9">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw9">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw9">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>10. The paragraph preceding this passage most likely discusses
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>a survey of eighteenth-century art</li>
                                <li>a different American artist</li>
                                <li>Whistler's other famous paintings</li>
                                <li>European artists</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw10">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw10">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw10">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw10">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>11. Which of the following best describes the information in the passage?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>Several artists are presented.</li>
                                <li>One artist's life and works are described.</li>
                                <li>Various paintings are contrasted.</li>
                                <li>Whistler's family life is outlined.</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw11">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw11">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw11">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw11">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>12. Whistler is considered an American artist
                                because
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>he was born in America</li>
                                <li>he spent most of his life in America</li>
                                <li>he served in the U.S. military</li>
                                <li>he created most of his famous art in America</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw12">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw12">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw12">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw12">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>13. The word "majority" in line 2 is closest in
                                meaning to
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>seniority</li>
                                <li>maturity</li>
                                <li>large pieces</li>
                                (B) (C) (D) high percentage
                                <li></li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw13">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw13">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw13">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw13">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>14. It is implied in the passage that Whistler's
                                family was
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>unable to find any work at all in Russia</li>
                                <li>highly supportive of his desire to pursue art</li>
                                <li>working class</li>
                                <li>military</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw14">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw14">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw14">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw14">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>15. The word "objections" in line 7 is closest in
                                meaning to
                                ...</h5>

                            <ol type="a" class="ml-5">
                                <li>protests</li>
                                <li>goals</li>
                                <li>agreements</li>
                                <li>battles</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw15">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw15">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw15">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw15">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>16. In line 8, the "etchings" are
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>a type of painting</li>
                                <li>the same as a lithograph</li>
                                <li>an art form introduced by Whistler</li>
                                <li>an art form involving engraving</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw16">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw16">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw16">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw16">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>17. The word "asymmetrical" in line 11 is closest in meaning to
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>proportionate</li>
                                <li>uneven</li>
                                <li>balanced</li>
                                <li>lyrical</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw17">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw17">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw17">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw17">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>18. Which of the following is NOT true according to the passage ?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>Whistler worked with a variety of art forms.</li>
                                <li>Whistler's Mother is not the official name of his painting.</li>
                                <li>Whistler is best known for his etchings.</li>
                                <li>Whistler's Mother is painted in somber
                                    tones.</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw18">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw18">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw18">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw18">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>19. Where in the passage does the author mention the types of artwork that Whistler was involved in ?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>Lines 1-3</li>
                                <li>Lines 4-5</li>
                                <li>Lines 6-7</li>
                                <li>Lines 8-10</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw19">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw19">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw19">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw19">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>20. Which of the following is the best title for
                                this passage ?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>What the Eye Can See in the Sky</li>
                                <li>Bernard's Star</li>
                                <li> Planetary Movement</li>
                                <li>The Evermoving Stars</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw20">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw20">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw20">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw20">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>21. According to the passage, the distances
                                between the stars and Earth are
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>barely perceptible</li>
                                <li>huge</li>
                                <li>fixed</li>
                                <li>moderate</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw21">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw21">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw21">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw21">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>22. The word "perceptible" in line 5 is closest in meaning to which of the following ?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li> Noticeable</li>
                                <li>Persuasive</li>
                                <li>Conceivable</li>
                                <li>Astonishing</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw22">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw22">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw22">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw22">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>23. The passage implies that from Earth it appears that the planets
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>are fixed in the sky</li>
                                <li>move more slowly than the stars</li>
                                <li>show approximately the same amount of movement as the stars</li>
                                <li>travel through the sky considerably more rapidly than the stars</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw23">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw23">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw23">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw23">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>24. Which of the following is NOT true according to the passage ?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>Stars do not appear to the eye to move.</li>
                                <li>The large distances between stars and the earth tend to magnify movement to the eye.</li>
                                <li>Bernard's star moves quickly in
                                    comparison with other stars.</li>
                                <li>Although stars move, they seem to be fixed.</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw24">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw24">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw24">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw24">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                        <div class="exam">
                            <h5>25. This passage would most probably be assigned reading in which course?
                                ...</h5>
                            <ol type="a" class="ml-5">
                                <li>Astrology</li>
                                <li>Geophysics</li>
                                <li>Astronomy</li>
                                <li>Geography</li>
                            </ol>
                            <ul style="list-style-type:none">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw25">
                                    <label class="form-check-label">
                                        A
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw25">
                                    <label class="form-check-label">
                                        B
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw25">
                                    <label class="form-check-label">
                                        C
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="jaw25">
                                    <label class="form-check-label">
                                        D
                                    </label>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <nav aria-label="Page navigation example ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#" id="prev">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#" id="next">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->





<?= $this->endSection(); ?>