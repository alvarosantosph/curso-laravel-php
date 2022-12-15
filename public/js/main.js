/* Dropdown */
var elemDrop = document.querySelectorAll('.dropdown-trigger');
var instanceDrop = M.Dropdown.init(elemDrop, {
    coverTrigger: false,
    constrainWidth: false
});


/* SideNav */
var elemSideNav = document.querySelectorAll('.sidenav');
var instanceSideNav = M.Sidenav.init(elemSideNav);


/* Modal */
var elemsModal = document.querySelectorAll('.modal');
var instanceModal = M.Modal.init(elemsModal);

/* Select */
var elems = document.querySelectorAll('select');
var instances = M.FormSelect.init(elems);

/* Fullscreen */
function fullScreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
}

$(document).ready(function () {
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#search tr").filter(function () {
            $(this).toggle(
                $(this).text().toLowerCase().indexOf(value) > -1
            );
        });
    });
});

$(document).ready(function () {
    $('.modal').modal({
        dismissible: false
    });
});

function resetarModalCreate() {
    $("#form-create").trigger("reset");
}

