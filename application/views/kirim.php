<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Kirim Pesan</h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pesan</label>
                            <textarea id="pesan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tulis pesan di sini">
                                </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File gambar (jika pakai gambar)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input onchange="getKeteranganFile()" id="fileGambar" type="file" class="custom-file-input" id="exampleInputFile">
                                    <label id="keteranganUpload" class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button id="btnSemua" onclick="kirimSemua()" class="btn btn-success"><i class='fa fa-paper-plane' aria-hidden='true'></i> Kirim Semua</button>
                        <button onclick="tulisNomor()" class="btn btn-primary">Test kirim ke 1 nomor</button>
                    </div>

                </div>
                <!-- /.card -->

                <!-- general form elements -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- Form Element sizes -->
                <div class="card card-success">
                    <div class="card-header">
                        <h2 class="card-title">Daftar Kontak <button  class="btn btn-primary">Tambah Kontak</button>
</h2>  
                    </div>
                    <div class="card">
                        <div class="card-header">


                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nomor Whatsapp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($daftarKontak['data'] as $kontak) {
                                        echo "<tr><td>" . $kontak['Id'] . "</td><td>" . $kontak['Nama'] . "</td><td>" . $kontak['Nomor'] . "</td></tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<script>
    function tulisNomor() {
        let person = prompt("Tulis nomor WA tujuan", "62");

        if (person != null) {
            $.ajax({
                type: "POST",
                cache: false,
                url: '<?php echo base_url(); ?>/api/kirim',
                dataType: 'json',
                data: {
                    NomorWa: person,
                    Pesan: $('textarea#pesan').val()
                },
                success: function(output) {
                    // $("#buttonSubmit").html(" Login ");

                    console.log(output)

                    console.log(output)
                    if (output.sukses == true)
                        location.reload();
                    else if (output.sukses == false)
                        $("#buttonSubmit").html(" Login ");


                }

            })

        }
    }
</script>

<script>
    function kirimSemua() {
        $("#btnSemua").html(" <i class='fa fa-refresh fa-spin'></i> Sedang Proses Upload ");

        const fileupload = $('#fileGambar').prop('files')[0];
        console.log(fileupload)
        var form_data = new FormData();
        form_data.append('file', fileupload);
        form_data.append('Pesan', $('textarea#pesan').val());

        $.ajax({


            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            url: '<?php echo base_url(); ?>/api/kirimsemua',
            dataType: 'json',
            data: form_data,
            success: function(output) {
                $("#btnSemua").html(" <i class='fa fa-paper-plane' aria-hidden='true'></i> Kirim Semua ");

            }

        })
    }
</script>
<script>
    function getKeteranganFile(varr) {
        const fileupload = $('#fileGambar').prop('files')[0];

        console.log(fileupload)
        $("#keteranganUpload").html(fileupload.name + ', ' + fileupload.size + ' bytes' + ', ' + fileupload.type)
    }
</script>