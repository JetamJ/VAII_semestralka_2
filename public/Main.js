$(document).ready(function(){
    $("#vyberMesto").change(function (){
        $.post('?c=home&a=getPobocka',{id:$(this).val()},function (data){
            if(typeof data.kontakt.id !== undefined){
                vyplnKontakt(data.kontakt);
            }
            if(typeof data.otvaracky.id !== undefined){
                vyplnOtvaracky(data.otvaracky);
            }
        })
    })
    $('#vyberMesto').change();

    $('.btn-vymaz').click(function (){
        id = $(this).attr('itemid');
        $.post('?c=home&a=vymaz&id='+id,function (data){
            if(typeof data !== undefined && data == true){
                $('.vymaz_'+id).hide();
            }else if (typeof data.err !== undefined){
                alert(data.err);
            }
        })
    })
})

function vyplnKontakt(data){
    $('#poloha').text(data.poloha);
    $('#telefon').text(data.telefon);
    $('#email').text(data.email);
}

function vyplnOtvaracky(data){
    $("#otvaracky").html("");
    $.each(data, function (index, row){
        console.log(row);
        if( row.zatvorene == 0 ){
            test = "<p>" +row.den + ": " + row.cas_od + "-" + row.cas_do + "</p>";
        } else {
            test = "<p>" +row.den + ": zatvorene</p>";
        }
        $('#otvaracky').append(test);
    });
    console.log(data);
}