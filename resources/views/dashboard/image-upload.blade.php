@section('title','Image Upload')
@extends('layouts.dashboard')
@section('content')
<div class="container as-upload-img-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 mx-auto">
                        <img src="assets/img/upload-img-icon.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mx-auto as-upload-heading">
                        <h1>Upload Image Pair</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto mb-3 ">
                        <div class="col-lg-6 pl-0">
                            <div class="row">
                                <div class="col-lg-5 col-5 as-upload-label">
                                    <label class="form-check-label" for="inlineRadio1">Select*</label>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" checked="" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Single</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Multiple</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto mb-3">
                        <div class="row">
                            <!-- <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5 as-upload-label">
                                        <label class="form-check-label" for="inlineRadio1">Portrait*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group row">

                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div> -->

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5 as-upload-label">
                                        <label class="form-check-label" for="inlineRadio1">Templates*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group row">

                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>


                </div>

                <!-- <div class="row">
                    <div class="col-lg-10 mx-auto mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5 as-upload-label">
                                        <label class="form-check-label" for="inlineRadio1">Page URL*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group row">

                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>All</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5 as-upload-label">
                                        <label for="exampleFormControlFile1">Upload Desktop*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="file" class="form-control-file as-upload-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>

                           <!--  <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5 as-upload-label">
                                        <label for="exampleFormControlFile1">Upload Mobile*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="file" class="form-control-file as-upload-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div> -->
                        </div>



                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-12 mx-auto">
                        <button type="button" class="as-upload-btn">Upload</button>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection