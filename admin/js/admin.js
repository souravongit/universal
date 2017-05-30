			<!--Add Product-->
/*$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
        
  $("#add_product").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var product_name = $("input#product_name").val();
		if (product_name == "") {
      $("label#product_name_error").show();
      $("input#product_name").focus();
      return false;
    }    
	   
		var product_price = $("input#product_price").val();
		if (product_price == "") {
      $("label#product_price_error").show();
      $("input#product_price").focus();
      return false;
    }
		
	var product_image = $("input#product_image").val();
		if (product_image == "") {
      $("label#product_image_error").show();
      $("input#product_image").focus();
      return false;
    }
		var product_details = $("input#product_details").val();
		if (product_details == "") {
      $("label#product_details_error").show();
      $("input#product_details").focus();
      return false;
    }
	  var product_pic = $("input#product_pic").val();
		if (product_pic == "") {
      $("label#product_pic_error").show();
      $("input#product_pic").focus();
      return false;
    }
		var dataString = 'product_name=' + product_name + '&product_price=' + product_price + '&product_image=' + product_image +'&product_details=' + product_details + '&product_pic=' + product_pic + '&action=addproduct';
		
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   $('#product_name').val('');
				   $('#product_price').val('');
				   $('#product_image').val('');
				   $('#product_details').val('');
				   $("label#product_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#product_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});        
     */
      
			<!--Update product-->
			
/*$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
        
  $("#update_product").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var product_name = $("input#product_name").val();
		if (product_name == "") {
      $("label#product_name_error").show();
      $("input#product_name").focus();
      return false;
    }
		var product_price = $("input#product_price").val();
		if (product_price == "") {
      $("label#product_price_error").show();
      $("input#product_price").focus();
      return false;
    }
			var product_image = $("input#product_image").val();
		if (product_image == "") {
      $("label#product_image_error").show();
      $("input#product_image").focus();
      return false;
    }
		var product_details = $("input#product_details").val();
		if (product_details == "") {
      $("label#product_details_error").show();
      $("input#product_details").focus();
      return false;
    }
	var photo_id = $("input#photo_id").val();
		
		var dataString = 'product_name=' + product_name + '&product_price=' + product_price + '&product_image=' + product_image +'&product_details=' + product_details + '&product_id='+ product_id + '&action=updateproduct';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				  
				   
				  $("label#product_added").show();
				  
				  
			  }
			  else if(data=="2")
			  {
				  $("label#product_name_alreadyexist_error").show();
			  }
			  else
			  {
				   
				   $("label#product_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});		*/

			<!--Delete Product-->

/*$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
$("#deleteproduct").click(function() {
	
    $('.error').hide();

	if($('input[@name=product_id]:checked').size() == 0)
	
	{
		alert("Please choose atlist on product.");
		
		return false;
	}
	else
	{
		var confirm_delte=confirm('Are you sure you want to delete the selected product?');	
		if(confirm_delte)
		{
		var product_ids = new Array();
		$.each($("input[name='product_id[]']:checked"), function() {
		  product_ids.push($(this).val());
		  
			});
		
		}
		else
		{
		return false;	
		}
	}

	  
		
		var dataString = 'product_ids='+ product_ids + '&action=deleteproduct';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			$('#product_list').load('product_list.php');
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 $("label#delete_success").show();
				
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});
});	*/



<!--Delete Product Single-->

		$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
