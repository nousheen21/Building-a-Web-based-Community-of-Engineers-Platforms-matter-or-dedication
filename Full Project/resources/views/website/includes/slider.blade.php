<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main-slideshow">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{!! asset('/') !!}/image/con1.jpg" />
                        </li>
                        <li>
                            <img src="{!! asset('/') !!}/image/con3.jpg" />
                        </li>
                        <li>
                            <img src="{!! asset('/') !!}/image/con5.jpg" />
                        </li>
                        <li>
                            <img src="{!! asset('/') !!}/image/con9.jpg" />
                        </li>
                        <li>
                            <img src="{!! asset('/') !!}/image/con7.jpg" />
                        </li>
                    </ul> <!-- /.slides -->
                </div> <!-- /.flexslider -->
            </div> <!-- /.main-slideshow -->
        </div> <!-- /.col-md-12 -->

        <div class="col-md-4">
            <div class="widget-item">
                <div class="request-information">
                    <h4 class="widget-title">Request Information</h4>
                    <form class="request-info clearfix">
                        <div class="full-row">
                            <label for="cat">Campus of Interest:</label>
                            <div class="input-select">
                                <select name="cat" id="cat" class="postform">
                                    <option value="-1">-- select --</option>
                                    <optgroup label="Picnic">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </optgroup>
                                    <optgroup label="Camping">
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                    </optgroup>
                                </select>
                            </div> <!-- /.input-select -->
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="cat2">Program of Interest:</label>
                            <div class="input-select">
                                <select name="cat2" id="cat2" class="postform">
                                    <option value="-1">-- select --</option>
                                    <option class="level-0" value="49">Germany</option>
                                    <option class="level-0" value="56">United Kingdom</option>
                                    <option class="level-0" value="59">Italy</option>
                                    <option class="level-0" value="76">France</option>
                                    <option class="level-0" value="77">Belgium</option>
                                    <option class="level-0" value="79">Monaco</option>
                                </select>
                            </div> <!-- /.input-select -->
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="yourname">Full Name:</label>
                            <input type="text" id="yourname" name="yourname">
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="email-id">Email Address:</label>
                            <input type="text" id="email-id" name="email-id">
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <div class="submit_field">
                                <span class="small-text pull-left">Subscribe to our newsletter</span>
                                <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                            </div> <!-- /.submit-field -->
                        </div> <!-- /.full-row -->


                    </form> <!-- /.request-info -->
                </div> <!-- /.request-information -->
            </div> <!-- /.widget-item -->
        </div> <!-- /.col-md-4 -->
    </div>
</div>