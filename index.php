<?php
include_once './backend/koneksi.php';
include_once './backend/Fungsi.php';

$naive = new Fungsi($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naive Bayes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        a {
            color: white !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light navbar-haze kontem" style="background-color: #2B244D;">
        <a class="navbar-brand" href="#">
            <b>Haze</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <!-- Akhir Navbar -->

    <div class="container">
        <!-- Dataset Cuaca -->
        <div class="card">
            <div class="card-header">
                Dataset Prediksi Cuaca
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Temperatur (°C)</th>
                            <th>Kelembapan (%)</th>
                            <th>Kecepatan Angin (km/h)</th>
                            <th>Prediksi Cuaca</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once './backend/tampilData.php'; 
                    $no = 1;
                    while($a = mysqli_fetch_object($exe)){
                    ?>
                        <tr>
                            <td> <?php echo $no ?> </td>
                            <td> <?php echo $a->temperatur ?> </td>
                            <td> <?php echo $a->kelembapan ?> </td>
                            <td> <?php echo $a->kecepatan_angin ?> </td>
                            <td> <?php echo $a->prediksi_cuaca ?> </td>
                        </tr>
                        <?php
                    $no++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Dataset Cuaca -->

        <!-- Mean dan Standard Deviasi Temperatur -->
        <br>
        <div class="card">
            <div class="card-header">
                Mean dan Standard Deviasi <b>Temperatur</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Mean</th>
                            <th>Standard Deviasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo round($naive->mean("temperatur", "Hujan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("temperatur", "Hujan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo round($naive->mean("temperatur", "Berawan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("temperatur", "Berawan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo round($naive->mean("temperatur", "Cerah"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("temperatur", "Cerah"),4);?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Mean dan Standard Deviasi Temperatur -->

        <!-- Mean dan Standard Deviasi Kelembapan -->
        <br>
        <div class="card">
            <div class="card-header">
                Mean dan Standard Deviasi <b>Kelembapan</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Mean</th>
                            <th>Standard Deviasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo round($naive->mean("kelembapan", "Hujan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kelembapan", "Hujan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo round($naive->mean("kelembapan", "Berawan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kelembapan", "Berawan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo round($naive->mean("kelembapan", "Cerah"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kelembapan", "Cerah"),4);?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Mean dan Standard Deviasi Kelembapan -->

        <!-- Mean dan Standard Deviasi Kecepatan Angin -->
        <br>
        <div class="card">
            <div class="card-header">
                Mean dan Standard Deviasi <b>Kecepatan Angin</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Mean</th>
                            <th>Standard Deviasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo round($naive->mean("kecepatan_angin", "Hujan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kecepatan_angin", "Hujan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo round($naive->mean("kecepatan_angin", "Berawan"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kecepatan_angin", "Berawan"),4);?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo round($naive->mean("kecepatan_angin", "Cerah"),4) ?> </td>
                            <td> <?php echo round($naive->standarDeviasi("kecepatan_angin", "Cerah"),4);?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Mean dan Standard Deviasi Kecepatan Angin -->

        <!-- Probabilitas setiap kelas -->
        <br>
        <div class="card">
            <div class="card-header">
                Probabilitas Setiap <b>Kelas</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Probabilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo round($naive->Probabilitas("Hujan"),4); ?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo round($naive->Probabilitas("Berawan"),4); ?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo round($naive->Probabilitas("Cerah"),4); ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Probabilitas setiap kelas -->

        <!-- Densitas Gaus -->
        <br>
        <div class="card">
            <div class="card-header">
                Hasil Perhitungan <b>Densitas Gaus</b>
            </div>
            <div class="card-body">
                    
                <!-- Data kategori Temperatur -->
                <b>Data Kategori Temperatur</b>
                <table>
                    <tbody>
                        <tr>
                            <td> (Status = Hujan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("temperatur", "Hujan", 31); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Berawan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("temperatur", "Berawan", 31); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Cerah) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("temperatur", "Cerah", 31); ?> </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Akhir Data kategori Temperatur -->
                <br>
                <!-- Data kategori Kelembapan -->
                <b>Data Kategori Kelembapan</b>
                <table>
                    <tbody>
                        <tr>
                            <td> (Status = Hujan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kelembapan", "Hujan", 64); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Berawan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kelembapan", "Berawan", 64); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Cerah) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kelembapan", "Cerah", 64); ?> </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Akhir Data kategori Kelembapan -->
                <br>
                <!-- Data kategori Kecepatan Angin -->           
                <b>Data Kategori Kecepatan Angin</b>     
                <table>
                    <tbody>
                        <tr>
                            <td> (Status = Hujan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kecepatan_angin", "Hujan", 7); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Berawan) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kecepatan_angin", "Berawan", 7); ?> </td>
                        </tr>
                        <tr>
                            <td> (Status = Cerah) </td>
                            <td> &emsp;=&emsp; </td>
                            <td nowrap> <?php echo $naive->densitasGauss("kecepatan_angin", "Cerah", 7); ?> </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Akhir Data kategori Kecepatan Angin -->
            </div>
        </div>
        <!-- Akhir Densitas Gaus -->

        <!-- Likelihood setiap kelas -->
        <br>
        <div class="card">
            <div class="card-header">
                Likelihood Setiap <b>Kelas</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Likelihood</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Hujan", 31, 64, 7); ?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Berawan", 31, 64, 7); ?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Cerah", 31, 64, 7); ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Likelihood setiap kelas -->

        <!-- Normalisasi setiap kelas -->
        <br>
        <div class="card">
            <div class="card-header">
                Likelihood Setiap <b>Kelas</b>
            </div>
            <div class="card-body">
                <?php
                $hujan = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Hujan", 31, 64, 7);
                $berawan = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Berawan", 31, 64, 7);
                $cerah = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Cerah", 31, 64, 7);
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cuaca</th>
                            <th>Normalisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hujan</td>
                            <td> <?php echo $naive->normalisasi($hujan, $berawan, $cerah, "Hujan") ."%"; ?> </td>
                        </tr>
                        <tr>
                            <td>Berawan</td>
                            <td> <?php echo $naive->normalisasi($hujan, $berawan, $cerah, "Berawan") ."%" ; ?> </td>
                        </tr>
                        <tr>
                            <td>Cerah</td>
                            <td> <?php echo $naive->normalisasi($hujan, $berawan, $cerah, "Cerah") ."%"; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Normalisasi setiap kelas -->

        <!-- Hasil Perhitungan Naive Bayes -->
        <br>
        <div class="card">
            <div class="card-header">
                Hasil Perhitungan  <b>Naive Bayes</b>
            </div>
            <div class="card-body">
                <?php
                $hujan = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Hujan", 31, 64, 7);
                $berawan = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Berawan", 31, 64, 7);
                $cerah = $naive->likelihood("temperatur", "kelembapan", "kecepatan_angin", "Cerah", 31, 64, 7);

                $normal_hujan = $naive->normalisasi($hujan, $berawan, $cerah, "Hujan");
                $normal_berawan = $naive->normalisasi($hujan, $berawan, $cerah, "Berawan");
                $normal_cerah = $naive->normalisasi($hujan, $berawan, $cerah, "Cerah");

                echo "Hasil prediksi cuaca : <b>".$naive->hasil($normal_hujan, $normal_berawan, $normal_cerah)."</b>";
                ?>
            </div>
        </div>
        <!-- Akhir Hasil Perhitungan Naive Bayes -->
    </div>
    <br>
</body>
</html>