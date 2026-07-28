jQuery(window).on('YoastSEO:ready', function () {
    const refreshTitle = function () {
        const previewContainer = document.getElementById('yoast-snippet-preview-container');
        const innerHtml = previewContainer.innerHTML;
        previewContainer.innerHTML = innerHtml.replace("%%italic_title%%", italicTitleData.italicTitle);
    }

    refreshTitle();

    document.getElementById('headlessui-switch-:r0:').addEventListener('click', function () {
        console.log('halo');

        setTimeout(function() {
            refreshTitle();
        }, 100)
    });
});