$("[id=singledeleteproduct]").click(function() {
	
    $('.error').hide();

	
		var confirm_delte=confirm('Are you sure you want to delete the selected photo?');	
		if(confirm_delte)
		{
		var single_product_id= $("#single_product_id").val();
		
		}
		else
		{
		return false;	
		}
	

	  
		
		var dataString = 'single_product_id='+ single_product_id + '&action=singledeleteproduct';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#product_list').fadeOut('slow').load('add_product_list.php').fadeIn("slow") &&  $("label#delete_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});
});	
     
	 
	 
	       <!--delete Multiple product-->
			 
			 
	 $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
	 

    $("[id='multiple_product_delete']").click(function() {  // triggred submit

         $('.error').hide();

       var product_ids="";
	   
	   
		
		 //alert(product_ids);
		 //alert(fields.val);
		 var fields = $("input[name='product_id[]']").serializeArray(); 
		 //alert(fields.value);
		  if (fields.length == 0) 
		  { 
			alert('You must select one or more Products'); 
			return false;
		  } 
		  else 
		  { 
			var confirm_delte=confirm('Are you sure you want to delete the selected Products?');
		 //confirm('Are you want to delete?');
			 if(confirm_delte)
			 {
			 
				
				$.each(fields , function(i, fd) {
				if(i==0)
				{
				product_ids= fd.value;	
				}
				else
				{
				product_ids= product_ids +","+fd.value;	
				}
					
				});
				
			}
		  } 

   var dataString = 'product_ids='+ product_ids + '&action=multipledeleteproduct';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#product_list').fadeOut('slow').load('add_product_list.php').fadeIn("slow") &&  $("label#delete_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});

}); 
 
	 
	 
	 
	 

      <!--Add  Gallery-->
  /*   $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  $("#add_photo_gallery").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var image = $("input#image").val();
		if (product_image == "") {
      $("label#image_error").show();
      $("input#image").focus();
      return false;
    }
		var image_name = $("input#image_name").val();
		if (image_name == "") {
      $("label#image_name_error").show();
      $("input#image_name").focus();
      return false;
    }
			var image_details = $("input#image_details").val();
		if (image_details== "") {
      $("label#image_details_error").show();
      $("input#image_details").focus();
      return false;
    }
		
	
		
		var dataString = 'image=' + image + '&image_name=' + image_name + '&image_details=' + image_details + '&action=addphotogallery';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		 if(data=="1")
			  {
				  
				   $('#image_name').val('');
				   $('#image_details').val('');
				   $("label#gallery_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#gallery_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});*/

    <!--Update gallery-->

/*
    $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
      
  $("#add_photo_gallery").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var product_image = $("input#product_image").val();
		if (product_image == "") {
      $("label#product_image_error").show();
      $("input#product_image").focus();
      return false;
    }
		var image_name = $("input#image_name").val();
		if (image_name == "") {
      $("label#image_name_error").show();
      $("input#image_name").focus();
      return false;
    }
			var image_details = $("input#image_details").val();
		if (image_details== "") {
      $("label#image_details_error").show();
      $("input#image_details").focus();
      return false;
    }
		
	var photo_id = $("input#photo_id").val();
		
		var dataString = 'product_image=' + product_image + '&image_name=' + image_name + '&image_details=' + image_details + '&action=updatephotogallery';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		 if(data=="1")
			  {
				  
				   $('#image_name').val('');
				   $('#image_details').val('');
				   $("label#add_photo_gallery").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#add_photo_gallery_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});*/
	
	<!--Multiple Delete Gallery photo-->
	 $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
	 

    $("[id='multiple_galleryphoto_delete']").click(function() {  // triggred submit

         $('.error').hide();

       var galleryphoto_ids="";
	   
	   
		
		 //alert(product_ids);
		 //alert(fields.val);
		 var fields = $("input[name='gallery_id[]']").serializeArray(); 
		 //alert(fields.value);
		  if (fields.length == 0) 
		  { 
			alert('You must select one or more Photos'); 
			return false;
		  } 
		  else 
		  { 
			var confirm_delte=confirm('Are you sure you want to delete the selected Photos?');
		 //confirm('Are you want to delete?');
			 if(confirm_delte)
			 {
			 
				
				$.each(fields , function(i, fd) {
				if(i==0)
				{
				galleryphoto_ids= fd.value;	
				}
				else
				{
				galleryphoto_ids= galleryphoto_ids +","+fd.value;	
				}
					
				});
				
			}
		  } 

   var dataString = 'galleryphoto_ids='+ galleryphoto_ids + '&action=multipledeletegalleryphoto';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#gallery_photo_list').fadeOut('slow').load('gallery_photo_list.php').fadeIn("slow") &&  $("label#delete_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});

}); 
 

 <!--Delete Gallery photo-->
			
			
			$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
