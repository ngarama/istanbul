<div style="overflow-y: hidden; overflow-x: auto;">

<table id="sales_table" class="table-striped" style="width:100%">
<thead>
            <tr>
               
                <th>Day/Brand</th>
                <th>Mon</th>
                
               
                
                
            </tr>
        </thead>
        <tbody>
           <tr>
                <td>Brand A</td>
                <td>10 <span class="label label-default perc">9%</span></td>
               
               
                
                
            </tr>
             <tr>
                <td>Brand B</td>
                <td>20 <span class="label label-default perc">15%</span></td>
                
                
                
                
            </tr>
             <tr>
                <td>Brand C</td>
                <td>30 <span class="label label-default perc">25%</span></td>
              
                
                
                
            </tr>
            <tr>
                <td>Brand D</td>
                <td>20 <span class="label label-default perc">15%</span></td>
               
              
                
                
            </tr>
            <tr>
                <td>Brand E</td>
               <td>10 <span class="label label-default perc">10%</span></td>
               
                
                
            </tr>
            <tr>
                <td>Brand F</td>
                <td>30 <span class="label label-default perc">19%</span></td>
               
                
                
                
            </tr>
            <tr>
                <td>Brand G</td>
                <td>10 <span class="label label-default perc">1%</span></td>
               
              
                
            </tr>
            <tr>
                <td>Brand H</td>
                <td>20 <span class="label label-default perc">18%</span></td>
               
              
                
                
            </tr>
            <tr>
                <td>Brand I</td>
                <td>20 <span class="label label-default perc">15%</span></td>
               
               
                
                
            </tr>
             <tr>
                <td>Brand J</td>
                <td>10 <span class="label label-default perc">8%</span></td>
                
               
                
                
            </tr>
            
       </tbody>
       <tfoot>
       <tr>
               
                <th>Total</th>
                <th>200</th>
                
                
                
            </tr>
       </tfoot>
</table>


</div>
<div class="reports">
    <h3>Reports</h3>

    
 <!---              Graphs  ----------->
 
 <!--    Sales Graph -->
        
 
 
 
 
    
<!---              End of graph  ----------->    
<hr />
<div class="row">
            <div class="col-xs-8">
          <div class="box box-info">
                <div class="box-header"> <strong>Brand Share</strong> </div>
                     
                      <div class="box-body chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <canvas id="pieChart" height="180"></canvas>
                      </div><!-- /.chart-responsive -->
          </div>  </div> 
          <div class="col-xs-4">
          <table>
<tr><td><span style="background:#f56954 ;">&emsp;</span></td><td>Brand A</td></tr>
<tr><td><span style="background:#00a65a ;">&emsp;</span></td><td>Brand B</td></tr>
<tr><td><span style="background:#f39c12 ;">&emsp;</span></td><td>Brand C</td></tr>
<tr><td><span style="background:#00c0ef ;">&emsp;</span></td><td>Brand D</td></tr>
<tr><td><span style="background:#3c8dbc ;">&emsp;</span></td><td>Brand E</td></tr>
<tr><td><span style="background:#d2d6de ;">&emsp;</span></td><td>Brand F</td></tr>
<tr><td><span style="background:#40807F;">&emsp;</span></td><td>Brand G</td></tr>
<tr><td><span style="background:#FF8080 ;">&emsp;</span></td><td>Brand H</td></tr>
<tr><td><span style="background:#0016FF ;">&emsp;</span></td><td>Brand I</td></tr>
<tr><td><span style="background:#00FF3C ;">&emsp;</span></td><td>Brand J</td></tr>
</table>
          </div>
    </div>
    
      
<hr />

</div>

<script>


  $(function () {
   $('#sales_table').DataTable();
  
  
  
  
//-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: 10,
      color: "#f56954",
      highlight: "#f56954",
      label: "Brand A"
    },
    {
      value: 20,
      color: "#00a65a",
      highlight: "#00a65a",
      label: "Brand B"
    },
    {
      value: 30,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "Brand C"
    },
    {
      value: 20,
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Brand D"
    },
    {
      value: 10,
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Brand E"
    },
    {
      value: 30,
      color: "#d2d6de",
      highlight: "#d2d6de",
      label: "Brand F"
    },
     {
      value: 10,
      color: "#40807F",
      highlight: "#40807F",
      label: "Brand G"
    },
    {
      value: 20,
      color: "#FF8080",
      highlight: "#FF8080",
      label: "Brand H"
    },
    {
      value: 20,
      color: "#0016FF",
      highlight: "#0016FF",
      label: "Brand I"
    },
    {
      value: 10,
      color: "#00FF3C",
      highlight: "#00FF3C",
      label: "Brand J"
    }
    
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 10,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> <%=label%> Sales"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.  
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------

}); 

          
    </script>

