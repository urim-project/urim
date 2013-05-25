/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
var isiPad = navigator.userAgent.match(/iPad/i) != null;

/* Optimized PLACEHOLDER for iOS6 - Mooki ( http://mooki83.tistory.com ) */
$(document).ready(function(){
    $(window).bind("orientationchange.fm_optimizeInput", fm_optimizeInput);
});

/* Default class modification */
$.extend( $.fn.dataTableExt.oStdClasses, {
"sWrapper": "dataTables_wrapper form-inline"
} );


/* API method to get paging information */
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
{
return {
"iStart": oSettings._iDisplayStart,
"iEnd": oSettings.fnDisplayEnd(),
"iLength": oSettings._iDisplayLength,
"iTotal": oSettings.fnRecordsTotal(),
"iFilteredTotal": oSettings.fnRecordsDisplay(),
"iPage": Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
"iTotalPages": Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
};
}
$.extend( $.fn.dataTableExt.oPagination, {
"bootstrap": {
"fnInit": function( oSettings, nPaging, fnDraw ) {
var oLang = oSettings.oLanguage.oPaginate;
var fnClickHandler = function ( e ) {
e.preventDefault();
if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
fnDraw( oSettings );
}
};
$(nPaging).addClass('pagination pagination-right').append(
'<ul>' +
'<li class="prev disabled"><a href="#">' + oLang.sFirst + '</a></li>' +
'<li class="prev disabled"><a href="#">'+oLang.sPrevious+'</a></li>'+
'<li class="next disabled"><a href="#">' + oLang.sNext + '</a></li>' +
'<li class="next disabled"><a href="#">' + oLang.sLast + '</a></li>' +
'</ul>'
);
var els = $('a', nPaging);
$(els[0]).bind('click.DT', { action: "first" }, fnClickHandler);
$(els[1]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
$(els[2]).bind('click.DT', { action: "next" }, fnClickHandler);
$(els[3]).bind('click.DT', { action: "last" }, fnClickHandler);
},
"fnUpdate": function ( oSettings, fnDraw ) {
var iListLength = 5;
var oPaging = oSettings.oInstance.fnPagingInfo();
var an = oSettings.aanFeatures.p;
var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);
if ( oPaging.iTotalPages < iListLength) {
iStart = 1;
iEnd = oPaging.iTotalPages;
}
else if ( oPaging.iPage <= iHalf ) {
iStart = 1;
iEnd = iListLength;
} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
iStart = oPaging.iTotalPages - iListLength + 1;
iEnd = oPaging.iTotalPages;
} else {
iStart = oPaging.iPage - iHalf + 1;
iEnd = iStart + iListLength - 1;
}
for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
// Remove the middle elements
$('li:gt(1)', an[i]).filter(':not(.next)').remove();
// Add the new list items and their event handlers
for ( j=iStart ; j<=iEnd ; j++ ) {
sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
$('<li '+sClass+'><a href="#">'+j+'</a></li>')
.insertBefore( $('li.next:first', an[i])[0] )
.bind('click', function (e) {
e.preventDefault();
oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
fnDraw( oSettings );
} );
}
// Add / remove disabled classes from the static elements
if ( oPaging.iPage === 0 ) {
$('li.prev', an[i]).addClass('disabled');
} else {
$('li.prev', an[i]).removeClass('disabled');
}
if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
$('li.next', an[i]).addClass('disabled');
} else {
$('li.next', an[i]).removeClass('disabled');
}
}
}
}
} );

/*
 * TableTools Bootstrap compatibility
 * Required TableTools 2.1+
 */
if ( $.fn.DataTable.TableTools ) {
    // Set the classes that TableTools uses to something suitable for Bootstrap
    $.extend( true, $.fn.DataTable.TableTools.classes, {
        "container": "DTTT btn-group",
        "buttons": {
            "normal": "btn",
            "disabled": "disabled"
        },
        "collection": {
            "container": "DTTT_dropdown dropdown-menu",
            "buttons": {
                "normal": "",
                "disabled": "disabled"
            }
        },
        "print": {
            "info": "DTTT_print_info modal"
        },
        "select": {
            "row": "active"
        }
    } );

    // Have the collection use a bootstrap compatible dropdown
    $.extend( true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
        "collection": {
            "container": "ul",
            "button": "li",
            "liner": "a"
        }
    } );
}


