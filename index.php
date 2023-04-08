<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="admin/images/logo_sekolah.png"/>
    <title>Data Komputer</title>
    <style>
    </style>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="background-color:#DEF5E5">
    <div class="logo mt-3">
        <center>
            <img width="6%" src="admin/template/images/logo_sekolah.png" alt="">
            <h5 class="mt-2">BUKU PENGGUNAAN KOMPUTER <br> LAB RPL <br> TAHUN 2022 / 2023</h5>
        </center>
    </div>  
    <div class="container-fluid border rounded" style="width:80%;background-color: #9ED5C5;">
        <div class="col p-3">
            <div class="header">
                <h5>
                    <center>
                        PETUNJUK PENGGUNAAN <br> LAB KOMPUTER 
                    </center>
                </h5> 
            </div>
            <div class="boxForm text-left mt-4">
                <div class="isi">
                    <h5>
                        1. Dilarang memindahkan alat, mouse, keyboard, tanpa seijin guru<br>
                    </h5>
                    <h5>
                        2. Pasang Mouse / keyboard dengan benar, jika tidak pas jangan dipaksa karena akan merusak Pin mouse / keyboard <br>
                    </h5>
                    <h5>
                        3. Mouse / keyboard tidak aktif belum tentu karena mouse atau keyboardnya <br>
                    </h5>
                    <h5>
                        4. Komputer hang belum tentu karena mouse / keyboard <br>
                    </h5>
                    <h5>
                        5. Komputer <b>LEMOT</b> karena diantaranya banyak diinstal game/tool yang tidak perlu <br>
                    </h5>
                    <h5>
                        6. Ruang komputer bukan tempat sampah, buang sampah di tempatnya, <b>JAGA KEBERSIHAN</b> <br>
                    </h5>
                    <h5>
                        7. Sebelum keluar Lab / ganti pelajaran, dan setiap akan memasuki atau akan duduk di Lab, bersihkan dulu area tempat duduk anda dari sampah ( kertas , bekas aqua , plastik makanan , dll)
                    </h5>
                </div>
            </div>
            <div class="button mt-5">
                <center>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Input Data</button>
                </center>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="protambahinput.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="col-form-label">Hari</label>
                            <select name="hari" id="" class="form-control form-select">
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Tanggal</label>
                            <input type="date" name="tgl" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Jam Ke-</label>
                            <input type="text" name="jam" placeholder="contoh : 4 - 5" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Nama Siswa</label>
                            <input type="text" name="nm" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kelas</label>
                            <select name="kelas" id="" class="form-control form-select">
                                <option>XII RPL</option>
                                <option>XI RPL</option>
                                <option>X PPLG</option>
                                <option>XII BPD</option>
                                <option>XI BDP</option>
                                <option>X PM</option>
                                <option>XII AKL</option>
                                <option>XI AKL</option>
                                <option>X AKL</option>
                                <option>XII OTKP</option>
                                <option>XI OTKP</option>
                                <option>X MPLB</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">LAB</label>
                            <select name="lab" id="" class="form-select">
                                <option>LAB RPL 1</option>
                                <option>LAB RPL 2</option>
                                <option>LAB BAHASA</option>
                                <option>LAB OTKP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Nomor Komputer</label>
                            <select name="nmr" id="" class="form-control form-select">
                                <option>1</option>dadadasd
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kondisi Komputer</label>
                            <select name="kondisi" id="" class="form-select">
                                <option>Baik</option>
                                <option>Cukup Baik</option>
                                <option>Tidak Baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Keterangan</label>
                            <textarea name="ket" id="" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
<!-- SCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>