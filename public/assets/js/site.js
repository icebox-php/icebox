$(function(){
  $('.confirm-delete-form').on('submit', function(){
    if(confirm('Are you sure?')) {
      return true;
    } else {
      return false;
    }
  });
});