$("[id=singledeletegalleryphoto]").click(function() {
	
    $('.error').hide();

	
		var confirm_delte=confirm('Are you sure you want to delete the selected photo?');	
		if(confirm_delte)
		{
		var single_galleryphoto_id= $("#single_galleryphoto_id").val();
		
		}
		else
		{
		return false;	
		}
	

	  
		
		var dataString = 'single_galleryphoto_id='+ single_galleryphoto_id + '&action=singledeletegalleryphoto';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#gallery_photo_list').fadeOut('slow').load('gallery_photo_list.php').fadeIn("slow") &&  $("label#delete_galleryphoto_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});
});	
           





<!--Add Header photo-->
			
/*$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });       
		  
  $("#add_header").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var file = $("input#file").val();
		if (file == "") {
      $("label#header_image_error").show();
      $("input#header_image").focus();
      return false;
	  
	}
		var image_details = $("#image_details").val();
		if (image_details == "") {
      $("label#Image_details_error").show();
      $("#image_details").focus();
      return false;
    }
		
	
		var dataString = 'file=' + file + '&image_details=' + image_details + '&action=addheaderphoto';
		
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   <!--$('#news_title').val('');-->
				   $('#image_details').val('');
				   
				   $("label#header_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#header_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});*/
 /* <!--update header Photo -->
 
  $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  
          
		  
  $("#update_header_photo").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var file = $("input#file").val();
		if (file == "") {
      $("label#header_image_error").show();
      $("input#header_image").focus();
      return false;
	}
		var image_details = $("#image_details").val();
		if (image_details == "") {
      $("label#Image_details_error").show();
      $("#image_details").focus();
      return false;
    }
	var header_id = $("#header_id").val();	
		
	
		var dataString = 'file=' + file + '&image_details=' + image_details +  '&header_id=' + header_id + '&action=updateheaderphoto';
		
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   <!--$('#news_title').val('');-->
				   $('#image_details').val('');
				   
				   $("label#header_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#header_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});*/
  
  <!--Multiple Delete Header photo-->
  
   $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
	 

    $("[id='multiple_headerphoto_delete']").click(function() {  // triggred submit

         $('.error').hide();

       var headerphoto_ids="";
	   
	   
		
		 //alert(product_ids);
		 //alert(fields.val);
		 var fields = $("input[name='header_id[]']").serializeArray(); 
		 //alert(fields.value);
		  if (fields.length == 0) 
		  { 
			alert('You must select one or more Photos'); 
			return false;
		  } 
		  else 
		  { 
			var confirm_delte=confirm('Are you sure you want to delete the selected Photos?');
		 //confirm('Are you want to delete?');
			 if(confirm_delte)
			 {
			 
				
				$.each(fields , function(i, fd) {
				if(i==0)
				{
				headerphoto_ids= fd.value;	
				}
				else
				{
				headerphoto_ids= headerphoto_ids +","+fd.value;	
				}
					
				});
				
			}
		  } 

   var dataString = 'headerphoto_ids='+ headerphoto_ids + '&action=multipledeleteheaderphoto';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#header_photo_list').fadeOut('slow').load('header_photo_list.php').fadeIn("slow") &&  $("label#delete_headerphoto_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});

}); 
 

  
   <!--Delete Header photo-->
			
			
			$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
