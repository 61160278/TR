<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Report Person</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
      <style>
      body {
            font-family: 'Sarabun', sans-serif;
      }
      </style>
</head>

<body>
      <div class="container">
            <h2 align="center">Report Training Record</h2>
            <table class="table table-striped">
                  <tr>
                        <th>No.</th>
                        <th>Course Code</th>
                        <th>Training Name</th>
                        <th>Training Description
                        </th>
                        <th>Start-Date</th>
                        <th>End-Date</th>
                        <th>Trainer</th>
                        <th>Certificate</th>
                  </tr>
                  <tr>
                        <td>1.</td>
                        <td>IN-00001</td>
                        <td>General Safety</td>
                        <td>General Safety</td>
                        <td>02/02/2021</td>
                        <td>02/02/2021</td>
                        <td>Mr.Kenji
                              Striker</td>
                        <td>O</td>
                  </tr>
                  <tr>
                        <td>2.</td>
                        <td>IN-0021</td>
                        <td>Microsoft</td>
                        <td>Microsoft</td>
                        <td>04/01/2021</td>
                        <td>06/01/2021</td>
                        <td>Mr.Mono Rorer</td>
                        <td>O</td>
                  </tr>
            </table>
            <p align="right">ผู้รับผิดชอบงาน : <i>Jirayu Jaravichit</i></p>
            <?php
//     $html=ob_get_contents();
//     $mpdf->WriteHTML($html);
//     $mpdf->Output("MyReport.pdf");
//     ob_end_flush();
?>
            <a href="MyReport.pdf" class="btn btn-primary">Dowload PDF</a>
      </div>
</body>