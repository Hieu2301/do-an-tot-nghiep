$('#upload').change(function(){
    const form = new FormData();
    form.append('file',$(this)[0].file[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: form,
        url:'/admin/upload/services',
        success: function (results) {
            console.log(results);
        }
    });
});