$("[id=singledeleteheaderphoto]").click(function() {
	
    $('.error').hide();

	
		var confirm_delte=confirm('Are you sure you want to delete the selected photo?');	
		if(confirm_delte)
		{
		var single_headerphoto_id= $("#single_headerphoto_id").val();
		
		}
		else
		{
		return false;	
		}
	

	  
		
		var dataString = 'single_headerphoto_id='+ single_headerphoto_id + '&action=singledeleteheaderphoto';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				
				
				
				   if($('#header_photo_list').fadeOut('slow').load('header_photo_list.php').fadeIn("slow") &&  $(      "label#delete_headerphoto_success").show())
				{
					window.location.reload();
					}
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});
});	
  
  
  
  
  
  
          <!--Add News-->
	$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	  
  $("#add_news").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var news_title = $("input#news_title").val();
		if (news_title == "") {
      $("label#news_title_error").show();
      $("input#news_title").focus();
      return false;
    }
		var news_details = $("#news_details").val();
		if (news_details == "") {
      $("label#news_details_error").show();
      $("#news_details").focus();
      return false;
    }
		
	
		var dataString = 'news_title=' + news_title + '&news_details=' + news_details + '&action=addnews';
		/*alert (dataString);return false;*/
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   $('#news_title').val('');
				   $('#news_details').val('');
				   
				   $("label#news_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#news_added_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});

<!--Update News-->
$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
        
  $("#update_news").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var news_title = $("input#news_title").val();
		if (news_title == "") {
      $("label#news_title_error").show();
      $("input#news_title").focus();
      return false;
    }
		var news_details = $("#news_details").val();
		if (news_details == "") {
      $("label#news_details_error").show();
      $("#news_details").focus();
      return false;
    }
	var news_id = $("#news_id").val();	
	
		var dataString = 'news_title=' + news_title + '&news_details=' + news_details + '&news_id=' + news_id + '&action=updatenews';
		/*alert (dataString);return false;*/
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   $('#news_title').val('');
				   $('#news_details').val('');
				   
				   $("label#news_update_success").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#news_update_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});
          <!--Multiple Delete News-->
		  
		 $(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
	 

    $("[id='multiple_news_delete']").click(function() {  // triggred submit

         $('.error').hide();

       var allnews_ids="";
	   
	   
		
		 //alert(product_ids);
		 //alert(fields.val);
		 var fields = $("input[name='news_id[]']").serializeArray(); 
		 //alert(fields.value);
		  if (fields.length == 0) 
		  { 
			alert('You must select one or more Photos'); 
			return false;
		  } 
		  else 
		  { 
			var confirm_delte=confirm('Are you sure you want to delete the selected Photos?');
		 //confirm('Are you want to delete?');
			 if(confirm_delte)
			 {
			 
				
				$.each(fields , function(i, fd) {
				if(i==0)
				{
				allnews_ids= fd.value;	
				}
				else
				{
				allnews_ids= allnews_ids +","+fd.value;	
				}
					
				});
				
			}
		  } 

   var dataString = 'allnews_ids='+ allnews_ids + '&action=multipledeletenews';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				 
				if($('#news_list').fadeOut('slow').load('news_list.php').fadeIn("slow") &&  $("label#delete_news_success").show())
				{
					window.location.reload();
					}
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});

}); 
   	  
		  		  
             <!--Single Delete News-->
			
			
			$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
$("[id=singledeletenews]").click(function() {
	
    $('.error').hide();

	
		var confirm_delte=confirm('Are you sure you want to delete the selected product?');	
		if(confirm_delte)
		{
		var single_news_id = $("#single_news_id").val();
		
		}
		else
		{
		return false;	
		}
	

	  
		
		var dataString = 'single_news_id='+ single_news_id + '&action=singledeletenews';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
			
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				 
				  if($('#news_list').fadeOut('slow').load('news_list.php').fadeIn("slow") &&  $(      "label#delete_headerphoto_success").show())
				{
					window.location.reload();
					}
				
				
				}
				
			  else
			  {
				  
				  $("label#login_error").show();
				
			  }
		  }
     });
    return false;
	});
});	


          <!--Login-->
