


function loaddashboard(url,target)
    {
    var params = "";
    loadpage('jresources/'+url,target,params)
    }


function loadpage(resource,targetdiv,params)
    {
      fields=params;
 $.ajax({
  method:'GET',
  url:resource,
  data:fields,
  beforeSend:function()
       {
     $('#processing').show();
       },
  
  complete:function ()
       {
      $('#processing').hide();
       },
  success: function(feedback)
       {
     $('#processing').hide();
     $(targetdiv).html(feedback);   

        }
       
    });  
    }
    
function filtergraph()
   {
    $('#date_filt').css('display','none');
    var val = $('#filter_graph').val();
    if(val == '1') ////today
       {
        $('#cat').html('Sales Today');
        loaddashboard('today.php','#data_box');
        $('#sales_table').DataTable();
        
       }
    else if(val == '2') ///Yesterday
       {
         $('#cat').html('Sales Yesterday');
          loaddashboard('yesterday.php','#data_box');
        $('#sales_table').DataTable();
       }
    else if(val == '3') ///Weekly
       {
         $('#cat').html('Sales This Week');
         loaddashboard('weekly.php','#data_box');
        $('#sales_table').DataTable();
       }
    else if(val == '4') ///Last 30 Days
       {
         $('#cat').html('Sales Last 30 Days');
           loaddashboard('last_30.php','#data_box');
        $('#sales_table').DataTable();
       }
     else if(val == '5') ///Last Month
       {
         $('#cat').html('Sales Last Month');
          loaddashboard('last_30.php','#data_box');
        $('#sales_table').DataTable();
       }
      else if(val == '6') ///Last Quater
       {
         $('#cat').html('Sales Last Quater');
          loaddashboard('last_q.php','#data_box');
        $('#sales_table').DataTable();
       }
      else if(val == '7') ///Last Quater
       {
         $('#cat').html('Sales Last Year');
            loaddashboard('last_y.php','#data_box');
        $('#sales_table').DataTable();
       }
      else if(val == '8') ///Date Range
       {
         $('#cat').html('Select Date Range');
         $('#data_box').html('<br/><br/><br/><h4 class="text-warning"><strong>Select Date Range from above and hit go</strong></h4>');
        $('#sales_table').DataTable();
         $('#date_filt').fadeIn('fast');
       }
    
   }    
    
 function custom()
   {
    var starting = $('#starting').val();
    var ending = $('#ending').val();
    
   if(starting.length > 3 && ending.length > 3)
       {
         $('#cat').html('Sales Last Month');
          loaddashboard('last_30.php','#data_box');
        $('#sales_table').DataTable();
        
       }
   else
       {
        $('#data_box').html('<br/><br/><br/><h5 class="text-danger"><strong>Please select date range</strong></h5>');
       }
    
   }   
   
function togglediv(ele)
   {
    $(ele).toggle();
   }
    
    
    
    