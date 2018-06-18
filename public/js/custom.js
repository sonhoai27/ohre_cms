function makeAlias(idName, idAlias) {
    var str = $("#"+idName).val();
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|\\|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g, "-");
    str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g, ""); //cắt bỏ ký tự - ở đầu và cuối chuỗi
    $("#"+idAlias).val(str)
}
$(".select2").select2();

$('#productDetail').on('shown.bs.modal', function (event)  {
    var button = $(event.relatedTarget)
    var modal = $(this)
    $.post("http://localhost:8080/ohre/products/detail_handle",{id: button.data("id")}, function (response) {
        console.log("respssonse")
        if(response.status === 403){

        }else {
            modal.find("#content-product-detail").html(response)
        }
    })
})
//handle btn close modal
$('#productDetail').on('hidden.bs.modal', function () {
    var modal = $(this)
    modal.find("#child-product-content").remove()
})