$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
  
  
$("#login").click(function() {

		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var user_name = $("input#user_name").val();
		if (user_name == "") {
      $("label#user_name_error").show();
      $("input#user_name").focus();
      return false;
    }
		var password = $("input#password").val();
		if (password == "") {
      $("label#password_error").show();
      $("input#password").focus();
      return false;
    }
	var login_type = $("input[name=login_type]:checked").val();
	
	if(login_type=="photo_upload" || login_type=="notice_upload" || login_type=="product_manage")
		{
			
		
		}
	else
		{
			
		$("label#login_type_error").show();
		  $("input#login_type").focus();
		  return false;
		}
		
		
		//alert(password);
		
		var dataString = 'user_name='+ user_name + '&password=' + password + '&login_type=' + login_type+ '&action=login';
		//alert(dataString);
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				window.location.replace("dashboard.php");  
			  }
			  else
			  {
				  
				  $("label#login_error").show();
				//window.location.replace("index.php");  
			  }
		  }
     });
    return false;
	});
});	


             <!--change password-->
			 
$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	
  
  
  
/*$("#login").click*/$("#changepassword").click(function() {
						   
				   
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var user_name = $("input#user_name").val();
		if (user_name == "") {
      $("label#user_name_error").show();
      $("input#user_name").focus();
      return false;
    }
		var old_password = $("input#old_password").val();
		if (old_password == "") {
      $("label#old_password_error").show();
      $("input#old_password").focus();
      return false;
    }
	var new_password = $("input#new_password").val();
		if (new_password == "") {
      $("label#new_password_error").show();
      $("input#new_password").focus();
      return false;
    }
	
		//alert(user_name);
		//alert(password);
		
		var dataString = 'user_name='+ user_name + '&old_password=' + old_password+ '&new_password=' + new_password+ '&action=changepassword';
		//alert (dataString);return false;
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		  	  if(data=="1")
			  {
				  //$(".loginbox").hide();
				  document.getElementById('light').style.display='none';
				  document.getElementById('fade').style.display='none';
				  $("label#password_successfully_changed").show();
				
			  }
			  else if(data=="2")
			  {
				
				  $("label#wrong_usernam_password_error").show();
				//window.location.replace("index.php");  
			  }
			   else
			  {
				 
				  $("label#wrong_usernam_password_error").show();
				//window.location.replace("index.php");  
			  }
		  }
     });
    return false;
	});
});	

/*		<!--Add header photo-->
$(document).ready(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });
  
  $('input.text-input2').css({backgroundColor:"#FFFFFF"});
  $('input.text-input2').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input2').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });	  
  $("#add_photo_gallery").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
	
		 var file_name =  $("#file[]").serialize();
	 alert(file_name);
	 exit;
		if (file_name  == "") {
      $("label#news_title_error").show();
      $("input#file_name").focus();
      return false;
	}
	  var image_name = $("input#image_name").val();
		if (image_name == "") {
      $("label#news_title_error").show();
      $("input#image_name").focus();
      return false;
    }
		var image_details = $("#image_details").val();
		if (image_details == "") {
      $("label#news_details_error").show();
      $("#image_details").focus();
      return false;
    }
	
    	
	
		var dataString = 'image_name=' + image_name + '&image_details=' + image_details + '&action=addheaderphoto';
		
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
			
		})
		.ajaxComplete(function(){
			$(this).hide();
		});	
		
		$.ajax({
      type: "POST",
      url: "actions.php",
      data: dataString,
      success: function(data) {
		   if(data=="1")
			  {
				   $('#file_name').val('');
				   $('#image_name').val('');
				   $('#image_details').val('');
				   $("label#add_photo_gallery").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#add_photo_gallery_error").show();
				   
			  }
        
      }
     });
    return false;
	});
});*/