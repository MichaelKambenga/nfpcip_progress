
$(function() {

    $('#reports-resultareas').change(function() {
        var sv = $('#reports-resultareas').val();
        if (sv === 'ALL') {
            $('#ResultArea-id').hide();
            $('#Result-id').hide();
        }
        if (sv === 'AAR') {
            $('#ResultArea-id').show();
            $('#Result-id').hide();
        }
        if (sv === 'ATN') {
            $('#ResultArea-id').hide();
            $('#Result-id').show();
        }
    })

    $('#reports-partners').change(function() {
        var sv = $('#reports-partners').val();
        if (sv === 'ONE') {
            $('#Partner-id').show();
        }
        else {
            $('#Partner-id').hide();
        }
    })

    $('#reports-funders').change(function() {
        var sv = $('#reports-funders').val();
        if (sv === 'ONE') {
            $('#Funder-id').show();
        }
        else {
            $('#Funder-id').hide();
        }
    })

})


