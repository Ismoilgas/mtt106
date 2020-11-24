$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


// $(document).ready(function(){
   // $('.product').css('opacity', 0.7)
   // .mouseover(function(){
   //    $(this).css('opacity', 1);  
   // })
   // .mouseout(function(){
   //    $(this).css('opacity', 0.7);  
   // });
// });

var BaseRecord={


destroy: function(id){
   var ajaxSetting={
      method: 'delete',
      url: './products/'+id,
      //data: {
      success: function(data){
        // alert(data); 
         $('#t-pannel').html(data.table); //!!!.back-pannel
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('id'));
            return false;
          });         
      },
   };
   $.ajax(ajaxSetting);
},

destroy1: function(id){
   var ajaxSetting={
      method: 'delete',
      url: './photos/'+id,
      //data: {
      success: function(data){
        // alert(data); 
         $('#img-pannel').html(data.table); //!!!.back-pannel
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy1($(this).attr('id'));
            return false;
          });         
      },
   };
   $.ajax(ajaxSetting);
},




};
