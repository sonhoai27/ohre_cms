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
function makeAliasV2(idName, text) {
    var str = $("#"+idName).val();
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|\\|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g, text);
    str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g, ""); //cắt bỏ ký tự - ở đầu và cuối chuỗi
    $("#"+idName).val(str)
}
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
var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();
function searchProductForGroup(){
    delay(function(){
        $.post(BASE_URL+"products/search_product_group_handle", {keyword: $("#product_name").val(), idGroup: $("#id-product-group").data("id")}, function (dataSearch) {
            if(dataSearch !== ""){
                toastr.success('Thành công!', 'Tìm sản phẩm với keyword '+$("#product_name").val()+" thành công.",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
                $("#img-search-product-group").remove()
                $("#myDataTable").remove()
                $("#myDataTable_wrapper").remove()
                $("#dataTableGroupSearchProduct").append('<table class="table table-bordered mb-0" id="myDataTable" style="width:100%"></table>')
                $('#myDataTable').DataTable({
                    data: JSON.parse(dataSearch),
                    columns: [
                        { title: "Tên" },
                        { title: "Giá" },
                        { title: "Cửa hàng" }
                    ]
                });
                $("#myDataTable_length").remove()
                $("#myDataTable_filter").css({
                    float: 'right'
                })
            }else {
                $("#myDataTable").remove()
                $("#dataTableGroupSearchProduct").html('<img src="'+BASE_URL+'public/images/cdn/empty_state.png" alt="" id="img-search-product-group" class="img-fluid" style="display: block;margin: auto">')
            }
        })
    }, 1000)
}

function searchProduct() {
    alert($("#product_name").val())
}