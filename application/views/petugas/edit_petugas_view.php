<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i>  Edit Petugas</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Perbarui data petugas</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <?php
                            $announce = $this->session->flashdata('announce');
                            if(!empty($announce)){
                                if($announce == 'Berhasil menyimpan data'){
                                    echo '
                                        <div class="alert alert-success">
                                        '.$announce.'
                                        </div>
                                    ';
                                }else{
                                    echo '
                                        <div class="alert alert-danger">
                                        '.$announce.'
                                        </div>
                                    ';
                                }
                            }
                        ?>
                            <form method="post" action="<?php echo base_url() ?>petugas/submits" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <input type="hidden" name="ids" value="<?php echo $detail->ID_ADMIN ?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="fullname" class="form-control col-md-7 col-xs-12" value="<?php echo $detail->FULLNAME ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="tmp_lahir" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="tgl_lahir" id="single_cal1" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin</label><br>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="radio"  name="jenis_kelamin" value="Laki-Laki">Laki-Laki &emsp;
                                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Role
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php $role = $detail->ROLE ?>
                                        <select class="form-control" name="role">
                                            <option <?php if($role=='admin'){echo 'selected="selected"';} ?> value="admin">Petugas</option>
                                            <option <?php if($role=='superadmin'){echo 'selected="selected"';} ?> value="superadmin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" class="form-control col-md-7 col-xs-12" value="<?php echo $detail->USERNAME ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button class="btn btn-link" type="button" onclick="hea()">Change Password</button>
                                        <script type="text/javascript">
                                            function hea() {
                                                $('#pw').css('display','block'); 
                                            }
                                        </script>
                                    </div>
                                </div>

                                <div id="pw" style="display: none">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="password" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Confirm Password
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="cpassword" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Motto</label>
                                    <textarea id="deskripsi" name="deskripsi"></textarea><br>
                                    <script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
                                    <script >CKEDITOR.replace('deskripsi');</script>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Data sudah benar</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="checkbox" name="setuju" value="setuju" required="">
                                    </div>
                                </div>

                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?php echo base_url() ?>petugas">Kembali</a>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
