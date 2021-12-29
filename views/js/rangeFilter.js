$(document).ready(function(){  
      $('#rangePrice').change(function(){  
           var price = $(this).val();  
           $("#price_range").text("Product under Price Rs." + price);  
           $.ajax({  
                url:"a.php",  
                method:"POST",  
                data:{price:price},  
                success:function(data){  
                     $("#a").fadeIn(500).html(data);  
                }  
           });  
      });  
 });  