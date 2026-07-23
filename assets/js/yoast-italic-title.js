jQuery(window).on("YoastSEO:ready", function () {
    const element = document.getElementById('yoast-snippet-preview-container');

    const newInner = element.innerHTML.replace(
        "%%italic_title%%",
        italicTitleData.italicTitle
    );

    element.innerHTML = newInner;
});