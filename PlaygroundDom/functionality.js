function loadPreviousPage(currentPageNumber) {
    const newPage = "grid-"+(currentPageNumber-1)+".html";
    if (currentPageNumber > 0) {
        window.location.href = newPage;
    } else {
        window.location.reload(true);
    }
}

function loadNextPage(currentPageNumber) {
    const newPage = "grid-"+(currentPageNumber+1)+".html";
    /*
        Need Logic to check if there is a next page!
    */
    window.location.href = newPage;
}

