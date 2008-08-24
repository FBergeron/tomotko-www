function showScreenshots() {
    $( 'div.historyScreenshots' ).fadeIn( 'slow' );
    $( 'input#toggleShowHideScreenshotsButton' ).attr( 'value', 'Hide Screenshots' );
}

function hideScreenshots() {
    $( 'div.historyScreenshots' ).fadeOut( 'slow' );
    $( 'input#toggleShowHideScreenshotsButton' ).value( 'Show Screenshots' );
}

function toggleScreenshots() {
    if( $( 'input#toggleShowHideScreenshotsButton' ).attr( 'value' ).indexOf( 'Show' ) != -1 )
        showScreenshots();
    else
        hideScreenshots();
}
