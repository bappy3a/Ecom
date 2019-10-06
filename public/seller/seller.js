  $('#productTable').DataTable();
function selectcategory(catid){
  $.ajax({
    url:"/findcategory",
    method:"GET",
    data:{'catid':catid},
    success:function(mess){
      // console.log(mess.count);
      if(mess.count>0){
        $('#subcategory').html('');
        $('#subcategory').append('<option selected="" value="">--Select Subcategory--</option>');
        $('#catid').val(catid);
        for (var i=0; i < mess.count; i++) {
          $('#subcategory').append('<option  value="'+mess.subid[i]+'">'+mess.subcat[i]+'</option>');
        }
      }else{
        $('#subcategory').html('');
        $('#subcategory').append('<option value="">--Select Subcategory--</option>');
      }
      
    }
  })
}

function brandfind(catid,subcatid){
  $.ajax({
    url:'findbrandselle',
    method:"GET",
    data:{'catid':catid,'subcatid':subcatid},
    success:function(mess){
      console.log(mess.count);
      $('#brand').html('');
      for (var i = 0; i < mess.count; i++) {
        $('#brand').append('<option value="'+mess.brands[i].id+'">'+mess.brands[i].name+'</option>');
      }
    }
  });
  
}


