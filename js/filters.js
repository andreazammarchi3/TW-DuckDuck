$(document).ready(function() {
    window.addEventListener('unload', function(event) {
        $("input:radio[name=filter]:checked")[0].checked = false;
    }, false);
});

function toggleFilters() {
    if ($('#filtersContainer').css('display') == 'none') {
        $('#filtersContainer').css('display','flex');
    } else {
          $('#filtersContainer').css('display','none');
    }
}