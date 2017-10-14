<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 13/10/2017
 * Time: 19:28
 */
?>

<div class="rightcol">

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="sku">SKU <span class="required">*</span></label>
                                <input type="text" id="sku" name="product_sku" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" id="name" name="product_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="price">Price <span class="required">*</span></label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon">&pound;</div>
                                    <input type="text" id="price" name="product_price" class="form-control" placeholder="00.00">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Description <span class="required">*</span></label>
                                <textarea class="editor form-control" id="description" name="product_desc" rows="10"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="weight">Weight</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="number" id="weight" name="product_weight" class="form-control">
                                    <div class="input-group-addon">kg</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Dimensions (width , length , height)</label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon">W</div>
                                            <input type="number" id="weight" name="product_dim_w" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon">H</div>
                                            <input type="number" id="weight" name="product_dim_h" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon">L</div>
                                            <input type="number" id="weight" name="product_dim_l" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Add Product Images
                </div>
                <div class="card-body">

                    <div class="dropzoneBlock"></div>

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body autoHeight">

                    <button class="btn btn-success">Submit</button>

                </div>
            </div>

        </div>
    </div>

</div>
