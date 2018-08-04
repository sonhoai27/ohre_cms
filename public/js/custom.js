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

$('#edit-brand').on('shown.bs.modal', function (event)  {
    var button = $(event.relatedTarget)
    var modal = $(this)
    $.post(BASE_URL+"/category/detail_brand",{id: button.data("id")}, function (response) {
        const res = JSON.parse(response)
        console.log(res)
        modal.find("#name-brand").val(res.brand_name)
        modal.find("#alias-brand").val(res.brand_alias)
        modal.find("#id-brand").val(res.brand_id)
    })
})
$('#edit-brand').on('hidden.bs.modal', function () {
    var modal = $(this)
    modal.find("#name-brand").val('')
    modal.find("#alias-brand").val('')
    modal.find("#id-brand").val('')
})
function searchProductForGroup(){
    delay(function(){
        $.post(BASE_URL+"products/search_product_group_handle", {keyword: $("#product_name").val(), idGroup: $("#id-product-group").data("id")}, function (dataSearch) {
            if(dataSearch !== ""){
                console.log(JSON.parse(dataSearch))
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

$(function () {
    $('.datepicker-day').datepicker({
        dateFormat: 'dd-mm-yy',
    });
    $('.datepicker-month').datepicker({
        dateFormat: 'mm-yy',
        inline: true,
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        onClose: function (dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            getMonthUser(1)
        }
    });
    $('.datepicker-year').datepicker({
        dateFormat: 'yy',
        inline: true,
        changeYear: true,
        showButtonPanel: true,
        onClose: function (dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
           getYearUser(1)
        }
    });
})

function getDayUser() {
    const date = ($("#day-user").val()).split("-")
    $.post(BASE_URL + 'analytics/detailDayAnalyticsUser', {
        date: {
            day: date[0],
            month: date[1],
            year: date[2]
        }, url: 'day'
    }, function (result) {
        $("#user-day").remove()
        $("#user-day_wrapper").remove()
        $("#mytb1").append('<table class="table table-bordered mb-0" id="user-day" style="width:100%"></table>')
        if(JSON.parse(result).length > 0){
            $('#user-day').DataTable({
                data: JSON.parse(result),
                columns: [
                    { title: "IP" },
                    { title: "Browser info" },
                    { title: "Toạ độ" },
                    { title: "Thành phố" }
                ]
            });
        }else {
            toastr.warning('Cảnh báo!', "Ngày này không có dữ liệu!",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
        }
    })
}

function getMonthUser(type) {
    var date
    if(type === 0){
         date = new Date()
    }else {
        date = ($("#month-chart").val()).split("-")
    }
    $.post(BASE_URL + 'analytics/detailDayAnalyticsUser', {
        date: {
            month: (type === 0 ? date.getMonth()+1 : date[0]),
            year: (type === 0 ? date.getFullYear() : date[1])
        }, url: 'month'
    }, function (result) {
        drawColumnMonthUser(JSON.parse(result).chart, 'column-chart-month-user')
        console.log(JSON.parse(result))
        $("#user-month").remove()
        $("#user-month_wrapper").remove()
        $("#mytb2").append('<table class="table table-bordered mb-0" id="user-month" style="width:100%"></table>')
        if((JSON.parse(result).list).length > 0){
            $('#user-month').DataTable({
                data: JSON.parse(result).list,
                columns: [
                    { title: "IP" },
                    { title: "Browser info" },
                    { title: "Toạ độ" },
                    { title: "Thành phố" }
                ]
            });
        }else {
            toastr.warning('Cảnh báo!', "Ngày này không có dữ liệu!",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
        }
    })
}

function getYearUser(type) {
    var date
    if(type === 0){
        date = new Date()
    }else {
        date = ($("#year-chart").val()).split("-")
    }
    $.post(BASE_URL + 'analytics/detailDayAnalyticsUser', {
        date: {
            year: (type === 0 ? date.getFullYear() : date[0])
        }, url: 'year'
    }, function (result) {
        console.log(JSON.parse(result))
        drawColumnMonthUser(JSON.parse(result).chart, 'column-chart-year-user')
        $("#user-year").remove()
        $("#user-year_wrapper").remove()
        $("#mytb3").append('<table class="table table-bordered mb-0" id="user-year" style="width:100%"></table>')
        if((JSON.parse(result).list).length > 0){
            $('#user-year').DataTable({
                data: JSON.parse(result).list,
                columns: [
                    { title: "IP" },
                    { title: "Browser info" },
                    { title: "Toạ độ" },
                    { title: "Thành phố" }
                ]
            });
        }else {
            toastr.warning('Cảnh báo!', "Ngày này không có dữ liệu!",{"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
        }
    })
}
function drawColumnMonthUser(result, id) {
    var data = google.visualization.arrayToDataTable(result);
    var options_column_stacked = {
        height: 300,
        fontSize: 12,
        isStacked: true,
        colors: ['#99B898'],
        chartArea: {
            left: '5%',
            width: '90%',
            height: 250
        },
        vAxis: {
            gridlines: {
                color: '#e9e9e9',
                count: 10
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 12
            }
        }
    };
    var bar = new google.visualization.ColumnChart(document.getElementById(id));
    bar.draw(data, options_column_stacked);

}
