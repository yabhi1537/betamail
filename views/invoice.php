<?php 
error_reporting(0);
$this->load->view('includes/header');
$this->load->view('includes/sidebar');

?>
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}
</style>
<!-- partial -->
<div id="content" role="main" class="main">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADD Group | Add Bulk Invoice</h4>
                        <form class="forms-sample" action="<?php echo base_url('InvoiceController') ?>" method="post"
                            enctype="multipart/form-data">
                            <?php
                        $success = $this->session->userdata('success');
                        if($success!=""){?>
                            <div class="alert alert-success"><?php echo $success ?></div>
                            <?php } ?>
                            <div class="row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="">Select Logo</label>
                                    <input type="file" name="images" id="images" class="form-control">
                                    <!-- <input type="text" class="form-control" name="note" placeholder="Note" required> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword4">Company Name</label>
                                    <input type="text" class="form-control" name="compaName" placeholder="Company Name."
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword4">Invoice No.</label>
                                    <input type="text" class="form-control" name="invNo" placeholder="Invoice No."
                                        required>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="exampleInputPassword4">Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword4">Currency</label>
                                    <input type="text" class="form-control" name="currency" placeholder="Currency"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Customer Name</label>
                                    <input type="text" id='cusName' name='cusName' class='form-control'
                                        placeholder="Customer Name">
                                </div>
                                
                            </div>
                            <!-- <div class="row d-flex">
                                
                                
                                </div>
                                 -->
                                <div class="row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="">Product</label>
                                    <input type="text" id='product' name='product' class='form-control'
                                        placeholder="Product">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Price" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">quntity</label>
                                    <input type="text" class="form-control" name="qty" placeholder="00" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Tax</label>
                                    <input type="text" class="form-control" name="tax" placeholder="Tax" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Note</label>
                                    <input type="text" class="form-control" name="note" placeholder="Note" required>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-sm  btn-primary mt-2">Submit</button>
                            <button class="btn btn-sm btn-primary mt-2"><a
                                    href="<?php echo base_url('dashboard') ?>"></a>Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Bulk Invoice</h4>
                        <form class="forms-sample" action="<?php echo base_url('InvoiceController/excelimport') ?>"
                            method="post" enctype="multipart/form-data">
                            <?php
                        $success1 = $this->session->userdata('success1');
                        if($success1!=""){?>
                            <div class="alert alert-success"><?php echo $success1 ?></div>
                            <?php } ?>
                            <?php
                        $success1 = $this->session->userdata('error1');
                        if($error1!=""){?>
                            <div class="alert alert-success"><?php echo $error1 ?></div>
                            <?php } ?>

                            <div class="row d-flex">
                                <div class="form-group col-md-12 ">
                                    <a href="<?php echo base_url('')?>assets/file_format/invoce.xlsx" id="btnExport"
                                        class="btn btn-primary">Download Sample file</a>
                                    <!-- <button class="btn btn-primary" id="btnExport" onClick="fnExcelReport()">Download Sample file</button> -->
                                    <input type="file" id="portid" class="form-control mt-4" name="uploadFile"
                                        placeholder="smtp Port" required>
                                </div>
                                <table id="theTable" class="table table-bordered" style="display:none;">
                                    <thead>
                                        <tr class="header">
                                            <th>Smtp Host</th>
                                            <th>Smtp Port</th>
                                            <th>Emailid</th>
                                            <th>Password</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <button type="submit" name="submit1" id="sbt"
                                class="btn btn-primary mt-2 btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title">Bulk Invoice Records<button onclick='return deleteFunc(000)'
                                style='float:right;' class='btn btn-sm btn-primary'>All Delete <i class="fa fa-trash"
                                    aria-hidden="true"></i></button></h4>
                        <div style='height:300px; overflow-y: auto;' class='mt-4'>
                            <table class='table border  datatable'>
                                <thead class='thead-light' style='position: sticky; top:0;'>
                                    <tr>
                                        <th>S.No</h>
                                        <th>Invoice No</th>
                                        <th>Date</th>
                                        <th>Currency</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Logo</th>
                                        <th>tax</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                if(!empty($invoice)){

                                    foreach($invoice as $key => $value){
                                        $newDate = date("d-m-Y", strtotime($value->date));
                                        ?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value->invoiceno ?></td>
                                        <td><?php echo $newDate ?></td>
                                        <td><?php echo $value->currency ?></td>
                                        <td><?php echo $value->product ?></td>
                                        <td><?php echo $value->price ?></td>
                                        <td><img style='height:100px;width:100px;' src="<?php echo base_url('assets/invoice/'.$value->logo) ?>" alt="" srcset=""> </td>
                                        <td><?php echo $value->tax ?></td>
                                        <td><?php echo $value->note ?></td>
                                        <td><button class='btn btn-sm' onclick='return deleteFunc(<?php echo $value->id ?>)'><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                    </tr>
                                    <?php
                                }
                               }else{
                                ?>
                                    <tr>
                                        <td>No SMTP Avalable</td>
                                    </tr>
                                    <?php
                            }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function deleteFunc(id) {
        // alert("function call done "+id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    url: "<?php echo base_url()?>/InvoiceController/delete",
                    data: {
                        id: id
                    },
                }).done(function(res) {
                    var msg = "";
                    if (id == 000) {
                        var msg = 'all';
                    }
                    Swal.fire(
                        'Deleted!',
                        'Your ' + msg + ' smtp has been deleted.',
                        'success'
                    )
                    location.reload();
                })

            }
        })

        // return false;

    }

    function fnExcelReport() {
        $("#btnExport").hide();
        $("#sbt").show();
        $("#portid").show();
        var table = document.getElementById('theTable'); // id of table
        var tableHTML = table.outerHTML;
        var fileName = 'download.xls';

        var msie = window.navigator.userAgent.indexOf("MSIE ");

        // If Internet Explorer
        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            dummyFrame.document.open('txt/html', 'replace');
            dummyFrame.document.write(tableHTML);
            dummyFrame.document.close();
            dummyFrame.focus();
            return dummyFrame.document.execCommand('SaveAs', true, fileName);
        }
        //other browsers
        else {
            var a = document.createElement('a');
            tableHTML = tableHTML.replace(/  /g, '').replace(/ /g, '%20'); // replaces spaces
            a.href = 'data:application/vnd.ms-excel,' + tableHTML;
            a.setAttribute('download', fileName);
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    }
    </script>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php 
         $this->load->view('includes/footer');
         ?>