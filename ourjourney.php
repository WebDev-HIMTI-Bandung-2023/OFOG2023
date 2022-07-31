<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ourjourney.css">
    <title>Document</title>
	<?php include('function/connection.php'); ?>
</head>

<body>
    <div class="OURJOURNEY">
        <div class="title-white">
            <span>OUR JOURNEY</span>
        </div>
        <div id="journeylist-container">
            <div id="journeylist-content">
                <?php 
				$result = mysqli_query($koneksi, "select * from journeys");
				while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="event">
                        <?php
                        if ($row["img"] != NULL) :
                            echo '<img id="journeylist-img" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '"/>';
                            echo '<div id="data-year-img"' . base64_encode($row['year']);
                        endif
                        ?>
                        <div id="data-year">
                            <?php echo ($row["year"]) ?>
                        </div>
                        <div id="journey1-modal">
                            <?php echo ($row["journey"]) ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                View all journey
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div id="journeylist-modal">
                                <?php $result2 = mysqli_query($conn, "select * from journeys"); ?>
                                <?php while ($row2 = mysqli_fetch_assoc($result2)) : ?>
                                    <div class="event">
                                        <?php
                                        if ($row2["img"] != NULL) :
                                            echo '<img  id="journeylist-img" src="data:image/jpeg;base64,' . base64_encode($row2['img']) . '"/>';
                                            echo '<div id="data-year-img"' . base64_encode($row2['year']);
                                        endif
                                        ?>
                                        <div id="data-year">
                                            <?php echo ($row2["year"]) ?>
                                        </div>
                                        <div id="journey1-modal">
                                            <?php echo ($row2["journey"]) ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>