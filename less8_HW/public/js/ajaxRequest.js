

function getdetails(id, name, price, action, path){
    $.ajax({
        type: "POST",
        url: path,
        data: {sendId:id, sendName:name, sendPrice:price, action:action}
    }).done(function( result )
        {
           $("#msg").html( name+ " - " + result );
           $('#button' + id).attr('class', 'alert-dark');
        });
}

