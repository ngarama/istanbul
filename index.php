<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jonah Ngarama - Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Admin</a> <span class="text-aqua" id="cat">Home</span>
          <a class="navbar-brand" id="show_"  onclick="togglediv('.perc')"><span class="glyphicon glyphicon-adjust"></span> Toggle %</a>
        </div>
        
      </div>
    </nav>
    
    <section id="full_body">
    <div id="processing">Loading...</div>
    <ul class="nav nav-tabs">
            <li>
                 <h3>Sales </h3>
            </li>
            <li id="filter_">
                 <select class="form-control input-sm" id="filter_graph" onchange="filtergraph();">
                 <option value="1">Today</option>
                 <option value="2">Yesterday</option>
                 <option SELECTED value="3">Weekly</option>
                 <option value="4">Last 30 Days</option>
                 <option value="5">Last Month</option>
                 <option value="6">Last Quarter</option>
                 <option value="7">Last Year</option>
                 <option value="8">Date Range</option>
                 </select>
            </li>
    </ul>
<ul class="nav nav-tabs" id="date_filt">
  <li> <input type="date" id="starting" class="form-control" /> </li>
  <li> <input type="date" id="ending" class="form-control"  /> </li>
  <li> <button onclick="custom();" class="btn btn-primary btn-sm inp">Go</button> </li>
</ul>
  <div id="data_box">Loading...</div>
  <?php
  
 // include_once('jresources/weekly.php');
  ?>
           
  <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
  <script src="scripts/main.js" type="text/javascript"></script>
    <script>
            $('document').ready(function()
               {
               loaddashboard('weekly.php','#data_box');
               $('#sales_table').DataTable();
               }
            );
            
            
</script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
</body>
</html>