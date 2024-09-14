<?php
include("../koneksi.php");
include("../header.php");
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Layanan Internet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(128, 128, 128, 0.5); /* Latar belakang abu-abu transparan */
        }
        h2, h3 {
            color: #004080;
        }
        .checkbox-container {
            margin-left: 20px;
        }
        .question {
            margin-bottom: 20px;
        }
        .container {
            background-color: rgba(250, 250, 250, 0.8); /* Latar belakang putih dengan sedikit transparansi */
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            width: 80%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk memperjelas tampilan */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>LAYANAN CCTV</h2><br>

        <form action="" method="POST">

            <!-- Table 1 -->
            <div class="form-group">
                <label for="expectation1">29.CCTV dapat diakses kapanpun</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>1 STS</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7 SSS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HARAPAN</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="expectation1" value="<?= $i ?>" <?= isset($expectation1) && $expectation1 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                            <tr>
                                <td>FAKTA</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="reality1" value="<?= $i ?>" <?= isset($reality1) && $reality1 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 2 -->
            <div class="form-group">
                <label for="expectation2">30.Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>1 STS</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7 SSS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HARAPAN</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="expectation2" value="<?= $i ?>" <?= isset($expectation2) && $expectation2 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                            <tr>
                                <td>FAKTA</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="reality2" value="<?= $i ?>" <?= isset($reality2) && $reality2 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 3 -->
            <div class="form-group">
                <label for="expectation3">31.CCTV tersedia selama 24 Jam</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>1 STS</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7 SSS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HARAPAN</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="expectation3" value="<?= $i ?>" <?= isset($expectation3) && $expectation3 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                            <tr>
                                <td>FAKTA</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="reality3" value="<?= $i ?>" <?= isset($reality3) && $reality3 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 4 -->
            <div class="form-group">
                <label for="expectation4">32.Preventive Maintenance diinformasikan sebelum pelaksanaan kegiatan</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>1 STS</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7 SSS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HARAPAN</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="expectation4" value="<?= $i ?>" <?= isset($expectation4) && $expectation4 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                            <tr>
                                <td>FAKTA</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="reality4" value="<?= $i ?>" <?= isset($reality4) && $reality4 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 5 -->
            <div class="form-group">
                <label for="expectation5">33.CCTV sudah mengcover / mencakup area yang dibutuhkan</label>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>1 STS</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7 SSS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HARAPAN</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="expectation5" value="<?= $i ?>" <?= isset($expectation5) && $expectation5 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                            <tr>
                                <td>FAKTA</td>
                                <?php for ($i = 1; $i <= 7; $i++) : ?>
                                    <td>
                                        <input type="radio" name="reality5" value="<?= $i ?>" <?= isset($reality5) && $reality5 == $i ? 'checked' : '' ?>>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Validation Error Messages -->
            <?php if (isset($errors['expectation1'])) : ?>
                <div class="text-danger"><?= $errors['expectation1'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['reality1'])) : ?>
                <div class="text-danger"><?= $errors['reality1'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['expectation2'])) : ?>
                <div class="text-danger"><?= $errors['expectation2'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['reality2'])) : ?>
                <div class="text-danger"><?= $errors['reality2'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['expectation3'])) : ?>
                <div class="text-danger"><?= $errors['expectation3'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['reality3'])) : ?>
                <div class="text-danger"><?= $errors['reality3'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['expectation4'])) : ?>
                <div class="text-danger"><?= $errors['expectation4'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['reality4'])) : ?>
                <div class="text-danger"><?= $errors['reality4'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['expectation5'])) : ?>
                <div class="text-danger"><?= $errors['expectation5'] ?></div>
            <?php endif; ?>

            <?php if (isset($errors['reality5'])) : ?>
                <div class="text-danger"><?= $errors['reality5'] ?></div>
            <?php endif; ?>

            <a class="btn btn-primary" href="../layanan_solusi_bisnis/bisnis.php" role="button">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
