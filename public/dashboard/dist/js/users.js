//open modal
window.addEventListener('show-form', event => {
    $('#form').modal('show');
});

//if it is validated and out of the modal then remove residue data
$(".exit").on("click", function(e){
    $("#form").modal("hide");
    e.stopPropagation();
    location.reload(); //refreshed
  });

//hidden modal
window.addEventListener('hidden-form', event => {
    $('#form').modal('hide');
});

//hidden modal
window.addEventListener('hidden-modal-deleted', event => {
    $('#confirmation').modal('hide');
});

//
window.addEventListener('alert-add', event => {
    swal({
        icon: 'success',
        title: 'Your user has been saved',
        showConfirmButton: true,
    });
});

//
window.addEventListener('alert-update', event => {
    swal({
        icon: 'info',
        title: 'Your edit has been saved',
        showConfirmButton: true,

    });
});

window.addEventListener('form-deleted', event => {
    $('#confirmation').modal('show');

});

//
window.addEventListener('alert-deleted', event => {
    swal({
        icon: 'error',
        title: 'Your user has been delete',
        showConfirmButton: true
        //timer: 2500
    });
});
//and