function fm_optimizeInput(){
    $("input[placeholder],textarea[placeholder]").each(function(){
        var tmpText = $(this).attr("placeholder");
        if ( tmpText != "" ) {
            $(this).attr("placeholder", "").attr("placeholder", tmpText);
        }
    })
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

/* ref: http://www.shaftek.org/blog/2005/06/03/removing-vowels-from-hebrew-unicode-text/ */
$backupVowels = '';
function stripVowels(rawString)
{
    var newString = '';
    for(j=0; j<rawString.length; j++) {
        if(rawString.charCodeAt(j)<1425
             || rawString.charCodeAt(j)>1479)
        { newString = newString + rawString.charAt(j); }
    }
    return(newString);
}

$(function() {

    $('.book-title small').toggle(function() {
        $str = $('.the-message a').html();
        $backupVowels = $str;
        $noVowels = stripVowels($str);
        $('.the-message a').html($noVowels);

    }, function() {
        $('.the-message a').html($backupVowels);
    });

    if (jQuery.browser.mobile) {
        $('code a').click(function(e) {
            e.preventDefault();
            var showmsg = noty({
                text: $(this).attr('title'),
                type: 'warning',
                layout: 'bottom',
                timeout: 1500,
                modal: true
            });
        });
    } else {
        $('code a').tooltip({
            'placement': 'left'
        }).click(function(e) {
            e.preventDefault();
            $(this).tooltip('toggle');
        });
    }

    if (!jQuery.browser.mobile && !isiPad) {
        $('.the-message a').clickover({
            html: true,
            placement: 'bottom',
            content: function() {
                var ref = $(this).attr('data-ref');
                var refid = '#pop-content-' + ref;
                return $(refid).html();
            },
            onShown: function() {
                var ref = this.options.ref;
                var refid = '#pop-content-' + ref;
                window.location = refid;
            },
            template: '<div class="popover visible-desktop"><div class="arrow"></div><div class="popover-inner"><div class="popover-content"><p></p></div></div></div>'
            //<h3 class="popover-title"></h3>
            //Need to have this click check since the tooltip will not close on mobile
        });
    }

    $('#transTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    if (!jQuery.browser.mobile && !isiPad) {
        $('#sidebar.nano').nanoScroller();
    }

    $('[rel="clickover"]').clickover({
        html: true,
        height: 'auto',
        placement: 'left',
        content: function() {
            var ref = $(this).attr('data-ref');
            return $('.' + ref).html();
        },
    });

    $('[rel="fhl-note"]').live('click', function(e) {
        var fhl_note_id = $(this).attr('data-ref');
        var type = '';
        if ( fhl_note_id.charAt(0) == 'H' ) {
            type = 'hebrew';
        }
        if ( fhl_note_id.charAt(0) == 'G' ) {
            type = 'greek';
        }
        var content = '<div class="ver">字典由信望愛 CBOL 提供</div><div class="title ' + type + '">' + $('#pop-content-' + fhl_note_id + ' .title').html() + '</div><div class="strongs">' + $('#pop-content-' + fhl_note_id + ' .strongs').html() + '</div>' + $('#fhl-note-' + fhl_note_id).html();
        var showmsg = noty({
            text: content,
            type: 'warning',
            layout: 'bottomCenter',
            modal: false,
            callback: {
                onShow: function() {},
                afterShow: function() {},
                onClose: function() {},
                afterClose: function() {
                    var pop_content_id = '#pop-content-' + fhl_note_id;
                    window.location = pop_content_id;
                }
            },
        });
    });

    $('#panel-nav').mmenu({
        slidingSubmenus: true,
        addCounters: false,
        closeOnClick: true,
        position: 'left'
    });

    var strongs = getParameterByName('strongs');
    $(".the-message a[data-ref='" + strongs + "']").addClass('highlight');

    $('#strongsform input').keypress(function(e){
        if (e.keyCode == 13) {
            e.preventDefault();

            $.fancybox({
                type: 'iframe',
                href: '../search/' + $('#strongsform input').val() + '.html',
                maxWidth    : 800,
                maxHeight   : 600,
                fitToView   : true,
                width       : '100%',
                height      : '100%',
                autoSize    : false,
                closeClick  : true,
                openEffect  : 'none',
                closeEffect : 'none'
            });

        }
    });

    $('#strongs-results').dataTable( {
        "bProcessing": true,
        "sAjaxSource": '../search/' + $('.strongs').text() + '.json',
        "bAutoWidth": false,
        "bSort": false,
        "sDom": "<'row'<'span9'f>'row'<'span12'p>r>t<'row'<'span8'i><'span4'l>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "每頁顯示 _MENU_ 筆資料",
            "sZeroRecords": "甚麼都找不到 >_<",
            "sInfo": "顯示 _START_ 到 _END_ 共 _TOTAL_ 筆資料",
            "sInfoEmpty": "顯示 0 到 0 筆、共 0 筆資料",
            "sInfoFiltered": "(從 _MAX_ 筆資料中過濾)",
            "oPaginate": {
                "sFirst": "Α",
                "sLast": "Ω",
                "sNext": "》",
                "sPrevious": "《"
            }
        }
    } );

    $(".various").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : true,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : true,
        openEffect  : 'none',
        closeEffect : 'none'
    });
});


$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'fold',
        pauseTime: 5000,
        animSpeed: 1500,
        directionNav: false,
        controlNav: false,
        afterLoad: (function() {

           //round top left corner and bottom left corner of first slice
            $('.nivo-slice').first().css({
              '-webkit-border-bottom-left-radius': '9px',
              '-webkit-border-top-left-radius': '9px',
              '-moz-border-radius-bottomleft': '9px',
              '-moz-border-radius-topleft': '9px',
              'border-bottom-left-radius': '9px',
              'border-top-left-radius': '9px'
            });

           //round top right corner and bottom right corner of lastslice
            $('.nivo-slice').last().css({
              '-webkit-border-bottom-right-radius': '9px',
              '-webkit-border-top-right-radius': '9px',
              '-moz-border-radius-bottomright': '9px',
              '-moz-border-radius-topright': '9px',
              'border-bottom-right-radius': '9px',
              'border-top-right-radius': '9px'
            });
        })
    });
});